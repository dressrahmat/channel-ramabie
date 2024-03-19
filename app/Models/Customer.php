<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'address'];

    /**
     * Get all of the service for the Customer
     *
     * @return HasMany
     */
    public function service(): HasMany
    {
        return $this->hasMany(Service::class);
    }
}
