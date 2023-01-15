@extends('layouts.admin')

@section('content')
    <div class="container-fluid py-4 px-5">
        <div class="row">
            <div class="col-12">
                <div class="card card-background card-background-after-none align-items-start mt-4 mb-5">
                    <div class="full-background" style="background-image: url('/assets/img/header-blue-purple.jpg')"></div>
                    <div class="card-body text-start p-4 w-100">
                        <h3 class="text-white mb-2">Collect your benefits 🔥</h3>
                        <p class="mb-4 font-weight-semibold">
                            Check all the advantages and choose the best.
                        </p>
                        <button type="button"
                            class="btn btn-outline-white btn-blur btn-icon d-flex align-items-center mb-0">
                            <span class="btn-inner--icon">
                                <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" class="d-block me-2">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7 14C10.866 14 14 10.866 14 7C14 3.13401 10.866 0 7 0C3.13401 0 0 3.13401 0 7C0 10.866 3.13401 14 7 14ZM6.61036 4.52196C6.34186 4.34296 5.99664 4.32627 5.71212 4.47854C5.42761 4.63081 5.25 4.92731 5.25 5.25V8.75C5.25 9.0727 5.42761 9.36924 5.71212 9.52149C5.99664 9.67374 6.34186 9.65703 6.61036 9.47809L9.23536 7.72809C9.47879 7.56577 9.625 7.2926 9.625 7C9.625 6.70744 9.47879 6.43424 9.23536 6.27196L6.61036 4.52196Z" />
                                </svg>
                            </span>
                            <span class="btn-inner--text">Watch more</span>
                        </button>
                        <img src="/assets/img/3d-cube.png" alt="3d-cube"
                            class="position-absolute top-0 end-1 w-25 max-width-200 mt-n6 d-sm-block d-none" />
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-sm-block d-none">
            <div class="col-12">
                <div class="card shadow-xs mb-4">
                    <div class="card-header border-bottom pb-0">
                        <div class="d-sm-flex align-items-center mb-3">
                            <div>
                                <h6 class="font-weight-semibold text-lg mb-0">Customer</h6>
                                <p class="text-sm mb-sm-0">These are details about the customer FIT Laundry</p>
                            </div>
                            <div class="ms-auto d-flex">
                                <div class="input-group input-group-sm ms-auto me-2">
                                    <span class="input-group-text text-body">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                                            </path>
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control form-control-sm" placeholder="Search">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-2 py-0">
                        <div class="table-responsive p-3">
                            <table class="table align-items-center justify-content-center mb-0">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7">No</th>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Username</th>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Phone Number
                                        </th>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Category</th>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Price</th>
                                        <th class="text-center text-secondary text-xs font-weight-semibold opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($laundry as $key => $item)
                                        <tr>
                                            <td>

                                                <div class="my-auto px-3 align-middle">
                                                    <h6 class="mb-0 text-sm">{{ $key + 1 }}</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-normal mb-0">{{ $item->name }}</p>
                                            </td>
                                            <td>
                                                <span class="text-sm font-weight-normal">{{ $item->phoneNumber }}</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-sm border border-success text-success bg-success">
                                                    <svg width="9" height="9" viewBox="0 0 10 9" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg" stroke="currentColor"
                                                        class="me-1">
                                                        <path d="M1 4.42857L3.28571 6.71429L9 1" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    {{ $item->category }}
                                                </span>
                                            </td>
                                            <td class="align-middle">

                                                <p class="text-secondary text-sm mb-0"> {{ $item->price }}</p>

                                            </td>
                                            <td class="d-flex justify-content-center text-center pt-3">
                                                <form action="{{ route('dashboard.history.update', $item->id) }}"
                                                    method="POST">

                                                    @method('PUT')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger px-3 show_confirm">
                                                        <span class="btn-inner--icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                height="14" class="d-block ms-1" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </form>

                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                        <div class="py-3 px-3 d-flex align-items-center">
                            {{ $laundry->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-sm-none">
            <div class="col-12">
                @forelse ($laundry as $key => $item)
                    <div class="card mb-2">
                        <div class="card-body">
                            <h3 class="card-title mb-3">#{{ $item->id }}</h3>
                            <table class="border-0 text w-100">
                                <tr>
                                    <td class="justify-content-start">
                                        <p class="font-semibold">Username</p>
                                    </td>
                                    <td class="d-flex justify-content-end">
                                        <p class="text-gray-500">{{ $item->name }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="justify-content-start">
                                        <p class="font-semibold">Phone Number</p>
                                    </td>
                                    <td class="d-flex justify-content-end">
                                        <p class="text-gray-500">{{ $item->phoneNumber }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="justify-content-start">
                                        <p class="font-semibold">Category</p>
                                    </td>
                                    <td class="d-flex justify-content-end">
                                        <p class="text-gray-500">{{ $item->category }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="justify-content-start">
                                        <p class="font-semibold">Price</p>
                                    </td>
                                    <td class="d-flex justify-content-end">
                                        <p class="text-gray-500">{{ $item->price }}</p>
                                    </td>
                                </tr>
                            </table>

                            <div class="d-flex gap-2">
                                <form action="{{ route('dashboard.laundry.update', $item->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <button type="submit" class="btn btn-danger px-3 show_confirm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            class="d-block ms-1" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12">
                                            </path>
                                        </svg>
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>
                @empty
                @endforelse

            </div>
        </div>
    </div>
@endsection

@push('after-script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to restore this record?`,
                    text: "If you restore this, it will be back in main page.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
@endpush
