<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index() {
        return view('backend.category.index');
    }

      public function create()
    {
        return view('backend.category.create');
    }

}
