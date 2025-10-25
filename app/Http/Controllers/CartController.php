<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
     function addToCart(Request $request , $id){
        
        $request->validate([
           'qty'  => 'nullable|integer|min:1'
        ]);
        $qty  = $request->qty ?? 1;
        $authId  = auth('customer')->user()->id;
        if(Cart::where('product_id', $id)->where('customer_id',$authId)->exists()){
            Cart::where('product_id', $id)->where('customer_id',$authId)->increment('qty', $qty);
        } else{
              Cart::create([
            'product_id' => $id,
            'customer_id' => $authId,
            'qty' => $qty,
        ]);
        }
        
        return back();
      
    }
}
