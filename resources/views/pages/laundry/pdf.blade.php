<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>
        FIT LAUNDRY
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Noto+Sans:300,400,500,600,700,800|PT+Mono:300,400,500,600,700"
        rel="stylesheet" media="print" />
    <link id="pagestyle" href="{{ asset('assets/css/corporate-ui-dashboard.css?v=1.0.0') }}" rel="stylesheet"
        media="print" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

</head>

<body class=" bg-gray-100">

    <div class="container-fluid ">
        <div class="row">
            <div class="col-12">
                <div class="card border shadow-xs mb-4">
                    <div class="card-header pb-0">
                        <div class="d-sm-flex align-items-center">

                            <div class="p-3">
                                <h6 class="text-sm mb-0">Outlet</h6>
                                <p class="text-md font-weight-semibold mb-2">FIT Laundry</p>
                                <div class="d-flex align-items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                    </svg>
                                    <p class="text-sm font-weight-medium m-0">Nama Lokasi</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-body px-4">
                        <div class="table-responsive border-0 p-3">
                            <table class="w-100 align-items-center justify-content-center mb-0 border-0 text">
                                <thead class="bg-noneborder-0 text-start">
                                    <tr>
                                        <th class="text-md font-weight-semibold ">Pelanggan
                                        </th>
                                        <th class="text-md font-weight-semibold ">Tagihan
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="border-0">
                                    <tr class="border-0 text" style="border: 0px">
                                        <td>
                                            <p class="text-sm font-weight-normal ">Nama pelanggan: {{ $laundry->name }}
                                            </p>
                                            <p class="text-sm font-weight-normal ">No Telepon:
                                                {{ $laundry->phoneNumber }}
                                            </p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-normal">Nomor Tagihan: {{ $laundry->id }}
                                            </p>
                                            <p class="text-sm font-weight-normal">Tanggal Transaksi:
                                                {{ $laundry->created_at }}</p>
                                            <div class="d-flex gap-2">
                                                <p class="text-sm font-weight-normal mb-0">Status Tagihan:</p>
                                                <span
                                                    class="badge badge-sm border border-success text-success bg-success">
                                                    <svg width="9" height="9" viewBox="0 0 10 9" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg" stroke="currentColor"
                                                        class="me-1">
                                                        <path d="M1 4.42857L3.28571 6.71429L9 1" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    Status
                                                </span>

                                            </div>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive p-3">
                            <table class="table align-items-center justify-content-center mb-0">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7">No</th>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Detail
                                            Tagihan</th>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Harga
                                        </th>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Total
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>

                                            <div class="my-auto px-3 align-middle">
                                                <h6 class="mb-0 text-sm">1</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-normal mb-0">Berat kiloan :
                                                {{ $laundry->weight }}Kg</p>
                                        </td>
                                        <td>
                                            <span class="text-sm font-weight-normal">
                                                7000
                                            </span>
                                        </td>

                                        <td class="align-middle">

                                            <p class="text-secondary text-sm mb-0">
                                                @php
                                                    $subtotal = $laundry->weight * 7000;
                                                @endphp
                                                Rp. {{ number_format($subtotal, 2) }}
                                            </p>

                                        </td>

                                    </tr>
                                    <tr>
                                        <td>

                                            <div class="my-auto px-3 align-middle">
                                                <h6 class="mb-0 text-sm">2</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-normal mb-0">Kategori :
                                                {{ $laundry->category }}
                                            </p>
                                        </td>
                                        <td>
                                            <span class="text-sm font-weight-normal">
                                                @if ($laundry->category == 'REGULAR')
                                                    1000
                                                @else
                                                    4000
                                                @endif
                                            </span>
                                        </td>

                                        <td class="align-middle">

                                            <p class="text-secondary text-sm mb-0">
                                                @if ($laundry->category == 'REGULAR')
                                                    Rp. {{ number_format(1000, 2) }}
                                                @else
                                                    Rp. {{ number_format(4000, 2) }}
                                                @endif
                                            </p>

                                        </td>

                                    </tr>

                                    <tr>
                                        <td colspan="3" class="text-center">
                                            <p class="text-sm font-weight-normal mb-0">
                                                Total
                                            </p>
                                        </td>


                                        <td class="align-middle">

                                            <p class="text-secondary text-sm mb-0">
                                                @php
                                                    $categoryPrice = 0;
                                                @endphp
                                                @if ($laundry->category == 'REGULAR')
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

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</html>
