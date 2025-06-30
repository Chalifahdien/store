@extends('layouts.app')

@section('css')
    <link href="{{ asset('dist/css/kasir.css') }}" rel="stylesheet" />
    <style>
        aside.navbar {
            overflow: auto;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        aside.navbar::-webkit-scrollbar {
            display: none;
        }
    </style>
@endsection

@section('page')
    <div class="page">
        @include('components.alert.error')
        @include('components.alert.success')
        @include('components.kasir.navbar')
        @yield('content')
        @yield('aside')
        <div class="modal modal-blur fade" id="modal-success" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body text-center py-4">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/circle-check -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon mb-2 text-green icon-lg">
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M9 12l2 2l4 -4" />
                        </svg>
                        <h3>Payment succedeed</h3>
                        <div class="text-secondary">Your payment of $290 has been successfully submitted.
                            Your invoice has been sent to support@tabler.io.</div>
                    </div>
                    <div class="modal-footer">
                        <div class="w-100">
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn btn-link link-secondary w-100" data-bs-dismiss="modal">
                                        Batal
                                    </button>
                                </div>
                                <div class="col">
                                    <a href="#" class="btn btn-success btn-4 w-100" data-bs-dismiss="modal">
                                        Tambah
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
