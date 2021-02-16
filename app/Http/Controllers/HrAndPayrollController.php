<?php

namespace App\Http\Controllers;

use App\HrAndPayroll;
use Illuminate\Http\Request;

class HrAndPayrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payrolls = HrAndPayroll::all();
        return view('hr-and-payroll.index', compact('payrolls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hr-and-payroll.create');
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
            'surname'   => 'required',
            'job'       => 'required',
            'phone'     => 'required',
            'email'     => 'required',
            'birthdate' => 'required',
            'adress'    => 'required',
            'rDate'     => 'required',
            'salary'    => 'required'
        ]);

        $payroll            = new HrAndPayroll;
        $payroll->name      = $validatedData['name'];
        $payroll->surname   = $validatedData['surname'];
        $payroll->job       = $validatedData['job'];
        $payroll->phone     = $validatedData['phone'];
        $payroll->email     = $validatedData['email'];
        $payroll->birthdate = $validatedData['birthdate'];
        $payroll->adress    = $validatedData['adress'];
        $payroll->rDate     = $validatedData['rDate'];
        $payroll->salary    = $validatedData['salary'];
        $payroll->save();

        // Redirect
        return redirect()->action('HrAndPayrollController@index')->with('store', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HrAndPayroll  $hrAndPayroll
     * @return \Illuminate\Http\Response
     */
    public function show(HrAndPayroll $employee)
    {
        return view('hr-and-payroll.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HrAndPayroll  $hrAndPayroll
     * @return \Illuminate\Http\Response
     */
    public function edit(HrAndPayroll $employee)
    {
        return view('hr-and-payroll.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HrAndPayroll  $hrAndPayroll
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HrAndPayroll $employee)
    {
        // Validación
        $validatedData = $request->validate([
            'name'      => 'required',
            'surname'   => 'required',
            'job'       => 'required',
            'phone'     => 'required',
            'email'     => 'required',
            'birthdate' => 'required',
            'adress'    => 'required',
            'rDate'     => 'required',
            'salary'    => 'required',
        ]);

        // Asignar los valores
        $employee->name      = $validatedData['name'];
        $employee->surname   = $validatedData['surname'];
        $employee->job       = $validatedData['job'];
        $employee->phone     = $validatedData['phone'];
        $employee->email     = $validatedData['email'];
        $employee->birthdate = $validatedData['birthdate'];
        $employee->adress    = $validatedData['adress'];
        $employee->rDate     = $validatedData['rDate'];
        $employee->salary    = $validatedData['salary'];
        $employee->save();

        // Redireccionar
        return redirect()->action('HrAndPayrollController@index')->with('update', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HrAndPayroll  $hrAndPayroll
     * @return \Illuminate\Http\Response
     */
    public function destroy(HrAndPayroll $employee)
    {
        $employee->delete();
        return redirect()->route('hr-and-payroll.index')->with('delete', 'ok');
    }

    public function employees()
    {
        return view('hr-and-payroll.employees');
    }
}
