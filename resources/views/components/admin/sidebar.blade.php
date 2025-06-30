<aside class="navbar navbar-vertical navbar-expand-lg z-1">
{{-- <aside class="navbar navbar-vertical navbar-transparent navbar-expand-lg z-1"> --}}
<div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu"
            aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="d-flex align-items-center justify-content-between" style="height: 56px">
            @include('components.icon')
        </div>
        <div class="navbar-nav flex-row d-lg-none">
            @include('components.profil-menu')
        </div>
        <div class="collapse navbar-collapse" id="sidebar-menu">
            @include('components.admin.nav-menu')
        </div>
    </div>
</aside>
