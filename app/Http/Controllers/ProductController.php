<?php

namespace App\Http\Controllers;


use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        $data['categories'] = $categories;
        return view('product.create', $data);

    }

    public function list(Request $request)
    {
        $post = new Product();
        $post->title = $request->get('title');
        $post->category = $request->get('category');
        $post->price = $request->get('price');
        $post->text = $request->get('text');
        $file = $request->file('image');
        if (!empty($file)) {
            $fileName = $post->image = $file->getFilename().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $fileName);
        }

        $post->save();

        return redirect('/product/');
    }

    public function editProduct(Request $request, $id)
    {
        $post =  Product::find($id);
        $post->title = $request->get('title');
        $post->category = $request->get('category');
        $post->price = $request->get('price');
        $post->text = $request->get('text');
        $file = $request->file('image');
        if (!empty($file)) {
            $fileName = $post->image = $file->getFilename().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $fileName);
        }

        $post->save();

        return redirect('/product/');
    }

    public function update($id)
    {
        $post =  Product::find($id);

        return view('product.update', ['products' => $post]);
    }

    public function index()
    {
        $products = Product::all();
        $data['products'] = $products;

        return view('product.index', $data);
    }

    public function category()
    {
        $products = Product::all();
        $data['products'] = $products;

        return view('product.category', $data);
    }

    public function productPage($id)
    {
        $post =  Product::find($id);
        $products = Product::all();
        $data['products'] = $products;

        return view('product.inset', ['product' => $post], $data);
    }
}
