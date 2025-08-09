@extends('layouts.backend')

@section('conten')
    <div class="text-end mt-5">

        <a href="{{ route('backend.brand.create') }}" class="btn btn-primary"> Add Brand <i class="ms-2"
                data-feather="plus"></i> </a>



    </div>


    <div>
        <table id="dateTable" class="table table-responsive">
            <thead>
                <tr>
                    <th class="text-center">SL.</th>
                    <th class="text-center">Titel</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($brands as $key => $brand)
                    <tr>
                        <td class="text-center"> {{ ++$key }} </td>
                        <td class="d-flex  justify-content-center align-items-center gap-2">
                            <img width="60" src="{{ getimage($brand->brand_icon) }}" alt="">
                            {{ ucwords($brand->brand_name) }}
                        </td>

                        <td class="text-center">


                            {{ getStatusBadge($brand->status, route('backend.brand.status.update', $brand->id)) }}
                        </td>
                        <td class="text-center">
                            <div class="dropdown"> <button class="dropdown-toggle btn btn-primary" aria-expanded="false"
                                    data-bs-toggle="dropdown">Option </i></button>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">

                                        <li> <a href="" class="dropdown-item"> <i data-feather="eye"
                                                    class="w-4 h-4 text-gray-700 dark-text-gray-300 me-2"></i> View </a>
                                        </li>
                                        <li> <a href="{{ route('backend.brand.edit', $brand->id) }}"
                                                class="dropdown-item"> <i data-feather="edit"
                                                    class="w-4 h-4 text-gray-700 dark-text-gray-300 me-2"></i> Edit </a>
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
