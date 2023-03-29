<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EstablishmentPhoto extends Model
{
    use HasFactory;

    protected $table = 'establishments_photos';

    protected $fillable = [
        'establishment_id',
        'url'
    ];


    /**
     * Get the user that owns the Establishment_photo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Establishment(): BelongsTo
    {
        return $this->belongsTo(Establishment::class);
    }
}
