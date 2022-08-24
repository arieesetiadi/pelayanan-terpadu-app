@extends('layout.admin-template')

@section('content')
    <h1 class="mb-4">Dashboard</h1>

    <div class="container">
        <div class="row">
            {{-- Jumlah Laporan SKTLK --}}
            <div class="col-3">
                <div class="card radius-10 border-0 border-start border-tiffany border-3">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Laporan SKTLK</p>
                                <h4 class="mb-0 text-tiffany">25</h4>
                            </div>
                            <div class="ms-auto widget-icon bg-tiffany text-white">
                                <i class="bi bi-card-list"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Jumlah Laporan SIK --}}
            <div class="col-3">
                <div class="card radius-10 border-0 border-start border-success border-3">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Laporan SIK</p>
                                <h4 class="mb-0 text-success">50</h4>
                            </div>
                            <div class="ms-auto widget-icon bg-success text-white">
                                <i class="bi bi-card-list"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Jumlah Laporan Tindak Kriminal --}}
            <div class="col-3">
                <div class="card radius-10 border-0 border-start border-danger border-3">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Tindak Kriminal</p>
                                <h4 class="mb-0 text-danger">1</h4>
                            </div>
                            <div class="ms-auto widget-icon bg-danger text-white">
                                <i class="bi bi-card-list"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Jumlah Laporan SP2HP --}}
            <div class="col-3">
                <div class="card radius-10 border-0 border-start border-warning border-3">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Laporan SP2HP</p>
                                <h4 class="mb-0 text-warning">10</h4>
                            </div>
                            <div class="ms-auto widget-icon bg-warning text-white">
                                <i class="bi bi-card-list"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
