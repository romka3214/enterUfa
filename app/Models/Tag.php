<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;


    protected $table = 'tags';

    protected $fillable = [
        'name'
    ];


    /**
     * Get all of the Establishments for the tag
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function establishments(): BelongsToMany
    {
        return $this->belongsToMany(Establishment::class, 'establishment_tags');
    }

}
