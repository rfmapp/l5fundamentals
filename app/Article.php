<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // Atributos que podem ser preenchidos todos de uma vez pelo usuário.
    protected $fillable = [
        'title',
        'body',
        'published_at'
    ];
}
