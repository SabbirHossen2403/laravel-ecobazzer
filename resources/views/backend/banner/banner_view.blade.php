@extends('layouts.backend')

@push('backend_style')
<link rel="stylesheet" href="{{ asset('backendstyle/css/banner.css') }}">
@endpush
@section('conten')

 <section id="banner" class="">
  <div class="container">


    <div class="bannerslider">
      <div>
        <div class="row">
          <div class="col-lg-7">
              <img style="margin-left: 20px"   class="img-fluid" src="{{ $banner->banner_image ? asset('storage/' . $banner->banner_image) : asset('storage/default.jpg') }}" alt="banner image">
          </div>
          <div class="col-lg-5 rightsite">
            <p class="welcome">{{ $banner->banner_title}}</p>
            <h1>{{$banner->banner_sub_title}}</h1>
            <p>{{ $banner->banner_details }}</p>
            <a class="cssbuttons-io-button" href="./shop.html">
              {{ $banner->banner_btn_text }}
              <div class="icon">
                <svg
                  height="24"
                  width="24"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path d="M0 0h24v24H0z" fill="none"></path>
                  <path
                    d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                    fill="currentColor"
                  ></path>
                </svg>
              </div>
            </a>       
            </div>
        </div>
      </div>
      
  
    </div>
        


    </div>

 </section>









@endsection
