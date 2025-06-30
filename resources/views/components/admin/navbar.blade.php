    <header class="navbar navbar-expand-lg d-none d-lg-flex d-print-none sticky-top">
        <div class="container-fluid">
            @include('components.icon')
            <div class="navbar-nav flex-row order-md-last">
                <div class="nav-item me-3" id="navbar-menu">
                    <form action="./" method="get" autocomplete="off" novalidate="">
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <!-- Download SVG icon from http://tabler.io/icons/icon/search -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
                                    <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                    <path d="M21 21l-6 -6"></path>
                                </svg>
                            </span>
                            <input type="text" value="" class="form-control" placeholder="Search…"
                                aria-label="Search in website">
                        </div>
                    </form>
                </div>
                @include('components.profil-menu')
            </div>
        </div>
    </header>
