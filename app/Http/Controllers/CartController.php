<?php

namespace App\Http\Controllers;

use App\Product;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {

        if ($request->hasFile('archive')) {
            $file = $request->file('archive');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }

        // Validación
        $validatedData = $request->validate([
            'provider' => 'required',
            'product' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'um' => 'required',
            'tax' => 'required',
            'pay' => 'required',
            'bank' => 'required'
        ]);

        $producto = Product::find($validatedData['product']);

        $tax = $validatedData['price'] * $request->tax;
        $priceWithTax = $validatedData['price'] + $tax;

        Cart::add(array(
            'id' => $producto->id,
            'name' => $producto->name,
            'price' => $priceWithTax,
            'quantity' => $validatedData['quantity'],
            'attributes' => array(
                "provider"      => $validatedData['provider'],
                "um"            => $validatedData['um'],
                "priceSinTax"   => $validatedData['price'],
                "amount"        => $validatedData['quantity'] * $validatedData['price'],
                "amountWithTax" => $validatedData['quantity'] * $priceWithTax,
                "tax"           => $validatedData['tax'],
                "pay"           => $validatedData['pay'],
                "archive"       => $name,
                "pay"           => $validatedData['pay'],
                "bank"          => $validatedData['bank'],
            )
        ));

        return redirect()->action('ShoppingController@create')->with('shop', 'ok');
    }

    public function remove(Request $request)
    {

        // dd($request);

        // delete an item on cart
        Cart::remove($request->id);

        return redirect()->action('ShoppingController@create')->with('delete', 'ok');
    }

    public function clear()
    {

        Cart::clear();
        return redirect()->action('ShoppingController@create')->with('clear', 'ok');
    }

    public function subtotal()
    {
        $subtotal = Cart::getSubTotal();
        return $subtotal;
    }
}
