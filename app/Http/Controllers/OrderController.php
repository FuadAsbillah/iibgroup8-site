<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Models\Car;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class OrderController extends Controller
{
    /**
     * Show the order form with the available cars.
     */
    public function create(): View
    {
        return view('orders.create', [
            'cars' => Car::query()->orderBy('price')->get(),
        ]);
    }

    /**
     * Store a new order for the selected car.
     */
    public function store(StoreOrderRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $car = Car::query()->findOrFail($data['car_id']);

        $order = $car->orders()->create([
            'customer_name' => $data['customer_name'],
            'customer_email' => $data['customer_email'],
            'quantity' => $data['quantity'],
            'total_price' => round((float) $car->price * $data['quantity'], 2),
            'notes' => $data['notes'] ?? null,
        ]);

        return redirect()
            ->route('orders.create')
            ->with('success', "Order #{$order->id} received. We'll contact you at {$order->customer_email} shortly.");
    }
}
