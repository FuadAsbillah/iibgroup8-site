<?php

use App\Models\Car;
use App\Models\Order;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('the order page lists the available cars', function () {
    Car::factory()->create([
        'name' => 'Nissan Skyline GT-R R34',
        'price' => 185000,
    ]);

    $this->get(route('orders.create'))
        ->assertOk()
        ->assertSee('Nissan Skyline GT-R R34')
        ->assertSee('BND 185,000.00');
});

test('a customer can place an order', function () {
    $car = Car::factory()->create(['price' => 100000]);

    $this->post(route('orders.store'), [
        'car_id' => $car->id,
        'customer_name' => 'Ahmad',
        'customer_email' => 'ahmad@example.com',
        'quantity' => 2,
        'notes' => 'Manual gearbox please.',
    ])
        ->assertRedirect(route('orders.create'))
        ->assertSessionHas('success');

    expect(Order::count())->toBe(1);

    $order = Order::first();

    expect($order->car_id)->toBe($car->id)
        ->and($order->customer_name)->toBe('Ahmad')
        ->and($order->customer_email)->toBe('ahmad@example.com')
        ->and($order->quantity)->toBe(2)
        ->and($order->total_price)->toBe('200000.00')
        ->and($order->notes)->toBe('Manual gearbox please.');
});

test('an order requires valid details', function () {
    $this->post(route('orders.store'), [])
        ->assertSessionHasErrors(['car_id', 'customer_name', 'customer_email', 'quantity']);

    expect(Order::count())->toBe(0);
});

test('the quantity cannot exceed ten cars', function () {
    $car = Car::factory()->create();

    $this->post(route('orders.store'), [
        'car_id' => $car->id,
        'customer_name' => 'Ahmad',
        'customer_email' => 'ahmad@example.com',
        'quantity' => 11,
    ])->assertSessionHasErrors('quantity');

    expect(Order::count())->toBe(0);
});
