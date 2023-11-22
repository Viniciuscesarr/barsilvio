<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();

        return view('site.products', ['products' => $products]);        
    }
    public function create(){
        return view('create.createproducts');
    }
    public function store(Request $request){
        $product = new Product;

        $product->name = $request->name;
        $product->unidades = $request->unidades;
        $product->value = $request->value;

        $product->save();

        return redirect('/estoque');
    }
    public function destroy($id){
        Product::findOrFail($id)->delete();
        return redirect('/estoque');
    }

    public function edit($id){
        $product = Product::findOrFail($id);

        return view('edit.productsedit', ['product' => $product]);
    }
    public function update(Request $request){
        Product::findOrFail($request->id)->update($request->all());

        return redirect('/estoque');
    }
}
