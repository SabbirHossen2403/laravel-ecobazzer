<?php

namespace App\Http\Controllers\Backend;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    
    function index() {
        try {

            $brands = Brand::orderBy('status' , 'DESC')->latest()->get();

            return view('backend.brand.index', compact('brands'));
            
        } catch (\Throwable $th) {
        
        }

    }

      public function create()
    {
        return view('backend.brand.create');
    }


    public function store( Request $request ) {
        // Validate the request data
        $request->validate([
            'brand_name' => 'required|string|max:255',
            'brand_url' => 'required|unique:brands,brand_url',
            'brand_icon' => 'nullable|image|mimes:jpeg,png,jpg,webp',
        ]);
        
    
             //    save server side
             $path = null;
        if ($request->hasFile('brand_icon')) {
            $name = $request->brand_url . "." . $request->brand_icon->extension();
             $path = $request->brand_icon->storeAs('brands', $name , 'public');

        } 

        // Create a new brand instance
        
    Brand::create([
        'brand_name' => $request->brand_name,
        'brand_url' => $request->brand_url,
        'brand_icon' => $path,
    ]);

       return redirect()->route('backend.brand.index')->with('success', "{$request->brand_name} brand created successfully!");

    }


    public function statusUpdate($id){
        $brand = Brand::findOrFail($id);
        $brand->status = !$brand->status;
        $brand->save();
        return to_route('backend.brand.index')->with('success', 'brand status updated successfully!');


    }

    public function edit($id){
        $brand = Brand::findOrFail($id);
        return view('backend.brand.edit', compact('brand'));


    }

    public function update(Request $request, $id)
{
    $request->validate([
        'brand_name' => 'required',
        'brand_url' => 'required',
        'brand_icon' => 'nullable|image|mimes:jpeg,png,jpg,webp',
    ]);

    $brand = Brand::findOrFail($id);

    $path = $brand->brand_icon;
    if ($request->hasFile('brand_icon')) {
        $name = $request->brand_url . "." . $request->brand_icon->extension();
        $path = $request->brand_icon->storeAs('categorise', $name, 'public');
    }

    $brand->update([
        'brand_name' => $request->brand_name,
        'brand_url' => $request->brand_url,
        'brand_icon' => $path,
    ]);

    return redirect()->route('backend.brand.index')->with('success', 'brand updated successfully!');
}


}
