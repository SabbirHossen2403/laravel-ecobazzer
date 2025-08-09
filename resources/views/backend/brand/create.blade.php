@extends('layouts.backend')

@section('conten')
    <div class="card">

        <div class="card-header">
            <h3 class="card-title"> <i class="fas fa-plus"></i>  Add Brand</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('backend.brand.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="brand_name">Catagory Name <b class="text-theme-6">*</b></label>
                            <input type="text" class="form-control" id="brand_name" name="brand_name"
                                placeholder="Enter brand name">

                               @error('brand_name')
                                <span class="text-theme-6"> {{ $message }}</span>
                                    
                                @enderror
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="brand_url">Catagory Url <b class="text-theme-6">*</b></label>
                            <input type="text" class="form-control" id="brand_url" name="brand_url"
                                placeholder="Enter brand url">
                                @error('brand_url')
                                <span class="text-theme-6"> {{ $message }}</span>
                                    
                                @enderror
                        </div>
                    </div>

                </div>

                <input type="file" name="brand_icon"  class="brand_icon mt-10 mb-5">


                <button type="submit" class="btn btn-primary w-full">Submit</button>

            </form>
        </div>
    </div>


    @push('backend_scripts')
        <script>
            $(document).ready(function() {
                $('#brand_name').keyup(function() {
                    let value = $(this).val()
                    value = value.replaceAll(' ', '-').toLowerCase();

                    $('#brand_url').val(value);
                });
                FilePond.registerPlugin(FilePondPluginImagePreview);

                $('.brand_icon').filepond( {
                    storeAsFile	: true,
                });


            });
        </script>
    @endpush
@endsection
