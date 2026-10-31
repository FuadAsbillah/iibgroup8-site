@extends('layouts.app')

@section('title', 'JDM Culture — JDM Zone')

@section('content')
    <!-- Hero -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden pt-20">
        <img src="{{ asset('images/' . rawurlencode('main culture page.jpg')) }}" alt="Japanese sports car at night" class="absolute inset-0 w-full h-full object-cover opacity-40">
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black"></div>
        <div class="relative z-10 text-center px-6 max-w-4xl">
            <p class="text-red-500 uppercase tracking-[0.4em] text-sm mb-4">Japanese Domestic Market</p>
            <h1 class="font-display font-black text-5xl md:text-7xl lg:text-8xl glow mb-6">THE CULTURE BEHIND JDM</h1>
            <p class="text-xl md:text-2xl text-gray-300 max-w-2xl mx-auto mb-10">More than cars. A culture built on passion, performance and individuality.</p>
            <a href="#what-is-jdm" class="inline-block bg-red-600 hover:bg-red-700 px-8 py-4 rounded font-semibold uppercase tracking-widest transition">Explore the Culture</a>
        </div>
    </section>

    <!-- What is JDM -->
    <section id="what-is-jdm" class="py-24 px-6">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="font-display font-bold text-3xl md:text-4xl text-red-500 mb-6">WHAT IS JDM?</h2>
                <p class="text-gray-300 leading-relaxed mb-4">JDM stands for Japanese Domestic Market — vehicles and parts originally built and sold in Japan. These cars were engineered for Japan's strict regulations and driving conditions, often featuring higher-spec engines and unique trims not exported elsewhere.</p>
                <p class="text-gray-300 leading-relaxed">From the 1980s onward, Japanese manufacturers pushed performance, reliability and innovation. Enthusiasts worldwide embraced these machines, turning them into icons of tuning, motorsport and street culture.</p>
            </div>
            <img src="{{ asset('images/' . rawurlencode('whatisjdmpart.jpg')) }}" alt="Japanese sports car" class="rounded-lg w-full object-cover">
        </div>
    </section>

    <!-- Iconic cars -->
    <section class="py-24 px-6 bg-zinc-950">
        <div class="max-w-7xl mx-auto">
            <h2 class="font-display font-bold text-3xl md:text-4xl text-red-500 mb-12 text-center">ICONIC JDM CARS</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                $cars = [
                    ['name'=>'Nissan 240SX','desc'=>'A popular drift and tuning platform beloved in JDM culture.','img'=>asset('images/240SX.png'),'alt'=>'Nissan 240SX'],
                    ['name'=>'Toyota AE86','desc'=>'The Initial D icon — lightweight, rear-wheel drive and legendary.','img'=>asset('images/AE86.png'),'alt'=>'Toyota AE86'],
                    ['name'=>'Nissan GT-R R35','desc'=>'Modern Godzilla — twin-turbo AWD supercar killer.','img'=>asset('images/GTRR35.png'),'alt'=>'Nissan GT-R R35'],
                    ['name'=>'Toyota Mark II JZX100','desc'=>'Turbo inline-six sedan and a favorite for drifting builds.','img'=>asset('images/JZX100.png'),'alt'=>'Toyota Mark II JZX100'],
                    ['name'=>'Toyota Mark II & Honda Prelude','desc'=>'Two JDM classics captured together in one frame.','img'=>asset('images/MARK2.png'),'alt'=>'Toyota Mark II and Honda Prelude'],
                    ['name'=>'Toyota Supra','desc'=>'Iconic twin-turbo sports car with immense tuning potential.','img'=>asset('images/SUPRA.png'),'alt'=>'Toyota Supra'],
                ];
                @endphp
                @foreach($cars as $car)
                <div class="bg-black border border-zinc-800 rounded-lg overflow-hidden hover:border-red-600/50 transition">
                    <img src="{{ $car['img'] }}" alt="{{ $car['alt'] }}" class="w-full h-48 object-contain bg-zinc-900">
                    <div class="p-5">
                        <h3 class="font-display font-bold text-lg mb-2">{{ $car['name'] }}</h3>
                        <p class="text-gray-400 text-sm">{{ $car['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Tuning -->
    <section class="py-24 px-6">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center">
            <img src="https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=1200&q=80" alt="Modified car engine" class="rounded-lg w-full object-cover">
            <div>
                <h2 class="font-display font-bold text-3xl md:text-4xl text-red-500 mb-6">TUNING & MODIFICATION</h2>
                <p class="text-gray-300 leading-relaxed mb-4">JDM culture thrives on personalization. Enthusiasts upgrade engines, fit body kits, swap wheels, tune exhausts and refine suspension to create unique machines.</p>
                <p class="text-gray-300 leading-relaxed">From subtle street builds to full track monsters, modification is about expression as much as performance.</p>
            </div>
        </div>
    </section>

    <!-- Drift & Touge -->
    <section class="py-24 px-6 bg-zinc-950">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="font-display font-bold text-3xl md:text-4xl text-red-500 mb-6">DRIFTING & TOUGE</h2>
                <p class="text-gray-300 leading-relaxed mb-4">Drifting was born on Japan's mountain passes — touge — where drivers pushed cars to their limits on tight, winding roads. It grew into a global motorsport celebrated for skill and style.</p>
                <p class="text-gray-300 leading-relaxed">Today drifting and touge driving remain central to JDM identity, celebrating control, precision and passion.</p>
            </div>
            <img src="https://images.unsplash.com/photo-1568605117036-5fe5e7bab0b7?auto=format&fit=crop&w=1200&q=80" alt="Drifting car" class="rounded-lg w-full object-cover">
        </div>
    </section>

    <!-- Around the world -->
    <section class="py-24 px-6">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center">
            <img src="{{ asset('images/' . rawurlencode('jdmaroundtheworld.jpg')) }}" alt="Car meet" class="rounded-lg w-full object-cover">
            <div>
                <h2 class="font-display font-bold text-3xl md:text-4xl text-red-500 mb-6">JDM AROUND THE WORLD</h2>
                <p class="text-gray-300 leading-relaxed mb-4">Japanese cars, tuning styles and communities have inspired enthusiasts across the globe. From local car meets to international shows, JDM influence is everywhere.</p>
                <p class="text-gray-300 leading-relaxed">The culture transcends borders, uniting people through shared passion for Japanese automotive excellence.</p>
            </div>
        </div>
    </section>

    <!-- Closing -->
    <section class="relative py-32 px-6 text-center overflow-hidden">
        <img src="{{ asset('images/' . rawurlencode('jdmismorethanstyle.png')) }}" alt="Automotive background" class="absolute inset-0 w-full h-full object-cover opacity-30">
        <div class="absolute inset-0 bg-black/70"></div>
        <div class="relative z-10">
            <h2 class="font-display font-black text-4xl md:text-6xl glow">JDM IS MORE THAN A STYLE. IT'S A PASSION.</h2>
        </div>
    </section>
@endsection
