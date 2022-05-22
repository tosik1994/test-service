<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\OrderStatusEnum;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'phone',
        'email',
        'product',
        'address',
        'description',
        'house_number',
        'apartment_number'
    ];

//    protected $casts = [
//        'order_status' => OrderStatusEnum::class,
//    ];
//
    protected $attributes = [
        'order_status' => 'new-order',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
