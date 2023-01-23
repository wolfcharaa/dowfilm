<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property-read int id
 * @property string name
 * @property string description
 * @property string original_name
 * @property float star
 * @property float kinopoisk_rate
 * @property float imbd_rate
 * @property int year
 * @property string picture
 * @property int long
 * @property Carbon premiere
 * @property string download_link
 */
class Film extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        "id",
        "name",
        "description",
        "original_name",
        "star",
        "kinopoisk_rate",
        "imbd_rate",
        "year",
        "picture_id",
        "long",
        "premiere",
        "download_link",
    ];

    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Gengre::class, 'film_genre');
    }
    public function countries(): BelongsToMany
    {
        return $this->belongsToMany(Country::class, 'film_country');
    }
    public function producers(): BelongsToMany
    {
        return $this->belongsToMany(Producer::class, 'film_producer');
    }
    public function actors(): BelongsToMany
    {
        return $this->belongsToMany(Actor::class, 'film_actor');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
    public function picture(): BelongsTo
    {
        return $this->belongsTo(Picture::class);
    }
}
