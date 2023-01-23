<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property string name
 * @property-read int id
 * @property-read Film[] films
 */
class Genre extends Model
{
    public $timestamps = false;
    protected $fillable = [
        "id",
        "name",
    ];

    public function films(): BelongsToMany
    {
        return $this->belongsToMany(Film::class, 'film_genre');
    }
}
