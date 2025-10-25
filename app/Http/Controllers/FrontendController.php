<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index() {

    return view('frontend.index');
    }
 
    // function shop() {
    //     return view('frontend.shop');
    // }

    function details() {
        return view('frontend.details' );
    }

    // function checkout() {
    //     return view('frontend.checkout' );
    // }

    function cart() {
        return view('frontend.cart' );
    }
    
// public function AllCategory()
// {
//     $categories = Category::where('status', 1)->orderBy('id', 'DESC')->get();

//     return view('frontend.AllCategory', compact('categories'));
// }

    public function categoryArchive(Request $request , $category_url = null){
        $productsCategorys = Category::has('products')->where('status', 1)->withCount('products')->get();
        $products = Product::query();
     if ($category_url) {
        # code...  
         $category = Category::where('category_url', $category_url)->select('id', 'category_name', 'category_url')->first();
        $products->whereHas('category', function($q) use ($category_url) {
            $q->where('category_url', $category_url);
        }); 

     }else{
        $category = null;
    }
    if ($request->search) {
        $products = $products->where('title','like', "%$request->search%");
    }
    if ($request->category) {
        $products->where('category_id', $request->category);
    }
    if ($request->minprice && $request->maxprice) {
        $products->where(function($q) use ($request) {
            $q->whereBetween( 'selling_price', [$request->minprice, $request->maxprice])
              ->orWhereBetween('price', [$request->minprice, $request->maxprice]);
        });        
    }
    if ($request->rating){
        $products = $products->whereRaw(' (SELECT AVG(rating) FROM reviews WHERE reviews.product_id = products.id) >= ?', [$request->rating]
        );
    }

    if ($request->shorting) {
        if ($request->shorting == 1) {
            $products = $products->latest();
        } elseif ($request->shorting == 2) {
            $products = $products->oldest();
        } elseif ($request->shorting == 3) {
            $products = $products->orderBy('selling_price', 'ASC');
        } elseif ($request->shorting == 4) {
            $products = $products->orderBy('selling_price', 'DESC');
        }
    }


    $products = $products->where('status', 1)->select('id', 'title', 'slug', 'price','selling_price' ,'featured_img')->withAvg('reviews', 'rating' )->paginate(12);
        return view('frontend.shop', compact('products' , 'category', 'productsCategorys'));
    }

function showProduct($slug){
    if (!$slug) {
        abort(404);
    } else {
        $product = Product::where('slug', $slug)->firstOrFail();

        $relatedProducts  = Product::where('status', 1)
            ->where('category_id', $product->category_id)
            ->whereNot('id', $product->id)
            ->select('id', 'title', 'slug', 'price','selling_price','featured_img')
            ->latest()
            ->take(8)
            ->get();

        // এই product এর সব reviews
        $reviews = Review::where('product_id', $product->id)->latest()->get();
    }

    return view('frontend.details', compact('product', 'relatedProducts', 'reviews'));
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
    $product = Product::find($request->product_id);
$reviews = Review::where('product_id', $product->id)
    ->latest()
    ->distinct('user_id')   // প্রতি user এর শুধু ১টা review
    ->get();    return view('frontend.details', compact('reviews'))->with('success', 'Review submitted successfully');
}


function searchProduct(Request $request){
    $products = [];
    if ($request->search) {
        $products = Product::where('title','like', "%$request->search%")->select('id','title','slug')->latest()->take(15)->get();
    }
    return $products;

}







}
