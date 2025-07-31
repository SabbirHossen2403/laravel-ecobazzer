<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function myservice_index()
    {
        // Logic for displaying the list of services
        return view('backend.myservice.myservice_index');
    }
}
