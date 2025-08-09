<?php

namespace App\Http\Controllers\Backend;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category:id,category_name')->orderBy('status', 'DESC')->latest()->select('id','title', 'featured_img','category_id','price','selling_price','stock','sku','status','featured')->get();
        return view('backend.product.index', compact('products')); // Assuming you 
    }

    public function create()
    {
        $categories = Category::active()->latest()->get();
        $brands = Brand::active()->get();
        return view('backend.product.create', compact('categories', 'brands') );
    }

    public function store(Request $request)
    {
      $request->validate([
        'title' => 'required|unique:products,title',
        'slug' => 'required|unique:products,slug',
        'category' => 'required',
        'brand' => 'nullable',
        'price' => 'required|numeric',
        'selling_price' => 'nullable|numeric',
        'stock' => 'nullable',
        'short_details' => 'nullable',
        'long_details' => 'nullable',
        'additional_info' => 'nullable',
        'sku' => 'nullable',
        'featured_img' => 'required|mimes:jpg,png,webp,jpeg',
        'gallery_img.*' => 'nullable|mimes:jpg,png,webp,jpeg',
        'status' => 'nullable',
        'featured' => 'nullable',
      ],[
        'gallery_img.*.mimes' => 'Please upload a jpg,png,webp,jpeg image',
      ]);

    //   Featured image 
    $fileName = $request->slug . '-'. uniqid() . '.' . $request->featured_img->extension();
    $featuredImagePate = $request->featured_img->storeAs('product', $fileName, 'public' );

// Gallery images

 $galleryImages = [];
 if (count($request->gallery_img ?? [] ) > 0) {
    foreach ($request->gallery_img as $galleryimage) {
    $galleryfileName = $request->slug . '-'. uniqid() . '.' . $galleryimage->extension();
    $galleryImagePate = $galleryimage->storeAs('product/galleryImages', $galleryfileName, 'public' );
    $galleryImages[] = $galleryImagePate;

 }}

Product::create([
    'title' => $request->title,
    'slug' => $request->slug,
    'category_id' => $request->category,
    'brand_id' => $request->brand,
    'price' => $request->price,
    'selling_price' => $request->selling_price ?? 0,
   'status' => $request->status ?? 0,
'featured' => $request->featured ?? 0,
'stock' => $request->stock ?? 0,

    'short_details' => $request->short_details,
    'long_details' => $request->long_details,
    'additional_info' => $request->additional_info,
    'sku' => $request->sku,
    'featured_img' => $featuredImagePate,
    'gallery_img' => json_encode($galleryImages),
]);

    return to_route('backend.product.index')->with('success', 'Product add successfully');

}

    public function edit($id)
    {
        // Logic to show the form for editing an existing product
    }

    public function update(Request $request, $id)
    {
        // Logic to update an existing product
    }
    public function statusUpdate($id)
    {
        $product = Product::findOrFail($id);
        $product->status = !$product->status;
        $product->save();
        return to_route('backend.product.index')->with('success', 'product status updated successfully!');

    }
    public function stockUpdate($id)
    {
       $product = Product::findOrFail($id);
        $product->stock = !$product->stock;
        $product->save();
        return to_route('backend.product.index')->with('success', 'product stock updated successfully!');
    }
    public function featuredUpdate($id)
    {
       $product = Product::findOrFail($id);
        $product->featured = !$product->featured;
        $product->save();
        return to_route('backend.product.index')->with('success', 'product featured updated successfully!');
    }

    public function delete($id)
    {
        // Logic to delete a product
    }
}
