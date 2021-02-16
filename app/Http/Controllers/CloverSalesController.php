<?php

namespace App\Http\Controllers;

use App\CloverSales;
use Illuminate\Http\Request;

class CloverSalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $from = date('Y-m\-1');
        $now = date('Y-m-d');

        // Pedidos Count
        $orders = CloverSales::select('total')->where('fecha_alta', '>=', $from)
            ->where('fecha_alta', '<=', $now)
            ->where('estado', 'PAID FULL')
            ->count();

        // Ventas
        $sales = CloverSales::select('total')->where('fecha_alta', '>=', $from)
            ->where('fecha_alta', '<=', $now)
            ->where('estado', 'PAID FULL')
            ->get();

        $sumSales = 0;
        foreach ($sales as $i) {
            $sumSales += $i->total;
        }
        $sales = $sumSales;

        return view('clover-sales.index', compact('sales', 'orders'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CloverSales  $cloverSales
     * @return \Illuminate\Http\Response
     */
    public function show(CloverSales $cloverSales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CloverSales  $cloverSales
     * @return \Illuminate\Http\Response
     */
    public function edit(CloverSales $cloverSales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CloverSales  $cloverSales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CloverSales $cloverSales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CloverSales  $cloverSales
     * @return \Illuminate\Http\Response
     */
    public function destroy(CloverSales $cloverSales)
    {
        //
    }

    public function filter(Request $request)
    {
        $from = $request->from;
        $to = $request->to;

        // Ventas Clover
        $salesClover = CloverSales::select('total')->where('fecha_alta', '>=', $from)
            ->where('fecha_alta', '<=', $to)
            ->where('estado', 'PAID FULL')
            ->get();

        $sumSalesClover = 0;
        foreach ($salesClover as $i) {
            $sumSalesClover += $i->total;
        }
        $salesClover = $sumSalesClover;

        // Pedidos Clover
        $ordersClover = CloverSales::select('total')->where('fecha_alta', '>=', $from)
            ->where('fecha_alta', '<=', $to)
            ->where('estado', 'PAID FULL')
            ->count();

        return view('clover-sales.filter', compact('salesClover', 'ordersClover'));
    }

}
