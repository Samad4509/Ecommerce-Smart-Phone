<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product,$products;
    public function index()
    {
        return view('admin.product.index');
    }
    public function create(Request $request)
    {
        Product::addProduct($request);
        return back()->with('message','Product added success');
    }
    public function manage()
    {
        $this->product=Product::all();
        return view('admin.product.manage',['products'=>$this->product]);
    }
    public function edit($id)
    {
        $this->products=Product::find($id);
        return view('admin.product.edit',['product'=>$this->products]);
    }
    public function update(Request $request,$id)
    {
        Product::updateProduct($request,$id);
        return redirect('/product-manage')->with('message','update');
    }
    public function delete($id)
    {
        Product::deleteProduct($id);
        return redirect('/product-manage')->with('message','Delete success');
    }
}
