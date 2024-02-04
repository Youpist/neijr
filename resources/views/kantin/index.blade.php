@extends('layout.main')

@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
                <div class="col-sm-6 col-lg-6">
                    <div class="card mb-4 text-white bg-primary">
                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div>
                                <div class="fs-4 fw-semibold">
                                    <div>
                                        <p class="text-sm">Total Pemasukan</p>
                                        <svg class="icon">
                                            <use
                                                xlink:href="{{ asset('assets/vendors/@coreui/icons/svg/free.svg#cil-arrow-right') }}">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-start mt-3">
                            <h3 class="mb-0 ms-3">Rp.{{ number_format($total_pemasukan, 0, ',', '.') }}</h3>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="card mb-4 text-white bg-success">
                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div>
                                <div class="fs-4 fw-semibold">
                                    <div>
                                        <p class="text-sm">Total Perhari</p>
                                        <svg class="icon">
                                            <use
                                                xlink:href="{{ asset('assets/vendors/@coreui/icons/svg/free.svg#cil-arrow-right') }}">
                                            </use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-start mt-3">
                            <h3 class="mb-0 ms-3">Rp.{{ number_format($total_perhari, 0, ',', '.') }}</h3>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
