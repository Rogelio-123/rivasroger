<?php

namespace App\Http\Controllers;

use App\Output;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OutputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validación
        $validatedData = $request->validate([
            'product' => 'required',
            'quantity' => 'required',
            'um' => 'required',
            'reason' => 'required',
            'date' => 'required'
        ]);

        // Almacenar en la BD (Sin Modelo)
        DB::table('outputs')->insert([
            'product_id' => $validatedData['product'],
            'quantity' => $validatedData['quantity'],
            'um' => $validatedData['um'],
            'reason' => $validatedData['reason'],
            'date' => $validatedData['date']
        ]);

        // Consulto la bd, buscando el producto y su cantidad atravez del product_id
        $stock = DB::table('stocks')
            ->select('product_id', 'quantity')
            ->where('product_id', $validatedData['product'])
            ->get();

        if (count($stock) >= 1) {

            //Aquí guardo el producto que voy actualizar
            $product = $stock[0]->product_id;

            // Aquí guardo la nueva cantidad que voy actulizar
            $newQuantity = $stock[0]->quantity - $validatedData['quantity'];

            if ($product == $validatedData['product']) {

                DB::table('stocks')
                    ->where('id', $product)
                    ->update(['quantity' => $newQuantity,]);
            }
        }

        // Redireccionar
        return redirect()->action('StockController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Output  $output
     * @return \Illuminate\Http\Response
     */
    public function show(Output $output)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Output  $output
     * @return \Illuminate\Http\Response
     */
    public function edit(Output $output)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Output  $output
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Output $output)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Output  $output
     * @return \Illuminate\Http\Response
     */
    public function destroy(Output $output)
    {
        $stock = DB::table('stocks')
            ->select('quantity')
            ->where('product_id', $output->product_id)
            ->get();

        // return $stock;
        // dd($stock[0]->quantity);

        $quantity = $stock[0]->quantity + $output->quantity;

        DB::table('stocks')
            ->where('id', $output->product_id)
            ->update(['quantity' => $quantity]);

        $output->delete();
        return redirect()->route('inventory.index')->with('delete', 'ok');
    }
}
