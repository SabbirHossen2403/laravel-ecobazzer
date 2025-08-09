@extends('layouts.backend')

@push('backend_style')
    <link rel="stylesheet" href="{{ asset('backendstyle/css/style.css') }}">
@endpush
@section('conten')
    <div class="text-end mt-5">

        <a href="{{ route('backend.product.create') }}" class="btn btn-primary"> Add Category <i class="ms-2"
                data-feather="plus"></i> </a>



    </div>


    <div>
        <table id="dateTable" class="table table-responsive">
            <thead>
                <tr>
                    <th class="text-center">SL.</th>
                    <th class="text-nowrap">Titel</th>
                    <th class="text-center">Category</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Sku</th>
                    <th class="text-center">Featured</th>
                    <th class="text-center">Stock</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $key => $product)
                    <tr>
                        <td class="text-center">{{ ++$key }}</td>
                        <td class="d-flex align-items-center gap-2">
                            <img width="60px" src="{{ getimage($product->featured_img) }}" alt="">
                            {{ $product->title }}
                        </td>
                        <td class="text-center">{{ $product->category->category_name}}</td>
                        <td class="text-center">
                            @if ($product->selling_price)
                                <b> {{ number_format($product->selling_price, 2) }}</b> <del
                                    style="opacity:0.70 ">{{ number_format($product->price, 2) }}</del>
                            @else
                                <b>{{ number_format($product->price, 2) }}</b>
                            @endif
                        </td>
                        <td class="text-center">
                            {{ getStatusBadge($product->status, route('backend.product.status.update', $product->id)) }}
                        </td>
                        <td class="text-center"> {{ $product->sku }}</td>
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('backend.product.featured.update' , $product->id)}}">

                                <svg style="margin-top: -10px;" height="34px" width="34px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="{{ $product->featured ? '#f9a828' : '#666' }}">
                                    <path
                                        d="M9.362,9.158c0,0-3.16,0.35-5.268,0.584c-0.19,0.023-0.358,0.15-0.421,0.343s0,0.394,0.14,0.521
                c1.566,1.429,3.919,3.569,3.919,3.569c-0.002,0-0.646,3.113-1.074,5.19c-0.036,0.188,0.032,0.387,0.196,0.506
                c0.163,0.119,0.373,0.121,0.538,0.028c1.844-1.048,4.606-2.624,4.606-2.624s2.763,1.576,4.604,2.625
                c0.168,0.092,0.378,0.09,0.541-0.029c0.164-0.119,0.232-0.318,0.195-0.505c-0.428-2.078-1.071-5.191-1.071-5.191
                s2.353-2.14,3.919-3.566c0.14-0.131,0.202-0.332,0.14-0.524s-0.23-0.319-0.42-0.341c-2.108-0.236-5.269-0.586-5.269-0.586
                s-1.31-2.898-2.183-4.83c-0.082-0.173-0.254-0.294-0.456-0.294s-0.375,0.122-0.453,0.294C10.671,6.26,9.362,9.158,9.362,9.158z">
                                    </path>
                                </svg>
                            </a>
                        </td>

                        <td class="text-center">
                            {{ getstock_status($product->stock, route('backend.product.stock.update', $product->id)) }}
                        </td>

                        <td class="text-center">
                            <div class="dropdown"> <button class="dropdown-toggle btn btn-primary" aria-expanded="false"
                                    data-bs-toggle="dropdown">Option <i class="fa-solid fa-angle-down"></i></button>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li> <a href="" class="dropdown-item"> <i data-feather="printer"
                                                    class="w-4 h-4 text-gray-700 dark-text-gray-300 me-2"></i> Print </a>
                                        </li>
                                        <li> <a href="" class="dropdown-item"> <i data-feather="external-link"
                                                    class="w-4 h-4 text-gray-700 dark-text-gray-300 me-2"></i> Excel </a>
                                        </li>
                                        <li> <a href="" class="dropdown-item"> <i data-feather="file-text"
                                                    class="w-4 h-4 text-gray-700 dark-text-gray-300 me-2"></i> CSV </a>
                                        </li>
                                        <li> <a href="" class="dropdown-item"> <i data-feather="archive"
                                                    class="w-4 h-4 text-gray-700 dark-text-gray-300 me-2"></i> PDF </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <form action=""></form>

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
