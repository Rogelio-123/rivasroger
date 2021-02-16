<?php

namespace App\Http\Controllers;

use App\PostmatesSales;
use Illuminate\Http\Request;

class PostmatesSalesController extends Controller
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
        $orders = PostmatesSales::select('total')->where('fecha_alta', '>=', $from)
            ->where('fecha_alta', '<=', $now)
            ->where('estado', 'PAID FULL')
            ->count();

        // Ventas
        $sales = PostmatesSales::select('total')->where('fecha_alta', '>=', $from)
            ->where('fecha_alta', '<=', $now)
            ->where('estado', 'PAID FULL')
            ->get();

        $sumSales = 0;
        foreach ($sales as $i) {
            $sumSales += $i->total;
        }
        $sales = $sumSales;

        return view('postmates-sales.index', compact('sales', 'orders'));
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
     * @param  \App\PostmatesSales  $postmatesSales
     * @return \Illuminate\Http\Response
     */
    public function show(PostmatesSales $postmatesSales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PostmatesSales  $postmatesSales
     * @return \Illuminate\Http\Response
     */
    public function edit(PostmatesSales $postmatesSales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PostmatesSales  $postmatesSales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostmatesSales $postmatesSales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PostmatesSales  $postmatesSales
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostmatesSales $postmatesSales)
    {
        //
    }
}
