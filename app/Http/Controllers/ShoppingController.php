<?php

namespace App\Http\Controllers;

use Cart;
use App\Order;
use App\Approve;
use App\Detail;
use App\Finance;
use App\Product;
use App\Provider;
use App\Shopping;
use Darryldecode\Cart\Cart as CartCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShoppingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordersApprove = Order::where('status', 1)->get();
        $ordersPending = Order::where('status', 0)->get();
        return view('shopping.index', compact('ordersApprove', 'ordersPending'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Cart::clear();
        $providers = Provider::all();
        $products = Product::all();
        $items = Cart::getContent();
        $banks = Finance::all();
        return view('shopping.create', compact('providers', 'products', 'items', 'banks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);

        // // Validación
        // $validatedData = $request->validate([
        //     'provider' => 'required',
        //     'pay' => 'required',
        //     'bank' => 'required',
        //     'pName' => 'required',
        //     'price' => 'required',
        //     'quantity' => 'required',
        //     'tax' => 'required',
        //     'payment' => 'required'
        // ]);

        // $count = count($validatedData['pName']);
        // $for = $count - 1;

        // for ($i = 0; $i <= $for; $i++) {
        //     $valor[] = $validatedData['price'][$i] * $validatedData['quantity'][$i];
        // }

        // $subtotal = array_sum($valor);
        // $taxTotal = $subtotal * $validatedData['tax'];
        // $total = $subtotal + $taxTotal;
        // $debt = $total - $validatedData['payment'];

        // $pName = implode(", ", $validatedData['pName']);
        // $price = implode(", ", $validatedData['price']);
        // $quantity = implode(", ", $validatedData['quantity']);

        // if ($total >= 500) {

        //     // Almacenar en la BD (Sin Modelo)
        //     DB::table('approves')->insert([
        //         'provider_id' => $validatedData['provider'],
        //         'pay' => $validatedData['pay'],
        //         'bank' => $validatedData['bank'],
        //         'pName' => $pName,
        //         'price' => $price,
        //         'quantity' => $quantity,
        //         'subtotal' => $subtotal,
        //         'tax' => $validatedData['tax'],
        //         'taxTotal' => $taxTotal,
        //         'total' => $total,
        //         'payment' => $validatedData['payment'],
        //         'debt' => $debt
        //     ]);

        //     $shop = 'ok';
        // } else {

        //     // Almacenar en la BD (Sin Modelo)
        //     DB::table('shoppings')->insert([
        //         'provider_id' => $validatedData['provider'],
        //         'pay' => $validatedData['pay'],
        //         'bank' => $validatedData['bank'],
        //         'pName' => $pName,
        //         'price' => $price,
        //         'quantity' => $quantity,
        //         'subtotal' => $subtotal,
        //         'tax' => $validatedData['tax'],
        //         'taxTotal' => $taxTotal,
        //         'total' => $total,
        //         'payment' => $validatedData['payment'],
        //         'debt' => $debt
        //     ]);

        //     $shop = 'shop';
        // }

        // Redireccionar
        return redirect()->action('ShoppingController@index')->with('shop', $shop);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shopping  $shopping
     * @return \Illuminate\Http\Response
     */
    public function show(Shopping $shopping)
    {
        return view('shopping.show', compact('shopping'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shopping  $shopping
     * @return \Illuminate\Http\Response
     */
    public function edit(Shopping $shopping)
    {
        $providers = Provider::all();
        return view('shopping.edit', compact('shopping', 'providers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shopping  $shopping
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shopping $shopping)
    {
        // Validación
        $validatedData = $request->validate([
            'provider' => 'required',
            'pay' => 'required',
            'bank' => 'required',
            'tax' => 'required',
            'payment' => 'required'
        ]);

        $taxTotal = $shopping->subtotal * $validatedData['tax'];
        $total = $shopping->subtotal + $taxTotal;
        $debt = $total - $validatedData['payment'];

        // Asignar los valores
        $shopping->provider_id = $validatedData['provider'];
        $shopping->pay = $validatedData['pay'];
        $shopping->bank = $validatedData['bank'];
        $shopping->tax = $validatedData['tax'];
        $shopping->taxTotal = $taxTotal;
        $shopping->total = $total;
        $shopping->payment = $validatedData['payment'];
        $shopping->debt = $debt;

        $shopping->save();

        // Redireccionar
        return redirect()->action('ShoppingController@index')->with('update', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shopping  $shopping
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shopping $shopping)
    {
        $shopping->delete();
        return redirect()->route('shoppings.index')->with('delete', 'ok');
    }

    public function order()
    {
        // $r = number_format(Cart::getSubTotal(), 2);
        // return $r;

        if (Cart::getContent()->count() > 0) {

            $total = Cart::getSubTotal();

            if ($total >= 500.00) {
                $order = new Order();
                $order->code = time();
                $order->total = $total;
                $order->user_id = Auth::user()->id;
                $order->status = 0;
                $order->save();
                $shop = "not ok";
            } else {
                $order = new Order();
                $order->code = time();
                $order->total = $total;
                $order->user_id = Auth::user()->id;
                $order->status = 1;
                $order->save();
                $shop = "ok";
            }

            foreach (Cart::getContent() as $r) {
                $detail = new Detail();
                $detail->provider = $r->attributes->provider;
                $detail->product = $r->name;
                $detail->price = $r->attributes->priceSinTax;
                // $detail->priceWithTax = $r->price;
                $detail->quantity = $r->quantity;
                $detail->um = $r->attributes->um;
                $detail->amount = $r->attributes->priceSinTax * $r->quantity;
                $detail->tax = $r->attributes->tax;
                $detail->taxTotal = $r->attributes->amount * $r->attributes->tax;
                $detail->total = $total;
                $detail->order_id = $order->id;
                $detail->bank_id = $r->attributes->bank;
                $detail->orderCode = $order->code;
                $detail->pay = $r->attributes->pay;
                $detail->archive = $r->attributes->archive;
                $detail->save();
            }

            Cart::clear();

            return redirect()->action('ShoppingController@index')->with('shop', $shop);
        } else {
            return "No hay productos para procesar.";
        }
    }
}
