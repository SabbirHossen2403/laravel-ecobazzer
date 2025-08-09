@extends('layouts.backend')


@push('backend_style')
    <link rel="stylesheet" href="{{ asset('backendstyle/css/rte_theme_default.css') }}">
    <link rel="stylesheet" href="{{ asset('backendstyle/css/style.css') }}">
@endpush
@section('conten')
    <div class="card">

        <div class="card-header">
            <h3 class="card-title"> <i class="fas fa-plus"></i> Add Product</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('backend.product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="col-lg-7 col-md-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label for="title">Product Title <b class="text-theme-6">*</b> </label>
                                    <input type="text" name="title" id="title" class="form-control mt-2"
                                        placeholder="Product Title">
                                    @error('title')
                                        <span class="text-theme-6">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label for="slug">Product Url <b class="text-theme-6">*</b> </label>
                                    <input type="text" name="slug" id="slug" class="form-control mt-2"
                                        placeholder="Product Url">
                                    @error('gallery_imgslug')
                                        <span class="text-theme-6">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                        </div>



                        <div class="row mt-5">



                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="price"> Price <b class="text-theme-6">*</b> </label>
                                    <input type="number" name="price" id="price" class="form-control mt-2"
                                        placeholder="Product Price">
                                    @error('price')
                                        <span class="text-theme-6">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="selling_price">Product Discount Price </label>
                                    <input type="number" name="selling_price" id="selling_price" class="form-control mt-2"
                                        placeholder="Product Selling Price">
                                </div>
                            </div>

                        </div>

                        <div class="row mt-5">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Category <b class="text-theme-6">*</b> </label>
                                    <select name="category" class="form-control mt-2">
                                        <option disabled selected>Select Category </option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ ucwords($category->category_name) }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                        <span class="text-theme-6">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="sku">Product SKU </label>
                                    <input type="text" name="sku" id="sku" class="form-control mt-2"
                                        placeholder="Product SKU">
                                </div>
                            </div>

                        </div>

                        <div class="form-group mt-5">
                            <label for="short_details" class="mb-2"> <strong> Product Short Details :</strong> </label>
                            <textarea name="short_details" id="short_details" class="form-control mt-3" placeholder="Product Short Details"></textarea>

                        </div>
                        <div class="form-group mt-5">
                            <label for="long_details" class="mb-2"> <strong> Product Long Details :</strong> </label>
                            <textarea name="long_details" id="long_details" class="form-control mt-3" placeholder="Product Short Details"></textarea>

                        </div>
                        <div class="form-group mt-5">
                            <label for="additional_info" class="mb-2"> <strong> Additonla Info :</strong> </label>
                            <textarea name="additional_info" id="additional_info" class="form-control mt-3" placeholder="Product Short Details"></textarea>

                        </div>


                        <div class="row mt-5 mb-5">
                            <div class="col-lg-4">
                                <label class="switch d-flex">
                                    <p style="margin-right: 10px"><strong> Status : </strong></p>
                                    <input type="hidden" name="status" value="0">
                                    <input type="checkbox" name="status" value="1">
                                    <div class="slider">
                                        <div class="circle">
                                            <!-- svg here -->
                                        </div>
                                    </div>
                                </label>
                            </div>

                            <div class="col-lg-4">
                                <label class="switch d-flex">
                                    <p style="margin-right: 10px"><strong> Featured : </strong></p>
                                    <input type="hidden" name="featured" value="0">
                                    <input type="checkbox" name="featured" value="1">
                                    <div class="slider">
                                        <div class="circle">
                                            <!-- svg here -->
                                        </div>
                                    </div>
                                </label>
                            </div>

                            <div class="col-lg-4">
                                <label class="switch d-flex">
                                    <p style="margin-right: 10px"><strong> Stock : </strong></p>
                                    <input type="hidden" name="stock" value="0">
                                    <input type="checkbox" name="stock" value="1">
                                    <div class="slider">
                                        <div class="circle">
                                            <!-- svg here -->
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>





                    </div>


                    <div class="col-lg-5 col-md-12">

                        <div class="form-group">
                            <label for="">Brand <b class="text-theme-6">*</b> </label>
                            <select name="brand" class="form-control mt-2">
                                <option disabled selected>Select Brand </option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ ucwords($brand->brand_name) }}
                                    </option>
                                @endforeach
                            </select>

                        </div>



                        <div class="form-group mt-8">
                            <label for="featured_image"> Product Image </label>
                            <input type="file" name="featured_img" id="featured_img" class="featured_image mt-2">
                            @error('featured_img')
                                <span class="text-theme-6">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="gallery_image"> Gallery Image </label>
                            <input type="file" name="gallery_img[]" id="gallery_img" class="gallery_image mt-2"
                                multiple>
                            @error('gallery_img.*')
                                <span class="text-theme-6">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                </div>






                <button type="submit" class="btn btn-primary w-full">Submit</button>

            </form>
        </div>
    </div>


    @push('backend_scripts')
        <script>
            $(document).ready(function() {
                $('#title').keyup(function() {
                    let value = $(this).val()
                    value = value.replaceAll(' ', '-').toLowerCase();

                    $('#slug').val(value);
                });
                FilePond.registerPlugin(FilePondPluginImagePreview);

                $('.featured_image').filepond({
                    storeAsFile: true,
                });
                $('.gallery_image').filepond({
                    storeAsFile: true,
                    multiple: true,
                });


                new RichTextEditor("#short_details");
                new RichTextEditor("#long_details");
                new RichTextEditor("#additional_info");

            });
        </script>
        <script src="{{ asset('backendstyle/js/all_plugins.js') }}"></script>
        <script src="{{ asset('backendstyle/js/rte.js') }}"></script>
    @endpush
@endsection
