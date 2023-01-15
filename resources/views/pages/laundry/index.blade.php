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
                                <a href="{{ route('dashboard.laundry.create') }}"
                                    class="btn btn-sm btn-dark btn-icon d-flex align-items-center mb-0 me-2">
                                    <span class="btn-inner--icon">
                                        <svg width="14" height="14" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="d-block me-2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                        </svg>
                                    </span>
                                    <span class="btn-inner--text">Add New Customer</span>
                                </a>
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

                                                <p class="text-secondary text-sm mb-0">

                                                    @php
                                                        $subtotal = $item->weight * 7000;
                                                        $categoryPrice = 0;
                                                    @endphp
                                                    @if ($item->category == 'REGULAR')
                                                        @php
                                                            $categoryPrice = 0 + 1000;
                                                        @endphp
                                                    @else
                                                        @php
                                                            $categoryPrice = 0 + 4000;
                                                        @endphp
                                                    @endif
                                                    @php
                                                        $totalPrice = $subtotal + $categoryPrice;
                                                    @endphp
                                                    Rp. {{ number_format($totalPrice, 2) }}
                                                </p>

                                            </td>
                                            <td class="d-flex justify-content-center text-center pt-3">
                                                <div class="d-flex gap-2">
                                                    <a href="{{ route('dashboard.laundry.edit', $item->id) }}"
                                                        class="btn btn-dark  btn-icon px-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                            height="14" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor" stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                    <form action="{{ route('dashboard.laundry.destroy', $item->id) }}"
                                                        method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger px-3 show_confirm">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                height="14" fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </form>

                                                    <a href="{{ route('dashboard.laundry.show', $item->id) }}"
                                                        class="btn btn-info btn-icon px-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                            height="14" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor" stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        </svg>

                                                    </a>
                                                </div>

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
                                <a href="{{ route('dashboard.laundry.edit', $item->id) }}"
                                    class="btn btn-dark  btn-icon px-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                        </path>
                                    </svg>
                                </a>
                                <form action="{{ route('dashboard.laundry.destroy', $item->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger px-3 show_confirm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                            </path>
                                        </svg>
                                    </button>
                                </form>
                                <a href="{{ route('dashboard.laundry.show', $item->id) }}"
                                    class="btn btn-info btn-icon px-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>

                                </a>
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
    <script>
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete this record?`,
                    text: "If you delete this, it will be gone forever.",
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
