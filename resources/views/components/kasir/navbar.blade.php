<!-- Navbar -->
<div class="sticky-top">
    <header class="navbar navbar-expand sticky-top d-print-none">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
                aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-flex align-items-center">
                @include('components.icon')
                <form action="./" method="get" class="ms-3">
                    <div class="input-icon">
                        <span class="input-icon-addon">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/search -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-1">
                                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                <path d="M21 21l-6 -6"></path>
                            </svg>
                        </span>
                        <input type="text" value="" class="form-control" placeholder="Search…"
                            aria-label="Search in website">
                    </div>
                </form>
            </div>
            <div class="navbar-nav flex-row order-md-last">
                @include('components.profil-menu')
            </div>
        </div>
    </header>
</div>
