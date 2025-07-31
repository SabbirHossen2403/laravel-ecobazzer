@extends('layouts.backend')

@section('conten')
    <div class="text-end mt-5">

        <a href="{{ route('backend.category.create') }}" class="btn btn-primary"> Add Category <i class="ms-2"
                data-feather="plus"></i> </a>



    </div>


    <div>
        <table id="dateTable" class="table table-responsive">
            <thead>
                <tr>
                    <th class="text-center">SL.</th>
                    <th class="text-nowrap">Titel</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $key => $category)
                    <tr>
                        <td class="text-center"> {{ ++$key }} </td>
                        <td class="d-flex align-items-center gap-2">
                            <img width="60" src="{{ getimage($category->category_icon) }}" alt="">
                            {{ $category->category_name }}
                        </td>

                        <td class="text-center">


                            {{ getStatusBadge($category->status, route('backend.category.status.update', $category->id)) }}
                        </td>
                        <td class="text-center">
                            <div class="dropdown"> <button class="dropdown-toggle btn btn-primary" aria-expanded="false"
                                    data-bs-toggle="dropdown">Option <i class="fa-solid fa-angle-down"></i></button>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">

                                        <li> <a href="" class="dropdown-item"> <i data-feather="eye"
                                                    class="w-4 h-4 text-gray-700 dark-text-gray-300 me-2"></i> View </a>
                                        </li>
                                        <li> <a href="{{ route('backend.category.edit', $category->id) }}"
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
