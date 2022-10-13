<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;


class PosController extends Controller
{
    public function index(){

        $productsItems = Product::orderBy('updated_at', 'desc')->paginate(5);
        $products = Product::all();

        return view('admin.pos.index', compact('products','productsItems'));
        
    }
}
