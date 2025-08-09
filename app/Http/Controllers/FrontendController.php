<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index() {
        
    $categories = Category::where('status', 1)->orderBy('id', 'DESC')->get();

    return view('frontend.index', compact('categories'));
    }
 
    function shop() {
        return view('frontend.shop');
    }

    function details() {
        return view('frontend.details');
    }


// public function AllCategory()
// {
//     $categories = Category::where('status', 1)->orderBy('id', 'DESC')->get();

//     return view('frontend.AllCategory', compact('categories'));
// }

    public function categoryArchive($category_url)
    {
        dd($category_url);
    }


}
