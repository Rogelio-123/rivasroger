<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sets = Setting::all();
        $brand = Setting::select('branch', 'manager', 'adress', 'phone')->where('id', 1)->get();
        return view('settings.index', compact('sets', 'brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand = Setting::select('branch', 'manager', 'adress', 'phone')->where('id', 1)->get();
        return view('settings.create', compact('brand'));
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
            'branch'     => 'required',
            'manager'    => 'required',
            'adress'     => 'required',
            'phone'      => 'required',
            'uberUser'   => 'required',
            'uberPass'   => 'required',
            'grubUser'   => 'required',
            'grubPass'   => 'required',
            'doorUser'   => 'required',
            'doorPass'   => 'required',
            'cloverUser' => 'required',
            'cloverPass' => 'required',
            'postUser'   => 'required',
            'postPass'   => 'required',
            'rivasId'    => 'required',
        ]);

        $settings = new Setting;
        $settings->branch       = $validatedData['branch'];
        $settings->manager      = $validatedData['manager'];
        $settings->adress       = $validatedData['adress'];
        $settings->phone        = $validatedData['phone'];
        $settings->uberUser     = $validatedData['uberUser'];
        $settings->uberPass     = $validatedData['uberPass'];
        $settings->grubUser     = $validatedData['grubUser'];
        $settings->grubPass     = $validatedData['grubPass'];
        $settings->doorUser     = $validatedData['doorUser'];
        $settings->doorPass     = $validatedData['doorPass'];
        $settings->cloverUser   = $validatedData['cloverUser'];
        $settings->cloverPass   = $validatedData['cloverPass'];
        $settings->postUser     = $validatedData['postUser'];
        $settings->postPass     = $validatedData['postPass'];
        $settings->rivasId      = $validatedData['rivasId'];

        $settings->save();

        // Redirect
        return redirect()->action('SettingController@index')->with('set', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        $brand = Setting::select('branch', 'manager', 'adress', 'phone')->where('id', 1)->get();
        return view('settings.show', compact('setting', 'brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        $brand = Setting::select('branch', 'manager', 'adress', 'phone')->where('id', 1)->get();
        return view('settings.edit', compact('setting', 'brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        // Validación
        $validatedData = $request->validate([
            'branch'     => 'required',
            'manager'    => 'required',
            'adress'     => 'required',
            'phone'      => 'required',
            'uberUser'   => 'required',
            'uberPass'   => 'required',
            'grubUser'   => 'required',
            'grubPass'   => 'required',
            'doorUser'   => 'required',
            'doorPass'   => 'required',
            'cloverUser' => 'required',
            'cloverPass' => 'required',
            'postUser'   => 'required',
            'postPass'   => 'required',
            'rivasId'    => 'required',
        ]);

        // Asignar los valores
        $setting->branch     = $validatedData['branch'];
        $setting->manager    = $validatedData['manager'];
        $setting->adress     = $validatedData['adress'];
        $setting->phone      = $validatedData['phone'];
        $setting->uberUser   = $validatedData['uberUser'];
        $setting->uberPass   = $validatedData['uberPass'];
        $setting->grubUser   = $validatedData['grubUser'];
        $setting->grubPass   = $validatedData['grubPass'];
        $setting->doorUser   = $validatedData['doorUser'];
        $setting->doorPass   = $validatedData['doorPass'];
        $setting->cloverUser = $validatedData['cloverUser'];
        $setting->cloverPass = $validatedData['cloverPass'];
        $setting->postUser   = $validatedData['postUser'];
        $setting->postPass   = $validatedData['postPass'];
        $setting->rivasId    = $validatedData['rivasId'];

        $setting->save();

        // Redireccionar
        return redirect()->action('SettingController@index')->with('update', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        $setting->delete();
        return redirect()->route('settings.index')->with('delete', 'ok');
    }
}
