<?php

namespace App\Http\Controllers;

use Cart;
use Illuminate\Http\Request;

class CartPayrollController extends Controller
{
    public function add(Request $request)
    {   
        // $data = $request->employee;
        // $datos = json_decode($data);
        // dd($datos->id);
        // return $datos->id;

        // Validación
        $validatedData = $request->validate([
            'employee' => 'required',
            'hours' => 'required',
            'extra' => 'required',
            'from' => 'required',
            'to' => 'required',
        ]);

        $data = $validatedData['employee'];
        $datos = json_decode($data);
        // dd($datos->id);
        // return $datos->id;

        // $service = Service::find($validatedData['service']);

        // $tax = $validatedData['price'] * $request->tax;
        // $priceWithTax = $validatedData['price'] + $tax;
        // $amount = $validatedData['quantity'] * $validatedData['price'];

        $extraV = $datos->salary * 1.5;

        Cart::add(array(
            'id' => $datos->id,
            'name' => $datos->name,
            'price' => $datos->salary,
            'quantity' => $validatedData['hours'],
            'attributes' => array(
                "surname" => $datos->surname,
                "job"     => $datos->job,
                "from"    => $validatedData['from'],
                "to"      => $validatedData['to'],
                "extraV"  => $extraV,
                "extraH"  => $validatedData['extra'],
                "extraT"  => $extraV * $validatedData['extra']
            )
        ));

        return redirect()->action('PayrollController@create')->with('add', 'ok');
    }

    public function remove(Request $request)
    {

        // dd($request);

        // delete an item on cart
        Cart::remove($request->id);

        return redirect()->action('PayrollController@create')->with('destroy', 'ok');
    }

    public function clear()
    {

        Cart::clear();
        return redirect()->action('PayrollController@create')->with('clear', 'ok');
    }

    public function subtotal()
    {
        $subtotal = Cart::getSubTotal();
        return $subtotal;
    }
}
