<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JDM Zone — Japanese Domestic Market</title>
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
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-center">
            <div class="font-display font-black text-2xl tracking-widest text-red-500">JDM<span class="text-white">ZONE</span></div>
        </div>
    </header>

    <section class="hero-bg min-h-screen flex items-center justify-center relative overflow-hidden pt-20">
        <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(circle at 20% 30%, #ff3c3c 0%, transparent 40%), radial-gradient(circle at 80% 70%, #ff00ff 0%, transparent 40%);"></div>
        <div class="relative z-10 text-center px-6">
            <p class="text-red-500 uppercase tracking-[0.4em] text-sm mb-4">Japanese Domestic Market</p>
            <h1 class="font-display font-black text-6xl md:text-8xl lg:text-9xl glow mb-6">JDM</h1>
            <p class="text-xl md:text-2xl text-gray-300 max-w-2xl mx-auto">Legends born on the streets of Tokyo. Tuned, slammed, and ready to rip.</p>
        </div>
    </section>

    <footer class="border-t border-zinc-800 py-8 text-center text-gray-500 text-sm">
        © {{ date('Y') }} iibgroup8
    </footer>
</body>
</html>

