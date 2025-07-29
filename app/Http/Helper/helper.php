<?php

use Illuminate\Support\Facades\Storage;


    if(!function_exists('getProfileImage')) {
        function getProfileImage($name)
        {
            return "https://api.dicebear.com/9.x/initials/svg?seed=$name";
        }
    }
        

 use Illuminate\Support\Str;

if (!function_exists('breadcrump')) {
    function breadcrump()
    {
        $url = request()->url(); // উদাহরণ: http://localhost:8000/backend/category
        $path = Str::of($url)->explode('/backend/'); // ['http://localhost:8000', 'category']
        return Str::headline($path[1] ?? 'Dashboard'); // Category
    }
}


if (!function_exists('StatusBadge')) {
    function getStatusBadge($status , $route = '#')
    {
        if ($status === 0) {
            echo '<a href="'.$route.'" class="btn btn-rounded-danger btn-sm w-24 me-1 mb-2">Inactive</a>';
        } elseif ($status === 1) {
            echo '<a href="'.$route.'" class="btn btn-rounded-success btn-sm w-24 me-1 mb-2">Active</a>';
        }
    }
}


if (!function_exists('getimage')) {
    function getimage($src)
    
    {
        if ($src && Storage::disk('public')->exists($src)) {
           return asset('storage/'.$src);
        } else {
            return asset( 'backendstyle/images/placeholder_image.jpg' );
        }
    }
}

    
     
