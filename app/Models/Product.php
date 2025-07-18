<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'price',
        'vendor_code'
    ];

    public function vendor() {
        return $this->belongsTo(Vendor::class, 'vendor_code', 'vendor_code');
    }
}
