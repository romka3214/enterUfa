<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EstablishmentTag extends Model
{
    use HasFactory;

    protected $table = 'establishment_tags';

    protected $fillable = [
        'establishment_id',
        'tag_id',
        'popularity_count'
    ];



}
