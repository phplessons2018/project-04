<?php

namespace App\Http\Controllers;


use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        return view('product.create');

    }

    public function list(Request $request)
    {
        $post = new Product();
        $post->title = $request->get('title');
        $post->category = $request->get('category');
        $post->price = $request->get('price');
        $post->text = $request->get('text');
        $post->photo = 1;
        $post->save();

        return redirect('/product/');
    }

    public function index()
    {
        $products = Product::all();
        $data['products'] = $products;
        return view('product.index', $data);
    }
}
