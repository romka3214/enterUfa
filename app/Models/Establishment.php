<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Establishment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'address'
    ];

    /**
     * Get all of the photos for the Establishment
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos(): HasMany
    {
        return $this->hasMany(EstablishmentPhoto::class);
    }
    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }
}
