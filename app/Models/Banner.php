<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id',
        'img',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
