<div class="nav-item dropdown">
    <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
        <div class="avatar text-white" style="background-color: black">
            {{ Str::substr(auth()->user()->name, 0, 1) }}
        </div>
    </a>
    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
        <a href="#" class="dropdown-item">{{ Auth::user()->name }}</a>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="dropdown-item mt-1 mb-1">
                Logout
            </button>
        </form>
        <div class="d-flex justify-content-around">
            <a href="?theme=light" class="nav-link w-100 hide-theme-light me-1" title="Enable light mode"
                data-bs-toggle="tooltip" data-bs-placement="bottom">
                <!-- Download SVG icon from http://tabler.io/icons/icon/sun -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon">
                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                    <path
                        d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                </svg>
            </a>
            <a href="?theme=dark" class="nav-link w-100 hide-theme-dark" title="Enable dark mode"
                data-bs-toggle="tooltip" data-bs-placement="bottom">
                <!-- Download SVG icon from http://tabler.io/icons/icon/moon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon">
                    <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                </svg>
            </a>
        </div>
    </div>
</div>
