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
        .card-hover { transition: transform .3s ease, box-shadow .3s ease; }
        .card-hover:hover { transform: translateY(-8px); box-shadow: 0 20px 40px rgba(255,60,60,.25); }
    </style>
</head>
<body class="font-body bg-black text-white antialiased">
    <header class="fixed top-0 inset-x-0 z-50 bg-black/70 backdrop-blur border-b border-red-600/30">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <div class="font-display font-black text-2xl tracking-widest text-red-500">JDM<span class="text-white">ZONE</span></div>
            <nav class="hidden md:flex gap-8 text-sm uppercase tracking-widest">
                <a href="#cars" class="hover:text-red-500 transition">Cars</a>
                <a href="#culture" class="hover:text-red-500 transition">Culture</a>
                <a href="#gallery" class="hover:text-red-500 transition">Gallery</a>
                <a href="#join" class="hover:text-red-500 transition">Join</a>
            </nav>
            <a href="#join" class="bg-red-600 hover:bg-red-700 px-5 py-2 rounded text-sm uppercase tracking-widest font-semibold transition">Join Club</a>
        </div>
    </header>

    <section class="hero-bg min-h-screen flex items-center justify-center relative overflow-hidden pt-20">
        <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(circle at 20% 30%, #ff3c3c 0%, transparent 40%), radial-gradient(circle at 80% 70%, #ff00ff 0%, transparent 40%);"></div>
        <div class="relative z-10 text-center px-6">
            <p class="text-red-500 uppercase tracking-[0.4em] text-sm mb-4">Japanese Domestic Market</p>
            <h1 class="font-display font-black text-6xl md:text-8xl lg:text-9xl glow mb-6">JDM</h1>
            <p class="text-xl md:text-2xl text-gray-300 max-w-2xl mx-auto mb-10">Legends born on the streets of Tokyo. Tuned, slammed, and ready to rip.</p>
            <div class="flex gap-4 justify-center flex-wrap">
                <a href="#cars" class="bg-red-600 hover:bg-red-700 px-8 py-4 rounded font-semibold uppercase tracking-widest transition">Explore Cars</a>
                <a href="#gallery" class="border border-white/40 hover:border-red-500 px-8 py-4 rounded font-semibold uppercase tracking-widest transition">View Gallery</a>
            </div>
        </div>
    </section>

    <section id="cars" class="max-w-7xl mx-auto px-6 py-24">
        <h2 class="font-display text-4xl md:text-5xl mb-4">Iconic <span class="text-red-500">Machines</span></h2>
        <p class="text-gray-400 mb-12 max-w-2xl">The cars that defined a generation. Built for the touge, perfected on the track.</p>
        <div class="grid md:grid-cols-3 gap-8">
            @php
            $cars = [
                ['name'=>'Nissan Skyline GT-R R34','tag'=>'Godzilla','desc'=>'RB26DETT twin-turbo inline-six. The ultimate JDM icon.'],
                ['name'=>'Toyota Supra MK4','tag'=>'2JZ Legend','desc'=>'The 2JZ-GTE powerhouse. 1000hp capable out of the box.'],
                ['name'=>'Mazda RX-7 FD','tag'=>'Rotary King','desc'=>'13B-REW twin-rotor. Lightweight, balanced, legendary.'],
                ['name'=>'Honda NSX','tag'=>'Everyday Supercar','desc'=>'VTEC mid-engine precision. Ayrton Senna approved.'],
                ['name'=>'Subaru Impreza WRX STI','tag'=>'Rally Beast','desc'=>'Boxer rumble. AWD grip. Born on the WRC stages.'],
                ['name'=>'Mitsubishi Lancer Evo IX','tag'=>'Rally Weapon','desc'=>'4G63 turbo. AWD dominance. The Evo legend.'],
            ];
            @endphp
            @foreach($cars as $car)
            <div class="card-hover bg-zinc-900 border border-zinc-800 rounded-xl p-6">
                <div class="text-red-500 text-xs uppercase tracking-widest mb-2">{{ $car['tag'] }}</div>
                <h3 class="font-display text-xl mb-3">{{ $car['name'] }}</h3>
                <p class="text-gray-400 text-sm">{{ $car['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </section>

    <section id="culture" class="bg-zinc-950 py-24">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="font-display text-4xl md:text-5xl mb-6">More than <span class="text-red-500">cars</span></h2>
                <p class="text-gray-300 mb-6 leading-relaxed">JDM isn't just a badge. It's a culture born in the mountains of Japan — touge battles, midnight meets, and the pursuit of the perfect line. It's the sound of a turbo spooling at 3am. It's the smell of burnt rubber and high-octane fuel.</p>
                <p class="text-gray-400 leading-relaxed">From Daikoku PA to the Wangan, from Initial D to real life — this is where passion lives.</p>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-red-600/10 border border-red-600/30 rounded-xl p-6 text-center">
                    <div class="font-display text-4xl text-red-500 mb-2">6</div>
                    <div class="text-sm text-gray-400 uppercase tracking-widest">Iconic Cars</div>
                </div>
                <div class="bg-red-600/10 border border-red-600/30 rounded-xl p-6 text-center">
                    <div class="font-display text-4xl text-red-500 mb-2">∞</div>
                    <div class="text-sm text-gray-400 uppercase tracking-widest">Passion</div>
                </div>
                <div class="bg-red-600/10 border border-red-600/30 rounded-xl p-6 text-center">
                    <div class="font-display text-4xl text-red-500 mb-2">JP</div>
                    <div class="text-sm text-gray-400 uppercase tracking-widest">Origin</div>
                </div>
                <div class="bg-red-600/10 border border-red-600/30 rounded-xl p-6 text-center">
                    <div class="font-display text-4xl text-red-500 mb-2">90s</div>
                    <div class="text-sm text-gray-400 uppercase tracking-widest">Golden Era</div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="max-w-7xl mx-auto px-6 py-24">
        <h2 class="font-display text-4xl md:text-5xl mb-12">Gallery</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @for($i=0;$i<8;$i++)
            <div class="aspect-square bg-gradient-to-br from-red-900/40 to-purple-900/40 rounded-xl border border-zinc-800 flex items-center justify-center text-gray-600 text-sm">
                Photo {{ $i+1 }}
            </div>
            @endfor
        </div>
    </section>

    <section id="join" class="bg-red-600 py-20 text-center">
        <h2 class="font-display text-4xl md:text-5xl mb-4">Join the <span class="text-black">Movement</span></h2>
        <p class="text-red-100 mb-8">Be part of the JDM community. Share builds, stories, and meets.</p>
        <a href="#" class="inline-block bg-black text-white px-10 py-4 rounded font-semibold uppercase tracking-widest hover:bg-zinc-900 transition">Sign Up Free</a>
    </section>

    <footer class="border-t border-zinc-800 py-8 text-center text-gray-500 text-sm">
        © {{ date('Y') }} JDM Zone. Built with passion. All rights reserved.
    </footer>
</body>
</html>
