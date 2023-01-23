<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property string high
 * @property string low
 * @property-read int id
 */
class Picture extends Model
{

    public $timestamps = false;
    protected $fillable = [
        "id",
        "high",
        "low",
    ];

    public function film(): HasOne
    {
        return $this->hasOne(Film::class);
    }
}
