<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Product::all();
        return view('product.index', ['products' => Product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:5',
            'price' => 'required|gt:0',
            'country' => 'required'
        ]);

        $product = new Product;
        $product->name = $request['name'];
        $product->price = $request['price'];
        $product->country = $request['country'];
        $product->save();
        //return view('product.index', ['products' => Product::all()]);
        return redirect(route('product.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|min:5',
            'price' => 'required|gt:0',
            'country' => 'required'
        ]);

        //$product = Product::find($product->id);
        $product->name = $request['name'];
        $product->price = $request['price'];
        $product->country = $request['country'];
        $product->save();
        return redirect(route('product.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Product $product)
    {
        //$name = $product->name;
        $product->delete();
        
        //$request->session()->flash('status', 'Producto eliminado');
        return redirect(route('product.index'))->with(['status' => 'Se ha borrado satisfactoriamente el producto ' . $product->name]);
    }
}
