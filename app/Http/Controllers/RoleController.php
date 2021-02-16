<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $permits = Permission::all();
        return view('roles.create', compact('permits'));
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
            'name'      => 'required',
            'permits'   => 'required'
        ]);

        $role = new Role();
        $role->name = $validatedData['name'];
        $role->syncPermissions($validatedData['permits']);
        $role->save();

        // Redirect
        return redirect()->action('RoleController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('roles.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {   
        $permits = Permission::all();
        return view('roles.edit', compact('role', 'permits'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        // Validación
        $validatedData = $request->validate([
            'name'      => 'required',
            'permits'   => 'required'
        ]);

        // Asignar los valores
        $role->name = $validatedData['name'];
        $role->permissions()->detach();
        $role->syncPermissions($validatedData['permits']);
        $role->save();

        // Redireccionar
        return redirect()->action('RoleController@index')->with('update', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index')->with('delete', 'ok');
    }
}
