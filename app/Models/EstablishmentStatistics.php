<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EstablishmentStatistics extends Model
{
    use HasFactory;

    protected $fillable = [
        'establishment_id',
        'views',
        'new_followers',
        'date'
    ];

    /**
     * Get the establishment that owns the stats
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function establishment(): BelongsTo
    {
        return $this->belongsTo(Establishment::class);
    }

}
