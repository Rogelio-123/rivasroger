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

        $datos = [];

        // Ciclo, ventas del mes por día
        for ($day = 1; $day <= 31; $day++) {

            $fromDay = date("Y-m\-$day");

            // Ventas del Dìa
            $salesDay = CloverSales::select('total')->where('fecha_alta', '=', $fromDay)
                ->where('estado', 'PAID FULL')
                ->get();

            $sum = 0;
            foreach ($salesDay as $i) {
                $sum += $i->total;
            }
            $salesDay = $sum;

            array_push($datos, $salesDay);
        }

        // var_dump($datos);

        return view('clover-sales.index', compact('sales', 'orders', 'datos'));
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

    public function mes($mes)
    {
        $from = date("Y-$mes-1");
        $now = date("Y-$mes-31");

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

        $datos = [];

        // Ciclo, ventas del mes por día
        for ($day = 1; $day <= 31; $day++) {

            $fromDay = date("Y-$mes\-$day");

            // Ventas del Dìa
            $salesDay = CloverSales::select('total')->where('fecha_alta', '=', $fromDay)
                ->where('estado', 'PAID FULL')
                ->get();

            $sum = 0;
            foreach ($salesDay as $i) {
                $sum += $i->total;
            }
            $salesDay = $sum;

            array_push($datos, $salesDay);
        }

        // var_dump($datos);

        switch ($mes) {
            case 1:
                $mes = 'Enero';
                break;
            case 2:
                $mes = 'Febrero';
                break;
            case 3:
                $mes = 'Marzo';
                break;
            case 4:
                $mes = 'Abril';
                break;
            case 5:
                $mes = 'Mayo';
                break;
            case 6:
                $mes = 'Junio';
                break;
            case 7:
                $mes = 'Julio';
                break;
            case 8:
                $mes = 'Agosto';
                break;
            case 9:
                $mes = 'Septiembre';
                break;
            case 10:
                $mes = 'Octubre';
                break;
            case 11:
                $mes = 'Noviembre';;
                break;
            case 12:
                $mes = 'Diciembre';
                break;
        }

        return view('clover-sales.mes', compact('sales', 'orders', 'datos', 'mes'));
    }
}
