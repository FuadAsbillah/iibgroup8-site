@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-black text-white px-6 py-16">

    <div class="max-w-4xl mx-auto">

        <div class="text-center mb-12">
            <p class="text-red-500 uppercase tracking-[0.3em] text-sm mb-4">
                Become Part of Our Community
            </p>

            <h1 class="text-5xl font-bold uppercase mb-5">
                Join <span class="text-red-500">JDM Zone</span>
            </h1>

            <p class="text-gray-400 max-w-2xl mx-auto">
                Connect with fellow car enthusiasts, share your passion
                for Japanese cars and become part of our community.
            </p>
        </div>

        @if(session('success'))
            <div class="bg-green-900/40 border border-green-500 text-green-300 p-4 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="bg-red-900/40 border border-red-500 text-red-300 p-4 rounded-lg mb-6">
                <p class="font-bold mb-2">Please correct the following:</p>
                <ul class="list-disc pl-5">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-8 md:p-10">

            <h2 class="text-2xl font-bold uppercase mb-2">
                Membership Application
            </h2>

            <p class="text-gray-400 text-sm mb-8">
                Fill in the details below to apply for membership.
            </p>

            <form action="/join" method="POST">

                @csrf

                <div class="grid md:grid-cols-2 gap-6">

                    <div>
                        <label class="block text-sm mb-2">
                            Full Name *
                        </label>

                        <input
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            required
                            maxlength="255"
                            placeholder="Enter your full name"
                            class="w-full bg-black border border-zinc-700 rounded-lg p-3 text-white focus:border-red-500 outline-none"
                        >
                    </div>

                    <div>
                        <label class="block text-sm mb-2">
                            Email Address *
                        </label>

                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            maxlength="255"
                            placeholder="Enter your email"
                            class="w-full bg-black border border-zinc-700 rounded-lg p-3 text-white focus:border-red-500 outline-none"
                        >
                    </div>

                    <div>
                        <label class="block text-sm mb-2">
                            Phone Number
                        </label>

                        <input
                            type="tel"
                            name="phone"
                            value="{{ old('phone') }}"
                            maxlength="30"
                            placeholder="Enter your phone number"
                            class="w-full bg-black border border-zinc-700 rounded-lg p-3 text-white focus:border-red-500 outline-none"
                        >
                    </div>

                    <div>
                        <label class="block text-sm mb-2">
                            Car Model
                        </label>

                        <input
                            type="text"
                            name="car_model"
                            value="{{ old('car_model') }}"
                            maxlength="255"
                            placeholder="e.g. Nissan Skyline R34"
                            class="w-full bg-black border border-zinc-700 rounded-lg p-3 text-white focus:border-red-500 outline-none"
                        >
                    </div>

                </div>

                <div class="mt-6">
                    <label class="block text-sm mb-2">
                        Why do you want to join us? *
                    </label>

                    <textarea
                        name="reason"
                        rows="5"
                        required
                        maxlength="2000"
                        placeholder="Tell us about your interest in JDM cars..."
                        class="w-full bg-black border border-zinc-700 rounded-lg p-3 text-white focus:border-red-500 outline-none"
                    >{{ old('reason') }}</textarea>
                </div>

                <div class="mt-8">
                    <button
                        type="submit"
                        class="w-full bg-red-600 hover:bg-red-700 text-white font-bold uppercase tracking-widest py-4 rounded-lg transition"
                    >
                        Submit Application
                    </button>
                </div>

                <p class="text-gray-500 text-xs text-center mt-5">
                    Fields marked with * are required.
                </p>

            </form>

        </div>

    </div>

</div>

@endsection