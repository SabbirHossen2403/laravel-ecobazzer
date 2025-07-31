<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;


class BannerController extends Controller
{
    //
    function banner_index() {
        $banners = Banner::orderBy('status' , 'DESC')->latest()->get();
        return view('backend.banner.banner_index', compact('banners'));
    }


  function banner_create() {
        return view('backend.banner.banner_create');
    }

    
    function banner_store( Request $request ) {

        $request->validate([
          'banner_title'=> 'required|string|max:30',
          'banner_sub_title'=> 'required|string|max:50',
          'banner_details'=> 'nullable|string|max:255',
          'banner_btn_text'=> 'required|string|max:10',
          'banner_btn_url'=> 'nullable|active_url|',
          'banner_image'=> 'required|image|mimes:jpeg,png,jpg,webp',

        ]);

        // Handle the banner image upload
        if ($request->hasFile('banner_image')) {
            $name = $request->banner_title . "." . $request->banner_image->extension();
            $path = $request->banner_image->storeAs('banners', $name, 'public');
            

        }

 Banner::create([
    'banner_title' => $request->banner_title,
    'banner_sub_title' => $request->banner_sub_title,
    'banner_details' => $request->banner_details,
    'banner_btn_text' => $request->banner_btn_text,
    'banner_btn_url' => $request->banner_btn_url,
    'banner_image' => $path,
]);

        return to_route('backend.banner.banner_index')->with('success', "{$request->banner_titel} Banner created successfully!");
    }


    function banner_status_update($id) {
        $banner = Banner::findOrFail($id);
        $banner->status = !$banner->status;
        $banner->save();
        return to_route('backend.banner.banner_index')->with('success', 'Banner status updated successfully!');
    }

  public function banner_delete($id)
    {
        $banner = Banner::findOrFail($id);

      if ($banner->banner_image && Storage::disk('public')->exists($banner->banner_image)) {
        Storage::disk('public')->delete($banner->banner_image);
    }
        $banner->delete();
return redirect()->route('backend.banner.banner_index')->with('success',  " Banner deleted successfully!");
    }


        public function edit($id){
        $banner = Banner::findOrFail($id);
        return view('backend.banner.banner_edit', compact('banner'));


    }


   function banner_update(Request $request, $id) {
    
        $request->validate([
          'banner_title'=> 'required|string|max:30',
          'banner_sub_title'=> 'required|string|max:50',
          'banner_details'=> 'nullable|string|max:255',
          'banner_btn_text'=> 'required|string|max:10',
          'banner_btn_url'=> 'nullable|active_url|',
          'banner_image'=> 'required|image|mimes:jpeg,png,jpg,webp',

        ]);

          $banner = Banner::findOrFail($id);
        $path = $banner->banner_image;

        // Handle the banner image upload
        if ($request->hasFile('banner_image')) {
            $name = $request->banner_title . "." . $request->banner_image->extension();
            $path = $request->banner_image->storeAs('banners', $name, 'public');
            

        }

      

 $banner->update([
    'banner_title' => $request->banner_title,
    'banner_sub_title' => $request->banner_sub_title,
    'banner_details' => $request->banner_details,
    'banner_btn_text' => $request->banner_btn_text,
    'banner_btn_url' => $request->banner_btn_url,
    'banner_image' => $path,
]);

        return to_route('backend.banner.banner_index')->with('success', "{$request->banner_titel} Banner created successfully!");
   }


function view($id) {
        $banner = Banner::findOrFail($id);
        return view('backend.banner.banner_view', compact('banner'));
    }


}
