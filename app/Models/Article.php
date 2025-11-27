<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Factories\Userfactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;



class Article extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'article';
    protected $fillable = [
        'title',
        'slug',
        'body',
        'image',
        'user_id'

    ];

    protected function user(): BelongsTo{
        return $this->belongsTo(user::class);
    }
}
