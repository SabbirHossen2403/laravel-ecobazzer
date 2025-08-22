<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index() {
        
    $categories = Category::where('status', 1)->orderBy('id', 'DESC')->get();

    return view('frontend.index', compact('categories'));
    }
 
    // function shop() {
    //     return view('frontend.shop');
    // }

    function details() {
        return view('frontend.details' );
    }


// public function AllCategory()
// {
//     $categories = Category::where('status', 1)->orderBy('id', 'DESC')->get();

//     return view('frontend.AllCategory', compact('categories'));
// }

    public function categoryArchive($category_url = null){
     if ($category_url) {
        # code...  
         $category = Category::where('category_url', $category_url)->select('id', 'category_name', 'category_url')->first();
        $products = Product::where('status', 1)->whereHas('category', function($q) use ($category_url) {
            $q->where('category_url', $category_url);
        })->latest()->select('id', 'title', 'slug', 'price','selling_price' ,'featured_img')->paginate(12); 

     }else{
        $category = null;
        $products = Product::where('status', 1)->latest()->paginate(12);
     }
        return view('frontend.shop', compact('products' , 'category'));
    }

function showProduct($slug){
    if (!$slug) {
        abort(404);
    }else{
        $product = Product::where('slug', $slug)->first();
        $relatedProducts  = Product::where('status', 1)->where('category_id', $product->category_id)->whereNot('id', $product->id)->select('id', 'title', 'slug', 'price','selling_price' ,'featured_img')->latest()->take(8)->get(); 
    }
    return view('frontend.details', compact('product', 'relatedProducts'));
}

function reviewSubmite(Request $request){
    $request->validate([
        'rating' => 'required|min:0|max:5 ',
        'reviewText' => 'nullable',

    ]);

    Review::create([
        'product_id' => $request->product_id,
        'user_id' => auth()->user()->id,
        'rating' => $request->rating,
        'reviewText' => $request->reviewText,
        
    ]);
    return redirect()->back()->with('success', 'Review submitted successfully');
}








}
