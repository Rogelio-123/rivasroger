<?php

namespace App\Http\Controllers;

use App\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providers = Provider::all();
        return view('providers.index', compact('providers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('providers.create');
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
            'name' => 'required',
            'phone' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postal' => 'required',
            'country' => 'required',
            'adress' => 'required',
            'adressTwo' => 'required',
            'details' => 'required'
        ]);

        // Almacenar en la BD (Sin Modelo)
        DB::table('providers')->insert([
            'name' => $validatedData['name'],
            'phone' => $validatedData['phone'],
            'mobile' => $validatedData['mobile'],
            'email' => $validatedData['email'],
            'contact' => $validatedData['contact'],
            'city' => $validatedData['city'],
            'state' => $validatedData['state'],
            'postal' => $validatedData['postal'],
            'country' => $validatedData['country'],
            'adress' => $validatedData['adress'],
            'adressTwo' => $validatedData['adressTwo'],
            'details' => $validatedData['details']
        ]);

        // Redireccionar
        return redirect()->action('ProviderController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function show(Provider $provider)
    {
        return view('providers.edit', compact('provider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function edit(Provider $provider)
    {
        return view('providers.edit', compact('provider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provider $provider)
    {
        // Validación
        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postal' => 'required',
            'country' => 'required',
            'adress' => 'required',
            'adressTwo' => 'required',
            'details' => 'required'
        ]);

        // Asignar los valores
        $provider->name = $validatedData['name'];
        $provider->phone = $validatedData['phone'];
        $provider->mobile = $validatedData['mobile'];
        $provider->email = $validatedData['email'];
        $provider->contact = $validatedData['contact'];
        $provider->city = $validatedData['city'];
        $provider->state = $validatedData['state'];
        $provider->postal = $validatedData['postal'];
        $provider->country = $validatedData['country'];
        $provider->adress = $validatedData['adress'];
        $provider->adressTwo = $validatedData['adressTwo'];
        $provider->details = $validatedData['details'];

        $provider->save();

        // Redireccionar
        return redirect()->action('ProviderController@index')->with('update', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provider $provider)
    {
        $provider->delete();
        return redirect()->route('providers.index')->with('delete', 'ok');
    }
}
