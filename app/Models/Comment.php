<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property string comment
 * @property-read int id
 * @property-read Film film
 */
class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        "id",
        "comment",
    ];

    public function films(): BelongsTo
    {
        return $this->belongsTo(Film::class);
    }
}
