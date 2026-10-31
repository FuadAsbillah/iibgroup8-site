@extends('layouts.app')

@section('content')
    <section class="hero-bg min-h-screen flex items-center justify-center relative overflow-hidden pt-20">
        <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(circle at 20% 30%, #ff3c3c 0%, transparent 40%), radial-gradient(circle at 80% 70%, #ff00ff 0%, transparent 40%);"></div>
        <div class="relative z-10 text-center px-6">
            <p class="text-red-500 uppercase tracking-[0.4em] text-sm mb-4">Japanese Domestic Market</p>
            <h1 class="font-display font-black text-6xl md:text-8xl lg:text-9xl glow mb-6">JDM</h1>
            <p class="text-xl md:text-2xl text-gray-300 max-w-2xl mx-auto mb-10">Legends born on the streets of Tokyo. Tuned, slammed, and ready to rip.</p>
            <a href="{{ route('orders.create') }}" class="inline-block bg-red-600 hover:bg-red-700 px-8 py-4 rounded font-semibold uppercase tracking-widest transition">Order a Car</a>
        </div>
    </section>
@endsection
