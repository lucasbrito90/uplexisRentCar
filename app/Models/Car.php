<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Car extends Model
{
    protected $fillable = [
        'referencia',
        'imagem',
        'ano',
        'nome',
        'quilometragem',
        'combustivel',
        'cambio',
        'portas',
        'cor',
        'slug',
        'preco'
    ];
    use HasFactory;

    public function setNomeAttribute($value)
    {
        $this->attributes['nome'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

}
