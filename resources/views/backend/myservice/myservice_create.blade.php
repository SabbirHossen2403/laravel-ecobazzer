@extends('layouts.backend')

@section('conten')
    





<div class="card">
    
    <div class="card-header">  Add New Service</div>
    <div class="card-body">
        <form action="{{ route('backend.myservice.myservice_store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="service"> <b>Service Title :</b></label>
                    <input type="text" name="service_name" class="form-control mt-2" id="service" placeholder="Enter Service Name">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="service_description"> <b>Service Sub Title :</b></label>
                    <input type="text" name="service_description" class="form-control mt-2" id="service_description" placeholder="Enter Service description">
                </div>
            </div>
        </div>
        

     <div class="form-group mt-5">
        <label for="service_image"> <b>Service Image :</b></label>
        <input type="file" id="service_image" name="service_image" class="service_image mt-2 mb-2">
     </div>

<button type="submit" class="btn btn-primary w-full mt-5"> Submit</button>
        </form>
    </div>

</div>














@push('backend_scripts')
<script>
    $(document).ready(function(){

         FilePond.registerPlugin(FilePondPluginImagePreview);
         $('.service_image').filepond({
             storeAsFile	: true,
});

    
    });

    
</script>
    
@endpush







@endsection