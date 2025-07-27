<?php


    if(! function_exists('getProfileImage')) {
        function getProfileImage($name)
        {
            return "https://api.dicebear.com/9.x/initials/svg?seed=$name";
        }
    }
        
