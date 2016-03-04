<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // Atributos que podem ser preenchidos todos de uma vez pelo usuário.
    protected $fillable = [
        'title',
        'body',
        'published_at',
        'user_id'
    ];

    // Atributo published_at será tratado como objeto Carbon.
    protected $dates = ['published_at'];

    // Escopo de query que exibe apenas os artigos cuja data de publicaçao (published_at) seja inferior a data atual.
    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    // Formata o atributo de data da publicação do artigo.
    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::parse($date);
    }

    public function user()
    {
        // Estabelece relacionamento entre artigos e usuários. Um artigo pertence a um usuário.
        return $this->belongsTo('App\User');
    }
}
