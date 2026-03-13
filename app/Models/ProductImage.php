<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    protected function imagePath(): Attribute
    {
        return Attribute::make(get: fn() => '/images/product/' . $this->name);
    }

    protected function imageAlt(): Attribute
    {
        return Attribute::make(get: fn() => $this->alt ?? $this->name);
    }
}
