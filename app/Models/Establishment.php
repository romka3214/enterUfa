<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Laravel\Scout\Searchable;


class Establishment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'address',
        'user_id'
    ];
    protected $appends = [
        'average_score'
    ];

    /**
     * Get the name of the index associated with the model.
     */
    public function searchableAs(): string
    {
        return 'name';
    }

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
     * Get owner of the Establishment
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the users who following the Establishment
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_follows');
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

    public function getAverageScoreAttribute()
    {
        return round($this->reviews->avg('score'));
    }

}
