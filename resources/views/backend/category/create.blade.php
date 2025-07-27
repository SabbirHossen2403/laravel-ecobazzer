@extends('layouts.backend')

@section('conten')
    <div class="card">

        <div class="card-header">
            <h3 class="card-title">Add Category</h3>
        </div>

        <div class="card-body">
            <form action="">
                @csrf

                <div class="row">

                <div class="col-lg-6">
                <div class="form-group">
                    <label for="category_name">Catagory Name <b class="text-theme-6">*</b></label>
                    <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Enter category name">
                </div>
                </div>

                <div class="col-lg-6">
                <div class="form-group">
                    <label for="category_url">Catagory Url <b class="text-theme-6">*</b></label>
                    <input type="text" class="form-control" id="category_url" name="category_Url" placeholder="Enter category url">
                </div>
                </div>

                </div>

                 <input type="file" class="category_icon mt-10 mb-5">


            </form>
        </div>
    </div>


    @push('backend_scripts')
        
    <script>
        $(document).ready(function() {
            $('#category_name').keyup (function(){
              let value = $(this).val()
              value =  value.replaceAll(' ' , '-').toLowerCase();

              $('#category_url').val(value);
            });
            FilePond.registerPlugin(FilePondPluginImagePreview);

        $('.category_icon').filepond();
         

        });
    </script>



    @endpush



@endsection