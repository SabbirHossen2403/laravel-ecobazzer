<?php


    if(! function_exists('getProfileImage')) {
        function getProfileImage($name)
        {
            return "https://api.dicebear.com/9.x/initials/svg?seed=$name";
        }
    }
        

 use Illuminate\Support\Str;

if (! function_exists('breadcrump')) {
    function breadcrump()
    {
        $url = request()->url(); // উদাহরণ: http://localhost:8000/backend/category
        $path = Str::of($url)->explode('/backend/'); // ['http://localhost:8000', 'category']
        return Str::headline($path[1] ?? 'Dashboard'); // Category
    }
}

