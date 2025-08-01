<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>STORE</title>
    <!-- CSS files -->
    @yield('css')
    <style>
        @import url("https://rsms.me/inter/inter.css");
    </style>
</head>

<body class="{{ Request::is('login*') ? 'd-flex flex-column' : '' }}">
    <script src="{{ asset('dist/js/demo-theme.min.js') }}"></script>
    @if (Request::is('login'))
        <div class="row g-0 flex-fill">
            <div class="col-12 border-top-wide border-primary d-flex flex-column justify-content-center">
                <div class="container container-tight my-5 px5">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center mb-0 mt-3">
                        <div class="d-flex align-items-center justify-content-center">
                            {{-- <div>
                            <img class="me-2" src="{{ asset('logo.png') }}" style="width: 50px" alt="">
                        </div> --}}
                            <div>
                                <h2 class="mb-0">STORE</h2>
                            </div>
                        </div>
                    </div>
                    <div class="px-2">
                        <div class="card-body">
                            <h2 class="h3 text-center mb-3">
                                Masuk Ke Akun Anda
                            </h2>
                            <form action="/login" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Masukan Email" required>
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    @error('password')
                                        <small class="text-danger">Email atau Password salah</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password"
                                        placeholder="Masukan Password" required>
                                </div>
                                <div class="form-footer mb-3">
                                    <button type="submit" class="btn btn-primary w-100">Masuk</button>
                                </div>
                            </form>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        @yield('page')
    @endif
    <script src="{{ asset('dist/js/tabler.min.js') }}" defer></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toast = document.getElementById("toast-simple");

            if (toast) {
                setTimeout(() => {
                    toast.classList.remove("show");
                    toast.classList.add("hide");
                }, 3000); // 5 detik
            }
        });
    </script>
</body>

</html>
