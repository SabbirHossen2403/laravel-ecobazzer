@extends('layouts.backend')


@section('conten')




    <div class="card">
        <div class="card-header"> Update Banner </div>
        <div class="card-body">

            <form action=" {{ route('backend.banner.banner_update' , $banner->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row mt-5 mb-5">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control mt-1" name="banner_title" id="title" value="{{ old('banner_title', $banner->banner_title) }}"
                                placeholder="Enter title">
                            @error('banner_title')
                                <span class="text-theme-6"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="title">Sub Title</label>
                            <input type="text" class="form-control mt-1" name="banner_sub_title" id="title" value="{{ old('banner_sub_title', $banner->banner_sub_title) }}"
                                placeholder="Enter Sub title">
                            @error('banner_sub_title')
                                <span class="text-theme-6"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>




                <div class="form-group">
                    <label for="details">Discription</label>
                    <input type="text" class="form-control mt-1" name="banner_details" id="details" value="{{ old('banner_details', $banner->banner_details) }}"
                        placeholder="Enter the discription">
                    @error('banner_details')
                        <span class="text-theme-6"> {{ $message }}</span>
                    @enderror
                </div>






                <div class="row mt-5 mb-5">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="btn_text">Btn-Text</label>
                            <input type="text" class="form-control mt-1" name="banner_btn_text" id="btn_text" value="{{ old('banner_btn_text', $banner->banner_btn_text) }}"
                                placeholder="Enter btn text">
                            @error('banner_btn_text')
                                <span class="text-theme-6"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="btn_url">Btn-Url</label>
                            <input type="text" class="form-control mt-1" name="banner_btn_url" id="btn_url" value="{{ old('banner_btn_url', $banner->banner_btn_url) }}"
                                placeholder="Enter btn url">
                            @error('banner_btn_url')
                                <span class="text-theme-6"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for=""> Banner Image</label>
                    <img class="mx-auto" src="{{ asset('storage/'.$banner->banner_image) }}" width="200">
                
                    <input type="file" class="banner_image" name="banner_image">
                    @error('banner_image')
                        <span class="text-theme-6"> {{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary w-full">Update</button>

            </form>
        </div>
    </div>


















 @push('backend_scripts')
        <script>
            $(document).ready(function() {
                FilePond.registerPlugin(FilePondPluginImagePreview);

                $('.banner_image').filepond({
                    storeAsFile: true,
                });
            });
        </script>
    @endpush
@endsection