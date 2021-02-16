<?php

namespace App\Http\Controllers;

use App\Credential;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CredentialController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Credential  $credential
     * @return \Illuminate\Http\Response
     */
    public function show(Credential $credential)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Credential  $credential
     * @return \Illuminate\Http\Response
     */
    public function edit(Credential $credential)
    {
        $value = DB::connection('rivas')->table('credentials')->where('id', $credential->id)->get();

        return view('credentials', compact('value'));
        // return $value;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Credential  $credential
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $credential)
    {
        // return $credential;
        DB::connection('rivas')->table('credentials')
            ->where('id', $credential)
            ->update([
                'uber_user' => $request->uber_user,
                'uber_pass' => $request->uber_pass,
                'grub_user' => $request->grub_user,
                'grub_pass' => $request->grub_pass,
                'door_user' => $request->door_user,
                'door_pass' => $request->door_pass,
                'clover_user' => $request->clover_user,
                'clover_pass' => $request->clover_pass,
                'post_user' => $request->post_user,
                'post_pass' => $request->post_pass,
                'rivas_id' => $request->rivas_id
            ]);;

        // $credential->uber_user = $request->uber_user;
        // $credential->uber_pass = $request->uber_pass;
        // $credential->grub_user = $request->grub_user;
        // $credential->grub_pass = $request->grub_pass;
        // $credential->door_user = $request->door_user;
        // $credential->door_pass = $request->door_pass;
        // $credential->clover_user = $request->clover_user;
        // $credential->clover_pass = $request->clover_pass;
        // $credential->post_user = $request->post_user;
        // $credential->post_pass = $request->post_pass;
        // $credential->rivas_id = $request->rivas_id;
        // $credential->save();

        return redirect()->route('credentials.edit', ['credential' => $credential])->with('update', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Credential  $credential
     * @return \Illuminate\Http\Response
     */
    public function destroy(Credential $credential)
    {
        //
    }
}
