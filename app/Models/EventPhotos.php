<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventPhotos extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'url'
    ];

    /**
     * Get the Event that owns the EventPhotos
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
