@extends('layouts.backend')

@section('conten')
    
<div class="text-end mt-5">

        <a href="{{ route('backend.myservice.myservice_create') }}" class="btn btn-primary"> Add Service <i class="ms-2"
                data-feather="plus"></i> </a>



    </div>

 <div  class="dateTable">
     <table id="dateTable" class="table table-sm">
         <thead>
             <tr>
                 <th class="text-center">SL.</th>
                 <th class="text-nowrap">Title</th>
                 <th class="text-center">Status</th>
                 <th class="text-center">Action</th>
             </tr>
         </thead>
         <tbody>
            @foreach ($services as $key => $service)
                <tr>
                    <td class="text-center"> {{++$key}} </td>
                    <td class="d-flex align-items-center gap-2">
                        <img width="60" src="{{ getimage($service->service_image) }}" alt="">
                         {{  ucwords($service->service_name) }} 
                        </td>
                        <td class="text-center"> {{ getStatusBadge($service->status, route('backend.myservice.myservice_status_update', $service->id)) }} </td>
               <td class="text-center">
                
            
            <div class="dropdown"> <button class="dropdown-toggle btn btn-primary" aria-expanded="false" data-bs-toggle="dropdown">Option <i class="fa-solid fa-angle-down"></i></button>
     <div class="dropdown-menu w-40">
         <ul class="dropdown-content">
             <li>
                 <hr class="dropdown-divider">
             </li>
             <li> <a href="" class="dropdown-item"> <i data-feather="eye" class="w-4 h-4 text-gray-700 dark-text-gray-300 me-2"></i> View </a> </li>
             <li> <a href="" class="dropdown-item"> <i data-feather="edit" class="w-4 h-4 text-gray-700 dark-text-gray-300 me-2"></i> Edit </a> </li>
             <li> <a href="{{ route('backend.myservice.myservice_delete', $service->id)}}"
                onclick="event.preventDefault(); deleteService({{ $service->id }})"
                class="dropdown-item"> <i data-feather="trash" class="w-4 h-4 text-gray-700 dark-text-gray-300 me-2"></i> Delete </a>
            <form action="{{ route('backend.myservice.myservice_delete', $service->id)}}" method="POST" id="deleteForm{{ $service->id }}"> 
                @csrf
            
            </form>
            </li>
         </ul>
     </div>
 </div>
            
            </td>
                    </tr>
            @endforeach
         </tbody>
     </table>
 </div>






@push('backend_scripts')
    
<script>



 // delete category function
              function deleteService(id) {


        Swal.fire({
            title: 'Are you sure?',
            text: `You want to delete !`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('deleteForm' + id).submit();
            }
        });
    }







     $(document).ready(function() {
                let table = new DataTable('#dateTable', {
                    responsive: true
                })










            });
</script>


@endpush

@endsection