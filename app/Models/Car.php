<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * Get all of the type for the Car
     *
     * @return HasMany
     */
    public function type(): HasMany
    {
        return $this->hasMany(Type::class);
    }
}
