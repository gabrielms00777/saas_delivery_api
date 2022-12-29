<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tenant_id',
        'address_id',
        'payment_method',
        'payment_money_return',
        'delivery_price',
        'subtotal',
        'order_date',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
