<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Product;

class DashboardController extends Controller{
    public function index(Request $request){
        $quantityitem = Product::get(['quantity','name', 'code']);
        //bubblesort
        function bubbleSort($quantityitem){
            $products_count = $quantityitem->count();
            // Traverse through all array elements
            for ($i=0; $i < $products_count; $i++) { 
                // Last i elements are already in place
                for ($j=0; $j < $products_count - $i - 1; $j++) { 
                    // traverse the array from 0 to nproducts_coount-i-1
                    // Swap if the element found is greater
                    // than the next element
                    if ($quantityitem[$j] > $quantityitem[$j+1]){
                        $t = $quantityitem[$j];
                        $quantityitem[$j] = $quantityitem[$j+1];
                        $quantityitem[$j+1] = $t;
                    }
                }
            }
            return $quantityitem;
            // Return the sorted array
        }
        $sorting = bubbleSort($quantityitem);  
        $users = User::all()->count();
        $transactions = Transaction::all()->count();

        return view('admin.dashboard', compact('users','transactions', 'sorting'));
    }
}






        // $product = Product::orderBy('quantity', 'asc')->get();