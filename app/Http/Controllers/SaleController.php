<?php

namespace App\Http\Controllers;

use App\Costumer;
use App\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $sales = Sale::all();
        $costumers = Costumer::all();

        $from = date('Y-m\-1');
        $now = date('Y-m-d');

        // Ventas
        $sales = Sale::where('fecha_alta', '>=', $from)
        ->where('fecha_alta', '<=', $now)
        ->where('estado', 'Pedido recogido')
        ->get();

        return view('sales.index', compact('sales', 'costumers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $costumers = Costumer::all();
        return view('sales.create', compact('costumers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request);

        // Validación
        $validatedData = $request->validate([
            'costumerName'  => 'required',
            'wayToPay'      => 'required',
            'date'          => 'required',
            'service'       => 'required',
            'description'   => 'required',
            'price'         => 'required',
            'quantity'      => 'required',
            'tax'           => 'required',
            'paymentAmount' => 'required'
        ]);

        $subtotal   = $validatedData['price'] * $validatedData['quantity'];
        $taxTotal   = $subtotal               * $validatedData['tax'];
        $total      = $subtotal               + $taxTotal;
        $debt       = $total                  - $validatedData['paymentAmount'];

        // Almacenar en la BD (Sin Modelo)
        DB::table('sales')->insert([
            'costumer_id'   => $validatedData['costumerName'],
            'wayToPay'      => $validatedData['wayToPay'],
            'date'          => $validatedData['date'],
            'service'       => $validatedData['service'],
            'description'   => $validatedData['description'],
            'price'         => $validatedData['price'],
            'quantity'      => $validatedData['quantity'],
            'subtotal'      => $subtotal,
            'tax'           => $validatedData['tax'],
            'taxTotal'      => $taxTotal,
            'total'         => $total,
            'paymentAmount' => $validatedData['paymentAmount'],
            'debt'          => $debt
        ]);

        // Redireccionar
        return redirect()->action('SaleController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        return view('sales.show', compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        $costumers = Costumer::all();
        return view('sales.edit', compact('sale', 'costumers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        // Validación
        $validatedData = $request->validate([
            'costumerName' => 'required',
            'wayToPay' => 'required',
            'date' => 'required',
            'service' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'tax' => 'required',
            'paymentAmount' => 'required'
        ]);

        $subtotal = $validatedData['price'] * $validatedData['quantity'];
        $taxTotal = $subtotal * $validatedData['tax'];
        $total = $subtotal + $taxTotal;
        $debt = $total - $validatedData['paymentAmount'];

        // Asignar los valores
        $sale->costumer_id = $validatedData['costumerName'];
        $sale->wayToPay = $validatedData['wayToPay'];
        $sale->date = $validatedData['date'];
        $sale->service = $validatedData['service'];
        $sale->description = $validatedData['description'];
        $sale->price = $validatedData['price'];
        $sale->quantity = $validatedData['quantity'];
        $sale->subtotal = $subtotal;
        $sale->tax = $validatedData['tax'];
        $sale->taxTotal = $taxTotal;
        $sale->total = $total;
        $sale->paymentAmount = $validatedData['paymentAmount'];
        $sale->debt = $debt;

        $sale->save();

        // Redireccionar
        return redirect()->action('SaleController@index')->with('update', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        $sale->delete();
        return redirect()->route('sales.index')->with('delete', 'ok');
    }

    public function sales()
    {
        return view('sales.sales');
    }
}
