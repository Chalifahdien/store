function initAllScripts() {
    // Misal inisialisasi ulang Tabler (kalau Tabler ada fungsi init)
    if (typeof Tabler !== 'undefined' && typeof Tabler.init === 'function') {
        Tabler.init();
    }

    // Inisialisasi ulang script lain yang kamu pakai (demo-theme, dll)
    if (typeof DemoTheme !== 'undefined' && typeof DemoTheme.init === 'function') {
        DemoTheme.init();
    }

    // Jika tidak ada fungsi init, bisa reload script manual seperti ini:
    // (Hati-hati, ini bisa berpotensi duplikasi event listener)
    // reloadScript("{{ asset('dist/js/tabler.min.js') }}");
    // reloadScript("{{ asset('dist/js/demo-theme.min.js') }}");
}

function reloadScript(src) {
    const oldScript = document.querySelector(`script[src="${src}"]`);
    if (oldScript) oldScript.remove();
    const script = document.createElement('script');
    script.src = src;
    script.defer = true;
    document.body.appendChild(script);
}
