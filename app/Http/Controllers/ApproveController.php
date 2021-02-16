<?php

namespace App\Http\Controllers;

use App\Approve;
use App\Shopping;
use Illuminate\Http\Request;

class ApproveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shoppings = Approve::all();
        return view('approves.index', compact('shoppings'));
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
     * @param  \App\Approve  $approve
     * @return \Illuminate\Http\Response
     */
    public function show(Approve $approve)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Approve  $approve
     * @return \Illuminate\Http\Response
     */
    public function edit(Approve $approve)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Approve  $approve
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Approve $approve)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Approve  $approve
     * @return \Illuminate\Http\Response
     */
    public function destroy(Approve $approve)
    {
        $approve->delete();
        return redirect()->route('shoppings.index')->with('delete', 'ok');
    }

    public function approve($id) {
        
        $a = Approve::find($id);

        $shop = new Shopping;
        $shop->provider_id = $a->provider_id;
        $shop->pay = $a->pay;
        $shop->bank = $a->bank;
        $shop->pName = $a->pName; 
        $shop->price = $a->price; 
        $shop->quantity = $a->quantity; 
        $shop->subtotal = $a->subtotal;
        $shop->tax = $a->tax; 
        $shop->taxTotal = $a->taxTotal; 
        $shop->total = $a->total;
        $shop->payment = $a->payment; 
        $shop->debt = $a->debt;    
        $shop->save();

        $a->delete();

        // Redirect
        return redirect()->action('ShoppingController@index')->with('approve', 'ok');
    }
}
