<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static orderBy(string $string, string $string1)
 * @method static create(array $validated)
 */
class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
      'created_at' => 'datetime:Y-m-d\ H:i:s'
    ];

    public function price(): Attribute
    {
        return Attribute::make(
            get: fn (int $value) => $value/100,
            set: fn (float $value) => $value * 100
        );
    }
}
