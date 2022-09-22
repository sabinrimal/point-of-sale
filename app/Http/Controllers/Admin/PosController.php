<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class PosController extends Controller
{
    public function index(){

        $productsItems = Product::orderBy('quantity', 'asc')->paginate(5);
        $products = Product::all();
        // $products = Product::orderBy('quantity', 'asc')->get();

        return view('admin.pos.index', compact('products','productsItems'));
    }
}
