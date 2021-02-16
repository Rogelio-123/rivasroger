<?php

namespace App\Http\Controllers;

use Cart;
use App\Service;
use Illuminate\Http\Request;

class CartExpenseController extends Controller
{
    public function add(Request $request)
    {
        // return $request;

        if ($request->hasFile('archive')) {
            $file = $request->file('archive');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }

        // Validación
        $validatedData = $request->validate([
            'provider' => 'required',
            'service' => 'required',
            'ticket' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'tax' => 'required',
            'pay' => 'required'
        ]);

        $service = Service::find($validatedData['service']);

        $tax = $validatedData['price'] * $request->tax;
        $priceWithTax = $validatedData['price'] + $tax;
        $amount = $validatedData['quantity'] * $validatedData['price'];


        Cart::add(array(
            'id' => $service->id,
            'name' => $service->name,
            'price' => $priceWithTax,
            'quantity' => $validatedData['quantity'],
            'attributes' => array(
                "provider"      => $validatedData['provider'],
                "priceSinTax"   => $validatedData['price'],
                "amount"        => $amount,
                "amountWithTax" => $validatedData['quantity'] * $priceWithTax,
                "tax"           => $validatedData['tax'],
                "taxTotal"      => $amount * $validatedData['tax'],
                "archive"       => $name,
                "pay"           => $validatedData['pay'],
            )
        ));

        return redirect()->action('ExpenseController@create')->with('add', 'ok');
    }

    public function remove(Request $request)
    {

        // dd($request);

        // delete an item on cart
        Cart::remove($request->id);

        return redirect()->action('ExpenseController@create')->with('destroy', 'ok');
    }

    public function clear()
    {

        Cart::clear();
        return redirect()->action('ExpenseController@create')->with('clear', 'ok');
    }

    public function subtotal()
    {
        $subtotal = Cart::getSubTotal();
        return $subtotal;
    }
}
