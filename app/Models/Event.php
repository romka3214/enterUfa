<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

class Event extends Model
{
    use HasFactory;


    protected $fillable = [
        'establishment_id',
        'name',
        'description',
        'price',
        'date_start',
        'date_end'
    ];
    protected $dates = [
        'date_start',
        'date_end'
    ];
    public function getDateStartAttribute($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }
    public function getDateEndAttribute($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }


    /**
     * Get the establishment that owns the Event
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function establishment(): BelongsTo
    {
        return $this->belongsTo(Establishment::class);
    }

    /**
     * Get all of the photos for the Event
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos(): HasMany
    {
        return $this->hasMany(EventPhotos::class);
    }
}
