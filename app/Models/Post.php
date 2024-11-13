<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    /**
     * Los campos que tienen que ser llenados, el campo Slug por ejemplo se rellenara automaticamente porque es lo mismo que el titulo
     */
    protected $fillable = ['title','summary', 'body', 'status', 'user_id', 'published_at'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
