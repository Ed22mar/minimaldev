<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    /**
     * Os atributos que podem ser atribuidos em massa
     * @var array<int,string>
     */
    protected $fillable = [
        'nome',
        'categoria',
        'tag',
        'conteudo',
    ];

    /**
     * Os atributos que devem ser castrados para tipos nativos.
     * @var array<string, string>
     */
    protected $casts = [
        'id'=>'integer',
    ];
}
