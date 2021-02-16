<?php

namespace App\Http\Controllers;

use App\Input;
use App\Product;
use App\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InputController extends Controller
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
            'date' => 'required'
        ]);

        // $stock = DB::table('stocks')
        //     ->select('product_id', 'quantity')
        //     ->where('product_id', $validatedData['product'])
        //     ->get();

        // return $stock;
        // dd($stock);

        // Almacenar en la BD (Sin Modelo)
        DB::table('inputs')->insert([
            'product_id' => $validatedData['product'],
            'quantity' => $validatedData['quantity'],
            'date' => $validatedData['date'],
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
            $newQuantity = $stock[0]->quantity + $validatedData['quantity'];

            if ($product == $validatedData['product']) {

                DB::table('stocks')
                    ->where('id', $product)
                    ->update(['quantity' => $newQuantity,]);
            }
        } else {

            // Sí el producto no existe se agrega al stock
            DB::table('stocks')->insert([
                'product_id' => $validatedData['product'],
                'quantity' => $validatedData['quantity'],
            ]);
        }

        // Redireccionar
        return redirect()->action('StockController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Input  $input
     * @return \Illuminate\Http\Response
     */
    public function show(Input $input)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Input  $input
     * @return \Illuminate\Http\Response
     */
    public function edit(Input $input)
    {
        $products = Product::all();
        return view('inputs.edit', compact('input', 'products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Input  $input
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Input $input)
    {
        // // Validación
        // $validatedData = $request->validate([
        //     'product' => 'required',
        //     'quantity' => 'required',
        //     'date' => 'required'
        // ]);

        // // Asignar los valores
        // $input->product_id = $validatedData['product'];
        // $input->quantity = $validatedData['quantity'];
        // $input->date = $validatedData['date'];

        // $input->save();

        // // Consulto la bd, buscando el producto y su cantidad atravez del product_id
        // $stock = DB::table('stocks')
        //     ->select('product_id', 'quantity')
        //     ->where('product_id', $validatedData['product'])
        //     ->get();

        // if (count($stock) >= 1) {

        //     //Aquí guardo el producto que voy actualizar
        //     $product = $stock[0]->product_id;

        //     // Aquí guardo la nueva cantidad que voy actulizar
        //     $newQuantity = $input->quantity + $validatedData['quantity'];

        //     if ($product == $validatedData['product']) {

        //         DB::table('stocks')
        //             ->where('id', $product)
        //             ->update(['quantity' => $newQuantity,]);
        //     }
        // }

        // // Redireccionar
        // return redirect()->action('InventoryController@index')->with('update', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Input  $input
     * @return \Illuminate\Http\Response
     */
    public function destroy(Input $input)
    {

        $stock = DB::table('stocks')
            ->select('quantity')
            ->where('product_id', $input->product_id)
            ->get();

        // return $stock;
        // dd($stock[0]->quantity);

        $quantity = $stock[0]->quantity - $input->quantity;

            DB::table('stocks')
            ->where('id', $input->product_id)
            ->update(['quantity' => $quantity]);

        $input->delete();
        return redirect()->route('inventory.index')->with('delete', 'ok');
    }
}
