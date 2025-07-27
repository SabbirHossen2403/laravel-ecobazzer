@extends('layouts.backend')

@section('conten')

   <div class="text-end mt-5">

<a href="{{ route('backend.category.create') }}" class="btn btn-primary" >  Add Category <i class="ms-2" data-feather="plus" ></i> </a>



   </div>


   <div class="overflow-x-auto">
     <table id="dateTable" class="table table-responsive">
         <thead>
             <tr>
                 <th class="text-nowrap">SL.</th>
                 <th class="text-nowrap">Titel</th>
                 <th class="text-nowrap">Status</th>
                 <th class="text-nowrap">Action</th>
             </tr>
         </thead>
         <tbody>
          
            
             
         </tbody>
     </table>
 </div>



@endsection 