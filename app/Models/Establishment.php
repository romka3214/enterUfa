<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Establishment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'address'
    ];

    /**
     * Get all of the tags for the Establishment
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'establishment_tags');
    }

    /**
     * Get all of the photos for the Establishment
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos(): HasMany
    {
        return $this->hasMany(EstablishmentPhoto::class);
    }

    /**
     * Get all of the events for the Establishment
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }

    /**
     * Get all of the reviews for the Establishment
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

}
