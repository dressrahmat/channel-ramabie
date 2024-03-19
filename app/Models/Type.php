<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type extends Model
{
    use HasFactory;
    protected $fillable = ['car_id', 'name'];

    /**
     * Get all of the service for the Type
     *
     * @return HasMany
     */
    public function service(): HasMany
    {
        return $this->hasMany(Service::class);
    }

    /**
     * Get the car that owns the Type
     *
     * @return BelongsTo
     */
    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
