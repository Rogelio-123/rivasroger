<?php

namespace App\Http\Controllers;

use App\Product;
use App\CategoryProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategoryProduct::all();
        $products = Product::all();
        return view('product.index', compact('categories', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = CategoryProduct::all();
        return view('product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        // Validación
        $validatedData = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'um' => 'required',
            'minimum' => 'required'
        ]);

        // Almacenar en la BD (Sin Modelo)
        DB::table('products')->insert([
            'name' => $validatedData['name'],
            'category_id' => $validatedData['category'],
            'um' => $validatedData['um'],
            'minimum' => $validatedData['minimum']
        ]);

        // Redireccionar
        return redirect()->action('ProductController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = CategoryProduct::all();
        return view('product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // Validación
        $validatedData = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'um' => 'required',
            'minimum' => 'required'
        ]);

        // Asignar los valores
        $product->name = $validatedData['name'];
        $product->category_id = $validatedData['category'];
        $product->um = $validatedData['um'];
        $product->minimum = $validatedData['minimum'];

        $product->save();

        // Redireccionar
        return redirect()->action('ProductController@index')->with('update', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('delete', 'ok');
    }
}
