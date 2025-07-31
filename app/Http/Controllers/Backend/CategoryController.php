<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    function index() {
        try {
            // Fetch all categories from the database

            $categories = Category::orderBy('status' , 'DESC')->latest()->get();

            return view('backend.category.index', compact('categories'));
            
        } catch (\Throwable $th) {
        
        }

    }

      public function create()
    {
        return view('backend.category.create');
    }


    public function store( Request $request ) {
        // Validate the request data
        $request->validate([
            'category_name' => 'required|string|max:255',
            'category_url' => 'required|unique:categories,category_url',
            'category_icon' => 'nullable|image|mimes:jpeg,png,jpg,webp',
        ]);
        
    
             //    save server side
             $path = null;
        if ($request->hasFile('category_icon')) {
            $name = $request->category_url . "." . $request->category_icon->extension();
             $path = $request->category_icon->storeAs('categorise', $name , 'public');

        } 

        // Create a new category instance
        
    Category::create([
        'category_name' => $request->category_name,
        'category_url' => $request->category_url,
        'category_icon' => $path,
    ]);

       return redirect()->route('backend.category.index')->with('success', "{$request->category_name} Category created successfully!");

    }


    public function statusUpdate($id){
        $category = Category::findOrFail($id);
        $category->status = !$category->status;
        $category->save();
        return to_route('backend.category.index')->with('success', 'Category status updated successfully!');


    }

    public function edit($id){
        $category = Category::findOrFail($id);
        return view('backend.category.edit', compact('category'));


    }

    public function update(Request $request, $id)
{
    $request->validate([
        'category_name' => 'required',
        'category_url' => 'required',
        'category_icon' => 'nullable|image|mimes:jpeg,png,jpg,webp',
    ]);

    $category = Category::findOrFail($id);

    $path = $category->category_icon;
    if ($request->hasFile('category_icon')) {
        $name = $request->category_url . "." . $request->category_icon->extension();
        $path = $request->category_icon->storeAs('categorise', $name, 'public');
    }

    $category->update([
        'category_name' => $request->category_name,
        'category_url' => $request->category_url,
        'category_icon' => $path,
    ]);

    return redirect()->route('backend.category.index')->with('success', 'Category updated successfully!');
}



  


}
