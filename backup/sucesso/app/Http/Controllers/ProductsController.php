<?php

namespace App\Http\Controllers;

use App\Products;
use App\Categories;
use App\Brands;
use App\Products_images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $nome = "Guilherme";
      $usuario="guilm1";
      $products = Products::paginate(3);
      // ->join('brands', 'brands.id' , '=', 'products.id_brand')->get()
      return view('products.index')
             ->with('nome', $nome)
             ->with('user', $usuario)
             ->with('products', $products)
             ->with('imgs', Products_images::all());
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create')->with('brands', Brands::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Products::create($request->all());

      return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('products.show')->with('products',$products);
        return view('products.show', ['product' => Products::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($products)
    {
        return view('products.edit', ['product' => Products::findOrFail($products)])
               ->with('brands', Brands::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $products = Products::findOrFail($id);

        // dd($products);
        $products->fill($request->all());
        $products->save();

        return redirect()->route('products.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Products::findOrFail($id);

        $products->delete();

        return redirect()->route('products.index');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */

    public function relatorio(){

      $products = Products::all();
      return view('products.relatorio')
             ->with('products', $products)
             ->with('imgs', Products_images::all());
    }
}
