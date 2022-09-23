<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index(Request $request){

        //bubblesort
        // dd($product);
        $quantityitem = Product::get(['quantity','name', 'code']);

        function bubbleSort($quantityitem)
        {
            $products_count = $quantityitem->count();
            for ($i=0; $i < $products_count; $i++) { 
                for ($j=0; $j < $products_count - $i - 1; $j++) { 
                    if ($quantityitem[$j] > $quantityitem[$j+1]){
                        $t = $quantityitem[$j];
                        $quantityitem[$j] = $quantityitem[$j+1];
                        $quantityitem[$j+1] = $t;
                    }
                }
            }
            return $quantityitem;
        }
        $sorting = bubbleSort($quantityitem);
        // dd($sorting);   
        $users = User::all()->count();
        $transactions = Transaction::all()->count();

        return view('admin.dashboard', compact('users','transactions', 'sorting'));
    }
}






        // $product = Product::orderBy('quantity', 'asc')->get();