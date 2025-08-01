<?php

namespace App\Http\Controllers\Backend;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    function myservice_index()  {
        $services = Service::orderBy('status', 'DESC')->latest()->get();

        // Logic for displaying the list of services
        return view('backend.myservice.myservice_index', compact('services'));
    }

    function myservice_create()
    {
        // Logic for displaying the service creation form
        return view('backend.myservice.myservice_create');
    }



    function myservice_store(Request $request)
    {
        // Logic for storing the new service
        $request->validate([
            'service_name' => 'required|string|max:100',
            'service_description' => 'nullable|string|max:500',
            'service_image' => 'nullable|image|mimes:jpeg,png,jpg,webp',
        ]);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   

        // Handle file upload if necessary
        $path = null;
        if ($request->hasFile('service_image')) {
            $name = $request->service_name . "." . $request->service_image->extension();
            $path = $request->service_image->storeAs('services', $name, 'public');
        }

        Service::create([
            'service_name' => $request->service_name,
            'service_description' => $request->service_description,
            'service_image' => $path,
        ]);
    
        // Save the service data to the database
        // ...

        return redirect()->route('backend.myservice.myservice_index')->with('success', 'Service created successfully!');
    }

    function myservice_status_update($id)
    {
        // Logic for updating the service status
        $service = Service::findOrFail($id);
        $service->status = !$service->status; // Toggle status
        $service->save();

        return redirect()->route('backend.myservice.myservice_index')->with('success', 'Service status updated successfully!');
    }

    function myservice_delete($id)
    {
        // Logic for deleting the service
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('backend.myservice.myservice_index')->with('success', 'Service deleted successfully!');
    }



}
