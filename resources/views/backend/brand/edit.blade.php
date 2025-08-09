@extends('layouts.backend')

@section('conten')
<div class="card">
    <div class="card-header">Edit brand</div>
    <div class="card-body">
           <form action="{{ route('backend.brand.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="brand_name">Catagory Name <b class="text-theme-6">*</b></label>
                            <input type="text" class="form-control" id="brand_name" name="brand_name"
                                placeholder="Enter brand name"  value="{{ old('brand_name', $brand->brand_name) }}">

                               @error('brand_name')
                                <span class="text-theme-6"> {{ $message }}</span>
                                    
                                @enderror
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="brand_url">Catagory Url <b class="text-theme-6">*</b></label>
                            <input type="text" class="form-control" id="brand_url" name="brand_url"
                                placeholder="Enter brand url" value="{{ old('brand_url', $brand->brand_url) }}">
                                @error('brand_url')
                                <span class="text-theme-6"> {{ $message }}</span>
                                    
                                @enderror
                        </div>
                    </div>

                </div>

                 <div class="form-group mt-5">
                <label class="mb-5"><b> Existing Icon: </b></label><br>
                @if($brand->brand_icon)
                    <img class="mx-auto" src="{{ asset('storage/'.$brand->brand_icon) }}" width="200">
                @endif
                <input type="file" name="brand_icon" class="brand_icon mt-5">
            </div>

                <button type="submit" class="btn btn-primary w-full">Update</button>

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
