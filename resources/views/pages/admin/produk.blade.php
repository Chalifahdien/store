@extends('layouts.admin')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Overview
                    </div>
                    <h2 class="page-title">
                        Combo layout
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <span class="d-none d-sm-inline">
                            <a href="#" class="btn btn-1">
                                New view
                            </a>
                        </span>
                        <a href="#" class="btn btn-outline-primary btn-5 d-none d-sm-inline-block"
                            data-bs-toggle="modal" data-bs-target="#modal-report">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-2">
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                            <span class="input-icon-addon">
                                <div class="spinner-border spinner-border-sm" role="status">
                                </div>
                            </span>
                            Create new report
                        </a>
                        <a href="#" class="btn btn-primary btn-6 d-sm-none btn-icon" data-bs-toggle="modal"
                            data-bs-target="#modal-report" aria-label="Create new report">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-2">
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                        </a>
                    </div>
                    <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">New report</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" name="example-text-input"
                                            placeholder="Your report name">
                                    </div>
                                    <label class="form-label">Report type</label>
                                    <div class="form-selectgroup-boxes row mb-3">
                                        <div class="col-lg-6">
                                            <label class="form-selectgroup-item">
                                                <input type="radio" name="report-type" value="1"
                                                    class="form-selectgroup-input" checked>
                                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                                                    <span class="me-3">
                                                        <span class="form-selectgroup-check"></span>
                                                    </span>
                                                    <span class="form-selectgroup-label-content">
                                                        <span class="form-selectgroup-title strong mb-1">Simple</span>
                                                        <span class="d-block text-secondary">Provide only basic
                                                            data needed for the report</span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="form-selectgroup-item">
                                                <input type="radio" name="report-type" value="1"
                                                    class="form-selectgroup-input">
                                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                                                    <span class="me-3">
                                                        <span class="form-selectgroup-check"></span>
                                                    </span>
                                                    <span class="form-selectgroup-label-content">
                                                        <span class="form-selectgroup-title strong mb-1">Advanced</span>
                                                        <span class="d-block text-secondary">Insert charts and
                                                            additional advanced analyses to be inserted in the
                                                            report</span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="mb-3">
                                                <label class="form-label">Report url</label>
                                                <div class="input-group input-group-flat">
                                                    <span class="input-group-text">
                                                        https://tabler.io/reports/
                                                    </span>
                                                    <input type="text" class="form-control ps-0" value="report-01"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Visibility</label>
                                                <select class="form-select">
                                                    <option value="1" selected>Private</option>
                                                    <option value="2">Public</option>
                                                    <option value="3">Hidden</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Client name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Reporting period</label>
                                                <input type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div>
                                                <label class="form-label">Additional information</label>
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#" class="btn btn-link link-secondary btn-3" data-bs-dismiss="modal">
                                        Cancel
                                    </a>
                                    <a href="#" class="btn btn-primary btn-5 ms-auto" data-bs-dismiss="modal">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon icon-2">
                                            <path d="M12 5l0 14" />
                                            <path d="M5 12l14 0" />
                                        </svg>
                                        Create new report
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs bg-transparent" data-bs-toggle="tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#tabs-produk" class="nav-link active" data-bs-toggle="tab" aria-selected="false"
                                role="tab" tabindex="-1">Produk</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#tabs-kategori" class="nav-link" data-bs-toggle="tab" aria-selected="true"
                                role="tab">Kategori</a>
                        </li>
                        <li class="nav-item ms-auto" role="presentation">
                            <a href="#tabs-settings-1" class="nav-link" title="Settings" data-bs-toggle="tab"
                                aria-selected="false" tabindex="-1" role="tab">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/settings -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
                                    <path
                                        d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z">
                                    </path>
                                    <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body p-0">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tabs-produk" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table card-table table-vcenter text-nowrap datatable">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <td colspan="5">
                                                <div class="input-icon w-100">
                                                    <input type="text" id="searchInput" value=""
                                                        class="form-control" placeholder="Search…">
                                                    <span class="input-icon-addon">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/search -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                                            <path d="M21 21l-6 -6"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody id="tableBody">
                                        {{-- @foreach ($users as $data)
                                            <tr>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ $data->email }}</td>
                                                <td>{{ ucfirst($data->role) }}</td>
                                                <td class="text-end">
                                                    <div class="dropdown">
                                                        <button class="btn dropdown-toggle align-text-top"
                                                            data-bs-toggle="dropdown" aria-expanded="true">
                                                            Aksi
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#edit{{ $data->id }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-edit me-2">
                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                        fill="none" />
                                                                    <path
                                                                        d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                                    <path
                                                                        d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                                    <path d="M16 5l3 3" />
                                                                </svg>
                                                                Edit
                                                            </a>
                                                            <a class="dropdown-item" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#reset{{ $data->id }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-lock me-2">
                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                        fill="none" />
                                                                    <path
                                                                        d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                                                                    <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                                                                    <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                                                                </svg>
                                                                Reset
                                                            </a>
                                                            <a class="dropdown-item text-red" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#hapus{{ $data->id }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-trash me-2">
                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                        fill="none" />
                                                                    <path d="M4 7l16 0" />
                                                                    <path d="M10 11l0 6" />
                                                                    <path d="M14 11l0 6" />
                                                                    <path
                                                                        d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                                </svg>
                                                                Hapus
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach --}}
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer pb-0">
                                <div class="d-flex justify-content-center" id="paginationContainer" hidden>
                                    <ul class="pagination" id="paginationWrapper">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                                <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-left -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-1">
                                                    <path d="M15 6l-6 6l6 6"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-right -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-1">
                                                    <path d="M9 6l6 6l-6 6"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-kategori" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table card-table table-vcenter text-nowrap datatable">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <td colspan="5">
                                                <div class="input-icon w-100">
                                                    <input type="text" id="searchInput" value=""
                                                        class="form-control" placeholder="Search…">
                                                    <span class="input-icon-addon">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/search -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon icon-1">
                                                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                                            <path d="M21 21l-6 -6"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody id="tableBody">
                                        {{-- @foreach ($users as $data)
                                            <tr>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ $data->email }}</td>
                                                <td>{{ ucfirst($data->role) }}</td>
                                                <td class="text-end">
                                                    <div class="dropdown">
                                                        <button class="btn dropdown-toggle align-text-top"
                                                            data-bs-toggle="dropdown" aria-expanded="true">
                                                            Aksi
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#edit{{ $data->id }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-edit me-2">
                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                        fill="none" />
                                                                    <path
                                                                        d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                                    <path
                                                                        d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                                    <path d="M16 5l3 3" />
                                                                </svg>
                                                                Edit
                                                            </a>
                                                            <a class="dropdown-item" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#reset{{ $data->id }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-lock me-2">
                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                        fill="none" />
                                                                    <path
                                                                        d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                                                                    <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                                                                    <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                                                                </svg>
                                                                Reset
                                                            </a>
                                                            <a class="dropdown-item text-red" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#hapus{{ $data->id }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-trash me-2">
                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                        fill="none" />
                                                                    <path d="M4 7l16 0" />
                                                                    <path d="M10 11l0 6" />
                                                                    <path d="M14 11l0 6" />
                                                                    <path
                                                                        d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                                </svg>
                                                                Hapus
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach --}}
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer pb-0">
                                <div class="d-flex justify-content-center" id="paginationContainer" hidden>
                                    <ul class="pagination" id="paginationWrapper">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                                <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-left -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-1">
                                                    <path d="M15 6l-6 6l6 6"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-right -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-1">
                                                    <path d="M9 6l6 6l-6 6"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
