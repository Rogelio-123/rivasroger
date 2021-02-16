<?php

namespace App\Http\Controllers;

use App\Detail;
use App\Finance;
use App\Shopping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $finances = Finance::all();
        return view('finances.index', compact('finances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('finances.create');
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
            'alias'     => 'required',
            'bank'      => 'required',
            'account'   => 'required',
            'owner'     => 'required'
        ]);

        $finance = new Finance();
        $finance->alias     = $validatedData['alias'];
        $finance->bank      = $validatedData['bank'];
        $finance->account   = $validatedData['account'];
        $finance->owner     = $validatedData['owner'];
        $finance->save();

        // Redirect
        return redirect()->action('FinanceController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function show(Finance $finance)
    {   
        // return $finance->id;
        // $shop = DB::table('details')->find(3);
        $shop = Detail::select('id', 'price', 'amount', 'provider', 'taxTotal', 'pay')->where('bank_id', $finance->id)->get();
        // return view('finances.show', compact('shop'));
        return view('finances.show', compact('shop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function edit(Finance $finance)
    {
        return view('finances.edit', compact('finance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Finance $finance)
    {
        // Validación
        $validatedData = $request->validate([
            'alias'     => 'required',
            'bank'      => 'required',
            'account'   => 'required',
            'owner'     => 'required'
        ]);

        // Asignar los valores
        $finance->alias     = $validatedData['alias'];
        $finance->bank      = $validatedData['bank'];
        $finance->account   = $validatedData['account'];
        $finance->owner     = $validatedData['owner'];
        $finance->save();

        // Redireccionar
        return redirect()->action('FinanceController@index')->with('update', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Finance $finance)
    {
        $finance->delete();
        return redirect()->route('finances.index')->with('delete', 'ok');
    }
}
