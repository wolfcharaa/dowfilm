<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int id
 * @property string name
 * @property-read Film[] films
 */
class Country extends Model
{
    public $timestamps = false;
    protected $fillable = [
        "id",
        "name",
    ];

    public function films(): BelongsToMany
    {
        return $this->belongsToMany(Film::class, 'film_country');
    }
}
