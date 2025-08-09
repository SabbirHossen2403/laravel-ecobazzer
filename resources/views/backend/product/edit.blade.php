@extends('layouts.backend')

@section('conten')
<div class="card">
    <div class="card-header">Edit Category</div>
    <div class="card-body">
           <form action="{{ route('backend.category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="category_name">Catagory Name <b class="text-theme-6">*</b></label>
                            <input type="text" class="form-control" id="category_name" name="category_name"
                                placeholder="Enter category name"  value="{{ old('category_name', $category->category_name) }}">

                               @error('category_name')
                                <span class="text-theme-6"> {{ $message }}</span>
                                    
                                @enderror
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="category_url">Catagory Url <b class="text-theme-6">*</b></label>
                            <input type="text" class="form-control" id="category_url" name="category_url"
                                placeholder="Enter category url" value="{{ old('category_url', $category->category_url) }}">
                                @error('category_url')
                                <span class="text-theme-6"> {{ $message }}</span>
                                    
                                @enderror
                        </div>
                    </div>

                </div>

                 <div class="form-group mt-5">
                <label class="mb-5"><b> Existing Icon: </b></label><br>
                @if($category->category_icon)
                    <img class="mx-auto" src="{{ asset('storage/'.$category->category_icon) }}" width="200">
                @endif
                <input type="file" name="category_icon" class="category_icon mt-5">
            </div>

                <button type="submit" class="btn btn-primary w-full">Update</button>

            </form>
    </div>
</div>

@push('backend_scripts')
        <script>
            $(document).ready(function() {
                $('#category_name').keyup(function() {
                    let value = $(this).val()
                    value = value.replaceAll(' ', '-').toLowerCase();

                    $('#category_url').val(value);
                });
                FilePond.registerPlugin(FilePondPluginImagePreview);

                $('.category_icon').filepond( {
                    storeAsFile	: true,
                });


            });
        </script>
    @endpush
@endsection
