<?php

namespace App\Http\Controllers;

use App\DetailPayroll;
use Cart;
use App\Payroll;
use App\HrAndPayroll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PayrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $payrolls = Payroll::all();
        return view('payroll.index', compact('payrolls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Cart::clear();
        $employs = HrAndPayroll::all();
        $items = Cart::getContent();
        return view('payroll.create', compact('employs', 'items'));
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
     * @param  \App\Payroll  $payroll
     * @return \Illuminate\Http\Response
     */
    public function show(Payroll $payroll)
    {
        $details = DetailPayroll::where('payroll_id', $payroll->id)->get();
        return view('payroll.show', compact('details'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payroll  $payroll
     * @return \Illuminate\Http\Response
     */
    public function edit(Payroll $payroll)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payroll  $payroll
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payroll $payroll)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payroll  $payroll
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payroll $payroll)
    {
        $payroll->delete();
        return redirect()->route('payrolls.index')->with('delete', 'ok');
    }

    public function payroll(Request $request)
    {
        
        $items = Cart::getContent();
        $suma = 0;
        foreach ($items as $i) {
            $suma += $i->attributes->extraT;
        }
        $total = $suma + Cart::getSubTotal();
        // return $total;

        if (Cart::getContent()->count() > 0) {

            // $total = Cart::getSubTotal();

            $payroll = new Payroll();
            $payroll->code = time();
            $payroll->total = $total;
            $payroll->user_id = Auth::user()->id;
            $payroll->save();
            $shop = "ok";

            foreach (Cart::getContent() as $r) {

                $payment = $r->price * $r->quantity;

                $detail = new DetailPayroll();
                $detail->name = $r->name;
                $detail->surname = $r->attributes->surname;
                $detail->job = $r->attributes->job;
                $detail->from = $r->attributes->from;
                $detail->to = $r->attributes->to;
                $detail->salary = $r->price; //Salary
                $detail->hours = $r->quantity; //Hours
                $detail->payment = $payment; //Payment
                $detail->extraH = $r->attributes->extraH; //Extra Hours
                $detail->extraT = $r->attributes->extraT; //Total Extra Hours
                $detail->totalP = $payment + $r->attributes->extraT; //Total Payment
                $detail->payroll_id = $payroll->id;
                $detail->payrollCode = $payroll->code;
                $detail->save();
            }

            Cart::clear();

            return redirect()->action('PayrollController@index')->with('payroll', $shop);
        } else {
            return "No hay productos para procesar.";
        }
    }

    public function print ($payroll) {

        $pay = DetailPayroll::find($payroll);

        return view('payroll.print', compact('pay'));
    }
}
