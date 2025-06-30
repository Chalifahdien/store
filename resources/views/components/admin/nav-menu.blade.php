<ul class="navbar-nav pt-lg-3 px-2 dropdown-menu">
    <a class="nav-link mb-1 {{ Request::is('dashboard') ? 'aktif' : '' }}" href="/dashboard">
        <!-- Download SVG icon from http://tabler.io/icons/icon/home -->
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
        </svg>
        <!-- </span> -->
        <span class="nav-link-title ms-2">
            Dashboard
        </span>
    </a>
    <a class="nav-link mb-1 {{ Request::is('transaksi') ? 'aktif' : '' }}" href="/transaksi">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="icon">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path
                d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z" />
            <path d="M9 11v-5a3 3 0 0 1 6 0v5" />
        </svg>
        <!-- </span> -->
        <span class="nav-link-title ms-2">
            Transaksi
        </span>
    </a>
    <a class="nav-link mb-1 {{ Request::is('produk') ? 'aktif' : '' }}" href="/produk">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" />
            <path d="M12 12l8 -4.5" />
            <path d="M12 12l0 9" />
            <path d="M12 12l-8 -4.5" />
        </svg>
        <!-- </span> -->
        <span class="nav-link-title ms-2">
            Produk
        </span>
    </a>
    <a class="nav-link mb-1 {{ Request::is('log') ? 'aktif' : '' }}" href="/log">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M12 21l-8 -4.5v-9l8 -4.5l8 4.5v4.5" />
            <path d="M12 12l8 -4.5" />
            <path d="M12 12v9" />
            <path d="M12 12l-8 -4.5" />
            <path d="M15 18h7" />
            <path d="M19 15l3 3l-3 3" />
        </svg>
        <!-- </span> -->
        <span class="nav-link-title ms-2">
            Log Stok
        </span>
    </a>
    <a class="nav-link mb-1 {{ Request::is('users') ? 'aktif' : '' }}" href="/users">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
        </svg>
        <!-- </span> -->
        <span class="nav-link-title ms-2">
            Users
        </span>
    </a>
    <a class="nav-link mb-1 {{ Request::is('') ? 'aktif' : '' }}" href="/">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M3 21l18 0" />
            <path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4" />
            <path d="M5 21l0 -10.15" />
            <path d="M19 21l0 -10.15" />
            <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
        </svg>
        <!-- </span> -->
        <span class="nav-link-title ms-2">
            Kasir
        </span>
    </a>
</ul>
