<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function list(){
        $product = Product::all();
        return view('product.list') -> with('$product', $product);
    }

    function create()
    {
        return view('product.form');
    }

    function store()
    {
        $product = new Product();
        $product->name = Input::get('name');
        $product->price = Input::get('price');
        $product->image = Input::get('thumbnail');
        $product->description = Input::get('description');

        $product->save();
        return redirect('/product/list');
    }

    function edit($id){
        $product = Product::find($id);
        if($product == null){
            return 'Sản phẩm không tồn tại hoặc đã bị xoá.';
        }
        return view('product.edit')->with('product', $product);
    }

    function update($id){
        $product = Product::find($id);
        if($product == null){
            return 'Sản phẩm không tồn tại hoặc đã bị xoá.';
        }
        $product->name = Input::get('name');
        $product->description = Input::get('description');
        $product->price = Input::get('price');
        $product->image = Input::get('thumbnail');
        $product->save();
        return redirect('/product/list');
    }

}
