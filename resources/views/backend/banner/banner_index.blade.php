@extends('layouts.backend')
@section('conten')
    <div class="banner_button">
        <div class="text-end mt-5">
            <a href=" {{ route('backend.banner.banner_create') }} " class="btn btn-primary"> Add Banner <i class="ms-2"
                    data-feather="plus"></i> </a>
        </div>
    </div>
    <div class="">
        <table id="dataTable" class="table table-responseve">
            <thead>
                <tr>
                    <th class="text-center">SL.</th>
                    <th class="text-center">Title</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($banners as $key => $banner)
                    <tr>
                        <td class="text-center"> {{ ++$key }}</td>
                        <td class="text-center"> {{ $banner->banner_title }}</td>
                        <td class="text-center ">
                            <img class="mx-auto" width="100" src="{{ getimage($banner->banner_image) }}" alt="">
                        </td>
                        <td class="text-center">
                            {{ getStatusBadge($banner->status, route('backend.banner.banner_status_update', $banner->id)) }}
                        </td>
                        <td class="text-center ">
                            <div class="dropdown"> <button class="dropdown-toggle btn btn-primary" aria-expanded="false"
                                    data-bs-toggle="dropdown">Option <i class="fa-solid fa-angle-down"></i></button>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">

                                        <li> <a href="" class="dropdown-item"> <i data-feather="eye"
                                                    class="w-4 h-4 text-gray-700 dark-text-gray-300 me-2"></i> View </a>
                                        </li>
                                        <li> <a href="{{ route('backend.banner.edit', $banner->id) }}" class="dropdown-item"> <i data-feather="edit"
                                                    class="w-4 h-4 text-gray-700 dark-text-gray-300 me-2"></i> Edit </a>
                                        </li>

                                       <li>

                                            <a href="{{ route('backend.banner.banner_delete', $banner->id) }}"
                                                onclick="event.preventDefault(); deleteBanner({{ $banner->id }})"
                                                class="dropdown-item"> <i data-feather="trash"
                                                    class="w-4 h-4 text-gray-700 dark-text-gray-300 me-2"></i> Delete </a>
                                            <form id="delete-form-{{ $banner->id }}"
                                                action="{{ route('backend.banner.banner_delete', $banner->id) }}" method="POST"
                                                >
                                                @csrf
                                            </form>

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

   @push('backend_scripts')
    <script>
        function deleteBanner(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: `You want to delete this banner!`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        }

        $(document).ready(function() {
            let table = new DataTable('#dataTable', {
                responsive: true
            });
        });
    </script>
@endpush

@endsection
