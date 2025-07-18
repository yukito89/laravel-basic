<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'vendor_code',
        'vendor_name',
    ];

    public function products() {
        return $this->hasMany(Product::class,'vendor_code', 'vendor_code');
    }
}
