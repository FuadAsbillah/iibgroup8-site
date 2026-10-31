@extends('layouts.app')

@section('title', 'Order a JDM Car — JDM Zone')

@section('content')
    <section class="pt-32 pb-20">
        <div class="max-w-7xl mx-auto px-6">
            <p class="text-red-500 uppercase tracking-[0.4em] text-sm mb-3">Order</p>
            <h1 class="font-display text-4xl md:text-6xl mb-4">Reserve your <span class="text-red-500">legend</span></h1>
            <p class="text-gray-400 max-w-2xl mb-12">Pick a car, tell us who you are, and we'll handle the rest. All prices in BND.</p>

            @if (session('success'))
                <div class="mb-8 rounded-xl border border-green-500/40 bg-green-500/10 px-5 py-4 text-green-300">
                    {{ session('success') }}
                </div>
            @endif

            <div class="grid md:grid-cols-3 gap-8 mb-16">
                @foreach ($cars as $car)
                    <div class="bg-zinc-900 border border-zinc-800 rounded-xl p-6 flex flex-col transition hover:-translate-y-1 hover:shadow-xl hover:shadow-red-600/10">
                        <div class="text-red-500 text-xs uppercase tracking-widest mb-2">{{ $car->tagline }}</div>
                        <h2 class="font-display text-xl mb-4">{{ $car->name }}</h2>
                        <p class="text-2xl mb-6 mt-auto">BND {{ number_format((float) $car->price, 2) }}</p>
                        <button type="button" data-car-id="{{ $car->id }}" class="select-car bg-red-600 hover:bg-red-700 px-5 py-3 rounded text-sm uppercase tracking-widest font-semibold transition">
                            Order this car
                        </button>
                    </div>
                @endforeach
            </div>

            <div id="order-form" class="max-w-2xl bg-zinc-900 border border-zinc-800 rounded-xl p-8">
                <h2 class="font-display text-2xl mb-6">Order form</h2>

                <form method="POST" action="{{ route('orders.store') }}" class="space-y-5">
                    @csrf

                    <div>
                        <label for="car_id" class="block text-sm uppercase tracking-widest text-gray-400 mb-2">Car</label>
                        <select id="car_id" name="car_id" class="w-full bg-black border border-zinc-700 rounded px-4 py-3 focus:border-red-500 focus:outline-none">
                            <option value="">Choose a car</option>
                            @foreach ($cars as $car)
                                <option value="{{ $car->id }}" data-price="{{ $car->price }}" @selected(old('car_id') == $car->id)>
                                    {{ $car->name }} — BND {{ number_format((float) $car->price, 2) }}
                                </option>
                            @endforeach
                        </select>
                        @error('car_id')
                            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="customer_name" class="block text-sm uppercase tracking-widest text-gray-400 mb-2">Your name</label>
                        <input id="customer_name" name="customer_name" type="text" value="{{ old('customer_name') }}" class="w-full bg-black border border-zinc-700 rounded px-4 py-3 focus:border-red-500 focus:outline-none">
                        @error('customer_name')
                            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="customer_email" class="block text-sm uppercase tracking-widest text-gray-400 mb-2">Email</label>
                        <input id="customer_email" name="customer_email" type="email" value="{{ old('customer_email') }}" class="w-full bg-black border border-zinc-700 rounded px-4 py-3 focus:border-red-500 focus:outline-none">
                        @error('customer_email')
                            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="quantity" class="block text-sm uppercase tracking-widest text-gray-400 mb-2">Quantity (1–10)</label>
                        <input id="quantity" name="quantity" type="number" min="1" max="10" value="{{ old('quantity', 1) }}" class="w-full bg-black border border-zinc-700 rounded px-4 py-3 focus:border-red-500 focus:outline-none">
                        @error('quantity')
                            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="notes" class="block text-sm uppercase tracking-widest text-gray-400 mb-2">Notes (optional)</label>
                        <textarea id="notes" name="notes" rows="3" class="w-full bg-black border border-zinc-700 rounded px-4 py-3 focus:border-red-500 focus:outline-none">{{ old('notes') }}</textarea>
                        @error('notes')
                            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <p id="estimate" class="text-lg text-gray-300"></p>

                    <button type="submit" class="w-full bg-red-600 hover:bg-red-700 px-8 py-4 rounded font-semibold uppercase tracking-widest transition">
                        Place order
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        const carSelect = document.getElementById('car_id');
        const quantityInput = document.getElementById('quantity');
        const estimate = document.getElementById('estimate');

        function updateEstimate() {
            const price = parseFloat(carSelect.selectedOptions[0]?.dataset.price ?? 0);
            const quantity = parseInt(quantityInput.value || '1', 10);

            if (!price || Number.isNaN(quantity)) {
                estimate.textContent = '';

                return;
            }

            estimate.textContent = 'Estimated total: BND ' + (price * quantity).toLocaleString('en-US', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2,
            });
        }

        document.querySelectorAll('.select-car').forEach((button) => {
            button.addEventListener('click', () => {
                carSelect.value = button.dataset.carId;
                carSelect.dispatchEvent(new Event('change'));
                document.getElementById('order-form').scrollIntoView({ behavior: 'smooth' });
            });
        });

        carSelect.addEventListener('change', updateEstimate);
        quantityInput.addEventListener('input', updateEstimate);
        updateEstimate();
    </script>
@endpush
