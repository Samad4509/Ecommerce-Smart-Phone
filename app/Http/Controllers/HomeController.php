<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $product,$singleproduct;
    public function index()
    {
        $this->product=Product::all();
        return view('website.home.index',['products'=>$this->product]);
    }
    public function detail($id)
    {
        $this->singleproduct=Product::find($id);
        return view('website.detail.index', ['product' => $this->singleproduct]);
    }
}
