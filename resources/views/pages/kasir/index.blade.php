@extends('layouts.kasir')

@section('content')
    <div class="page-wrapper" style="margin-right: 35%">
        @include('components.kasir.nav-menu')
        <div class="container-fluid">
            <div class="row mt-3">
                @foreach (range(1, 20) as $i)
                    <div class="col-sm-4 col-lg-3 col-xxl-2">
                        <a class="card mb-3" data-bs-toggle="modal" data-bs-target="#modal-success">
                            <!-- Photo -->
                            <div class="img-responsive img-responsive-16x9 card-img-top"
                                style="background-image: url(./static/photos/home-office-desk-with-macbook-iphone-calendar-watch-and-organizer.jpg)">
                            </div>
                            <div class="card-body p-2">
                                <h4 class="card-title mb-1">Coffe Latte</h4>
                                <p class="text-secondary">18.000</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('aside')
    <aside class="navbar navbar-vertical navbar-right navbar-expand z-1" style="padding-top: 56px; width: 35%;">
        <div class="container-fluid mx-3 pt-3">
            <div class="card">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <h3 class="card-title mb-0">Card with action</h3>
                    <a href="#" class="btn btn-primary btn-3">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-2">
                            <path d="M12 5l0 14"></path>
                            <path d="M5 12l14 0"></path>
                        </svg>
                        Add new
                    </a>
                </div>
            </div>
            <div class="mt-2 px-2">
                <table class="table">
                    <tbody>
                        @foreach (range(1, 10) as $i)
                            <tr>
                                <td data-label="Name">
                                    <div class="d-flex py-1 align-items-center">
                                        <span class="avatar avatar-2 me-2"
                                            style="background-image: url(./static/avatars/010m.jpg)"></span>
                                        <div class="flex-fill">
                                            <div class="font-weight-medium">Coffe Latte</div>
                                            <div class="text-secondary">18.000</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-end">
                                        <div class="mb-2">36.000</div>
                                        <a href="#" class="btn btn-1">
                                            Edit
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <footer class="bot-nav sticky-bottom pb-3 pt-2">
                <div class="d-flex justify-content-between my-2">
                    <h4 class="card-title mb-1">Total Harga:</h4>
                    <h4 class="card-title mb-1">Rp 360.000</h4>
                </div>
                <div class="d-flex">
                    <div class="col me-1">
                        <button class="btn btn-1 w-100">Batal</button>
                    </div>
                    <div class="col ms-1">
                        <button class="btn btn-blue w-100">Bayar</button>
                    </div>
                </div>
            </footer>
        </div>
    </aside>
@endsection
