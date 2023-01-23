<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property-read int id
 * @property-read Film[] films
 * @property string first_name
 * @property string last_name
 *
 */
class Actor extends Model
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
        return $this->belongsToMany(Film::class, 'film_actor');
    }
}
