@extends('layouts.backend')

@section('conten')
    
<div class="text-end mt-5">

        <a href="{{ route('backend.myservice.myservice_create') }}" class="btn btn-primary"> Add Category <i class="ms-2"
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
             <tr>
                 <td class="text-center">1</td>
                 <td class="text-nowrap">Angelina</td>
                 <td class="text-center">Jolie</td>
                 <td class="text-center">@angelinajolie</td>
             </tr>
         </tbody>
     </table>
 </div>






@push('backend_scripts')
    
<script>
     $(document).ready(function() {
                let table = new DataTable('#dateTable', {
                    responsive: true
                })
            });
</script>


@endpush

@endsection