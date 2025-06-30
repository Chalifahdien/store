@extends('layouts.admin')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Store
                    </div>
                    <h2 class="page-title">
                        Users
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="#" class="btn btn-primary btn-5" data-bs-toggle="modal" data-bs-target="#tambah">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-2">
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                            Tambah User
                        </a>
                        <a href="#" class="btn btn-primary btn-6 d-sm-none btn-icon" data-bs-toggle="modal"
                            data-bs-target="#tambah" aria-label="Create new report">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-2">
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                        </a>
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
                    <h3 class="card-title">Users</h3>
                </div>
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
                                        <input type="text" id="searchInput" value="" class="form-control"
                                            placeholder="Search…">
                                        <span class="input-icon-addon">
                                            <!-- Download SVG icon from http://tabler.io/icons/icon/search -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
                                                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                                <path d="M21 21l-6 -6"></path>
                                            </svg>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                        </thead>
                        <tbody id="tableBody">
                            @foreach ($users as $data)
                                <tr>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ ucfirst($data->role) }}</td>
                                    <td class="text-end">
                                        <div class="dropdown">
                                            <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown"
                                                aria-expanded="true">
                                                Aksi
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#edit{{ $data->id }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-edit me-2">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                        <path
                                                            d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                        <path d="M16 5l3 3" />
                                                    </svg>
                                                    Edit
                                                </a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#reset{{ $data->id }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-lock me-2">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                                                        <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                                                        <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                                                    </svg>
                                                    Reset
                                                </a>
                                                <a class="dropdown-item text-red" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#hapus{{ $data->id }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-trash me-2">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M4 7l16 0" />
                                                        <path d="M10 11l0 6" />
                                                        <path d="M14 11l0 6" />
                                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                    </svg>
                                                    Hapus
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer pb-0">
                    <div class="d-flex justify-content-center" id="paginationContainer"  hidden>
                        <ul class="pagination" id="paginationWrapper">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/chevron-left -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
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
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
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

    {{-- Modal Tambah --}}
    <div class="modal modal-blur fade" id="tambah" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('user.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="d-flex justify-content-start" for="editNIP">Nama</label>
                                    <input class="form-control" name="name" type="text" placeholder="Masukan Nama"
                                        required>
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="d-flex justify-content-start" for="editNIDN">Email</label>
                                    <input class="form-control" name="email" type="email"
                                        placeholder="Masukan Email" required>
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="d-flex justify-content-start" for="tambahJurusan">Role</label>
                                    <select name="role" class="form-control" required>
                                        <option value="">Pilih Role</option>
                                        <option value="kasir">Kasir</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                    @error('role')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Modal Edit --}}
    @foreach ($users as $data)
        <div class="modal modal-blur fade" id="edit{{ $data->id }}" tabindex="-1" style="display: none;"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('user.update', $data->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="d-flex justify-content-start" for="editNIP">Nama</label>
                                        <input class="form-control" name="name" type="text"
                                            placeholder="Masukan Nama" value="{{ $data->name }}" required>
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="d-flex justify-content-start" for="editNIDN">Email</label>
                                        <input class="form-control" name="email" type="email"
                                            placeholder="Masukan Email" value="{{ $data->email }}" required>
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="d-flex justify-content-start" for="tambahJurusan">Role</label>
                                        <select name="role" class="form-control" required>
                                            <option value="">Pilih Role</option>
                                            <option value="kasir" {{ $data->role == 'kasir' ? 'selected' : '' }}>
                                                Kasir
                                            </option>
                                            <option value="admin" {{ $data->role == 'admin' ? 'selected' : '' }}>
                                                Admin
                                            </option>
                                        </select>
                                        @error('role')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    {{-- Model Reset Password --}}
    @foreach ($users as $data)
        <div class="modal modal-blur fade" id="reset{{ $data->id }}" tabindex="-1" role="dialog"
            aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body text-center py-4">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/alert-triangle -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon mb-2 text-warning icon-lg">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 21h-8a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2h10a2 2 0 0 1 1.734 1.002" />
                            <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                            <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                            <path d="M19 16v3" />
                            <path d="M19 22v.01" />
                        </svg>
                        <h3>Apakah Kamu Yakin?</h3>
                        <div class="text-secondary">
                            Apakah Kamu Ingin Reset Password Akun {{ $data->name }}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="w-100">
                            <div class="row">
                                <div class="col">
                                    <a href="#" class="btn btn-3 w-100" data-bs-dismiss="modal">
                                        Batal
                                    </a>
                                </div>
                                <div class="col">
                                    <form action="{{ route('user.reset', $data->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-warning btn-4 w-100"
                                            data-bs-dismiss="modal">
                                            Reset
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    {{-- Model Hapus --}}
    @foreach ($users as $data)
        <div class="modal modal-blur fade" id="hapus{{ $data->id }}" tabindex="-1" role="dialog"
            aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body text-center py-4">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/alert-triangle -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon mb-2 text-danger icon-lg">
                            <path d="M12 9v4"></path>
                            <path
                                d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z">
                            </path>
                            <path d="M12 16h.01"></path>
                        </svg>
                        <h3>Apakah kamu yakin?</h3>
                        <div class="text-secondary">Apakah kamu yakin menghapus user {{ $data->name }}?
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="w-100">
                            <div class="row">
                                <div class="col">
                                    <a href="#" class="btn btn-3 w-100" data-bs-dismiss="modal">
                                        Batal
                                    </a>
                                </div>
                                <div class="col">
                                    <form action="{{ route('user.destroy', $data->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-4 w-100" type="submit">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const tableBody = document.getElementById('tableBody');
            const rows = Array.from(tableBody.getElementsByTagName('tr'));
            const paginationWrapper = document.getElementById('paginationWrapper');
            const rowsPerPage = 10;
            let currentPage = 1;

            function filterRows(query) {
                const lowerQuery = query.toLowerCase();
                return rows.filter(row => {
                    return Array.from(row.cells).some(cell =>
                        cell.textContent.toLowerCase().includes(lowerQuery)
                    );
                });
            }

            function renderTable(filteredRows) {
                const start = (currentPage - 1) * rowsPerPage;
                const end = start + rowsPerPage;
                tableBody.innerHTML = '';
                filteredRows.slice(start, end).forEach(row => tableBody.appendChild(row));
                renderPagination(filteredRows.length);
            }

            function renderPagination(totalRows) {
                const pageCount = Math.ceil(totalRows / rowsPerPage);
                const paginationWrapper = document.getElementById("paginationWrapper");
                const paginationContainer = document.getElementById("paginationContainer");

                // Sembunyikan pagination jika hanya 1 halaman
                if (pageCount <= 1) {
                    paginationWrapper.innerHTML = '';
                    paginationContainer.hidden = true;
                    return;
                } else {
                    paginationContainer.hidden = false;
                }

                const maxVisiblePages = 5;
                let startPage = Math.max(1, currentPage - Math.floor(maxVisiblePages / 2));
                let endPage = startPage + maxVisiblePages - 1;

                if (endPage > pageCount) {
                    endPage = pageCount;
                    startPage = Math.max(1, endPage - maxVisiblePages + 1);
                }

                paginationWrapper.innerHTML = '';

                // Prev Button
                const prev = document.createElement('li');
                prev.className = `page-item ${currentPage === 1 ? 'disabled' : ''}`;
                prev.innerHTML = `<a class="page-link" href="#">‹</a>`;
                prev.onclick = e => {
                    e.preventDefault();
                    if (currentPage > 1) {
                        currentPage--;
                        renderTable(filterRows(searchInput.value));
                    }
                };
                paginationWrapper.appendChild(prev);

                // Page Numbers
                for (let i = startPage; i <= endPage; i++) {
                    const li = document.createElement('li');
                    li.className = `page-item ${i === currentPage ? 'active' : ''}`;
                    li.innerHTML = `<a class="page-link" href="#">${i}</a>`;
                    li.onclick = e => {
                        e.preventDefault();
                        currentPage = i;
                        renderTable(filterRows(searchInput.value));
                    };
                    paginationWrapper.appendChild(li);
                }

                // Next Button
                const next = document.createElement('li');
                next.className = `page-item ${currentPage === pageCount ? 'disabled' : ''}`;
                next.innerHTML = `<a class="page-link" href="#">›</a>`;
                next.onclick = e => {
                    e.preventDefault();
                    if (currentPage < pageCount) {
                        currentPage++;
                        renderTable(filterRows(searchInput.value));
                    }
                };
                paginationWrapper.appendChild(next);
            }


            searchInput.addEventListener('input', () => {
                currentPage = 1;
                const filtered = filterRows(searchInput.value);
                renderTable(filtered);
            });

            renderTable(rows);
        });
    </script>
@endsection
