```php
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'JDM Zone — Japanese Domestic Market')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Inter:wght@300;400;600&display=swap');
        .font-display { font-family: 'Orbitron', sans-serif; }
        .font-body { font-family: 'Inter', sans-serif; }
        .hero-bg {
            background: linear-gradient(135deg, #0a0a0a 0%, #1a0a2e 50%, #0a0a0a 100%);
        }
        .glow { text-shadow: 0 0 20px rgba(255, 60, 60, 0.6), 0 0 40px rgba(255, 60, 60, 0.3); }
    </style>
</head>
<body class="font-body bg-black text-white antialiased">
    <header class="fixed top-0 inset-x-0 z-50 bg-black/70 backdrop-blur border-b border-red-600/30">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="{{ url('/') }}" class="font-display font-black text-2xl tracking-widest text-red-500">JDM<span class="text-white">ZONE</span></a>

            <nav class="flex items-center gap-6 text-sm uppercase tracking-widest">
                <a href="{{ url('/') }}" class="{{ request()->routeIs('home') ? 'text-red-500' : 'hover:text-red-500' }} transition">Home</a>

                <a href="{{ url('/order') }}" class="{{ request()->routeIs('orders.*') ? 'text-red-500' : 'hover:text-red-500' }} transition">Order</a>

                <a href="{{ url('/culture') }}" class="{{ request()->routeIs('culture') ? 'text-red-500' : 'hover:text-red-500' }} transition">Culture</a>

                <a href="{{ url('/parts') }}" class="{{ request()->routeIs('parts') ? 'text-red-500' : 'hover:text-red-500' }} transition">Parts</a>

                <a href="{{ url('/gallery') }}" class="{{ request()->routeIs('gallery') ? 'text-red-500' : 'hover:text-red-500' }} transition">Gallery</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="border-t border-zinc-800 py-8 text-center text-gray-500 text-sm">
        © {{ date('Y') }} iibgroup8
    </footer>

    @stack('scripts')
</body>
</html>
```