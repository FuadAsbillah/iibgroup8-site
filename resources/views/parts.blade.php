@extends('layouts.app')

@section('title', 'Parts — JDM Zone')

@section('content')
    <!-- Hero -->
    <section class="relative min-h-[70vh] flex items-center justify-center overflow-hidden pt-20">
        <img src="{{ asset('images/Heroimage.jpg') }}" alt="Automotive parts" class="absolute inset-0 w-full h-full object-cover opacity-40">
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black"></div>
        <div class="relative z-10 text-center px-6 max-w-4xl">
            <p class="text-red-500 uppercase tracking-[0.4em] text-sm mb-4">Aftermarket & Performance</p>
            <h1 class="font-display font-black text-6xl md:text-8xl lg:text-9xl glow mb-6 tracking-wider">UPGRADE YOUR BUILD.</h1>
            <p class="text-xl md:text-2xl text-gray-300 max-w-2xl mx-auto mb-10">Discover performance parts and aftermarket upgrades for your JDM machine.</p>
            <a href="#categories" class="inline-block bg-red-600 hover:bg-red-700 px-8 py-4 rounded font-semibold uppercase tracking-widest transition">Explore Parts</a>
        </div>
    </section>

    <!-- Categories -->
    <section id="categories" class="py-24 px-6">
        <div class="max-w-7xl mx-auto">
            <h2 class="font-display font-bold text-3xl md:text-4xl text-red-500 mb-12 text-center">PARTS CATEGORIES</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                $cats = [
                    ['name'=>'Engine & Performance','desc'=>'Turbochargers, air intakes and exhaust systems.','img'=>asset('images/Engine.jpg')],
                    ['name'=>'Wheels & Tyres','desc'=>'Aftermarket wheels and performance tyres.','img'=>asset('images/RIMS.jpg')],
                    ['name'=>'Suspension','desc'=>'Coilovers and lowering springs.','img'=>asset('images/suspension.jpg')],
                    ['name'=>'Exterior','desc'=>'Body kits, spoilers and diffusers.','img'=>asset('images/bodykits.jpg')],
                    ['name'=>'Interior','desc'=>'Racing seats, steering wheels and gear knobs.','img'=>asset('images/interior.jpg')],
                ];
                @endphp
                @foreach($cats as $c)
                <div class="bg-black border border-zinc-800 rounded-lg overflow-hidden hover:border-red-600/50 transition group">
                    <img src="{{ $c['img'] }}" alt="{{ $c['name'] }}" class="w-full h-48 object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    <div class="p-5">
                        <h3 class="font-display font-bold text-lg mb-2">{{ $c['name'] }}</h3>
                        <p class="text-gray-400 text-sm">{{ $c['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-24 px-6 bg-zinc-950">
        <div class="max-w-7xl mx-auto">
            <h2 class="font-display font-bold text-3xl md:text-4xl text-red-500 mb-12 text-center">FEATURED PRODUCTS</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                $products = [
                    ['name'=>'Performance Turbocharger','cat'=>'Engine & Performance','desc'=>'Boost your engine output with a high-flow turbocharger.','price'=>'BND 850','img'=>asset('images/Engine.jpg'),'detail'=>'High-flow turbocharger designed for increased boost and faster spool. Includes mounting hardware.'],
                    ['name'=>'Aftermarket Alloy Wheels','cat'=>'Wheels & Tyres','desc'=>'Lightweight forged wheels for better handling.','price'=>'BND 650','img'=>asset('images/RIMS.jpg'),'detail'=>'Forged alloy wheels, lightweight and strong, available in multiple finishes.'],
                    ['name'=>'Adjustable Coilovers','cat'=>'Suspension','desc'=>'Tune ride height and damping for track or street.','price'=>'BND 720','img'=>asset('images/suspension.jpg'),'detail'=>'Full adjustable coilovers with 32-way damping and camber plates.'],
                    ['name'=>'Front Bumper Body Kit','cat'=>'Exterior','desc'=>'Aggressive front bumper with integrated splitter.','price'=>'BND 480','img'=>asset('images/frontbumper.jpg'),'detail'=>'FRP front bumper with splitter, bolt-on fitment.'],
                    ['name'=>'Performance Exhaust System','cat'=>'Engine & Performance','desc'=>'Stainless steel exhaust for sound and flow.','price'=>'BND 550','img'=>asset('images/exhaust.jpg'),'detail'=>'Cat-back stainless exhaust, improved flow and deep tone.'],
                    ['name'=>'Racing Bucket Seat','cat'=>'Interior','desc'=>'Lightweight FIA-style bucket seat.','price'=>'BND 390','img'=>asset('images/bucketsseat.jpe'),'detail'=>'Fiberglass shell bucket seat with harness slots.'],
                ];
                @endphp
                @foreach($products as $i => $p)
                <div class="bg-black border border-zinc-800 rounded-lg overflow-hidden hover:border-red-600/50 transition flex flex-col">
                    <img src="{{ $p['img'] }}" alt="{{ $p['name'] }}" class="w-full h-44 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="p-5 flex flex-col flex-1">
                        <p class="text-xs uppercase tracking-widest text-red-500 mb-1">{{ $p['cat'] }}</p>
                        <h3 class="font-display font-bold text-lg mb-2">{{ $p['name'] }}</h3>
                        <p class="text-gray-400 text-sm mb-4 flex-1">{{ $p['desc'] }}</p>
                        <div class="flex items-center justify-between">
                            <span class="font-display font-bold text-2xl text-red-500">{{ $p['price'] }}</span>
                            <button data-idx="{{ $i }}" class="view-detail bg-red-600 hover:bg-red-700 px-4 py-2 rounded text-sm font-semibold uppercase tracking-widest transition hover:shadow-lg hover:shadow-red-600/30">View Details</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/80 px-6">
        <div class="bg-zinc-900 border border-zinc-800 rounded-lg max-w-lg w-full p-6 relative">
            <button id="modal-close" class="absolute top-3 right-3 text-gray-400 hover:text-white text-2xl">&times;</button>
            <h3 id="modal-title" class="font-display font-bold text-2xl text-red-500 mb-2"></h3>
            <p id="modal-cat" class="text-xs uppercase tracking-widest text-gray-500 mb-4"></p>
            <p id="modal-desc" class="text-gray-300 mb-4"></p>
            <p id="modal-price" class="font-display font-bold text-2xl text-red-500"></p>
        </div>
    </div>

    @push('scripts')
    <script>
        const products = @json($products);
        const modal = document.getElementById('modal');
        const closeBtn = document.getElementById('modal-close');
        document.querySelectorAll('.view-detail').forEach(btn => {
            btn.addEventListener('click', () => {
                const p = products[btn.dataset.idx];
                document.getElementById('modal-title').textContent = p.name;
                document.getElementById('modal-cat').textContent = p.cat;
                document.getElementById('modal-desc').textContent = p.detail;
                document.getElementById('modal-price').textContent = p.price;
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            });
        });
        closeBtn.addEventListener('click', () => { modal.classList.add('hidden'); modal.classList.remove('flex'); });
        modal.addEventListener('click', e => { if (e.target === modal) { modal.classList.add('hidden'); modal.classList.remove('flex'); } });
    </script>
    @endpush
@endsection
