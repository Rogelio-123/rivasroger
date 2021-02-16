<?php

namespace App\Http\Controllers;

use App\CategoryProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('categoy-product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('category-product.create');
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
            'name' => 'required',
        ]);

        // Almacenar en la BD (Sin Modelo)
        DB::table('category_products')->insert([
            'name' => $validatedData['name'],
        ]);

        // Redireccionar
        return redirect()->action('ProductController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoryProduct  $categoryProduct
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryProduct $categoryProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryProduct  $categoryProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryProduct $category)
    {
        return view('categories-product.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryProduct  $categoryProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryProduct $category)
    {
        // Validación
        $validatedData = $request->validate([
            'name' => 'required',
        ]);

        // Asignar los valores
        $category->name = $validatedData['name'];
        $category->save();

        // Redireccionar
        return redirect()->action('ProductController@index')->with('update', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryProduct  $categoryProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryProduct $category)
    {
        $category->delete();
        return redirect()->route('products.index')->with('delete', 'ok');
    }
}
