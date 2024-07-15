@extends('layouts.user_type.auth')

@section('content')
    <div class="row">
        <div class="col-md-4 mb-4">
            <style scoped>
                .col-md-4.mb-4 { margin-left: 100px; }
            </style>
            <a class="nav-link {{ Request::is('kas-kecil') ? 'active' : '' }} " href="{{ url('kas-kecil') }}">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <h5 class="font-weight-bolder mt-3 mb-3">
                                        Kas Kecil
                                    </h5>
                                    <p class="text-sm mt-1 mb-4 text-capitalize font-weight-bold">Add New Transaction</p>
                                </div>
                            </div>
                            <div class="col-4 text-end mt-4">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mx-auto mb-4">
            <a class="nav-link {{ Request::is('kas-besar') ? 'active' : '' }} " href="{{ url('kas-besar') }}">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <h5 class="font-weight-bolder mt-3 mb-3">
                                        Kas Besar
                                    </h5>
                                    <p class="text-sm mt-1 mb-4 text-capitalize font-weight-bold">Add New Transaction</p>
                                </div>
                            </div>
                            <div class="col-4 text-end mt-4">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="image-container">
        <img src="{{ asset('/assets/img/logopelindo.png') }}">
    </div>

    <style scoped>
        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200px;
            /* Adjust height as needed */
        }

        .image-container img {
            opacity: 0.5;
            /* Set the desired opacity (0 to 1) */
            transition: opacity 0.5s ease;
            /* Add a smooth opacity transition */
        }

        .image-container img:hover {
            opacity: 0.5;
            /* Increase opacity on hover */
        }
    </style>

    {{-- <div class="row">
        <div class="col-12">
            <div class="card mb-4 mt-5 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Log History</h5>
                        </div>
                        <a href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; Add New</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No Bukti
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tanggal
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nominal
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Kategori
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Keterangan
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">1</p>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-xs font-weight-bold mb-0">RFL/27/002</span>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">16/06/18</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">500.000</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">-</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Untuk konsumsi</p>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="mx-3" data-bs-toggle="tooltip"
                                            data-bs-original-title="Edit user">
                                            <i class="fas fa-edit text-secondary"></i>
                                        </a>
                                        <span>
                                            <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
