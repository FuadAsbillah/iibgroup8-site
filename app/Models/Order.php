<?php

namespace App\Models;

use Database\Factories\OrderFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    /** @use HasFactory<OrderFactory> */
    use HasFactory;

    /**
     * @var list<string>
     */
    protected $fillable = [
        'car_id',
        'customer_name',
        'customer_email',
        'quantity',
        'total_price',
        'notes',
        'status',
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'quantity' => 'integer',
            'total_price' => 'decimal:2',
        ];
    }

    /**
     * @return BelongsTo<Car, $this>
     */
    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
