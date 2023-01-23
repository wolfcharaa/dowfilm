<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property-read int id
 * @property string first_name
 * @property string last_name
 * @property-read Film[] films
 */
class Producer extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        "id",
        "first_name",
        "last_name",
    ];

    public function films(): BelongsToMany
    {
        return $this->belongsToMany(Film::class, 'film_producer');
    }
}
