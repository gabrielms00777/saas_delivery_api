<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'status',
        'created',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
