<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'imagem',
    ];

    public function rules() {
        return [
            'nome' => 'required|min:3|max:40|unique:marcas',
            'imagem' => 'required',
        ];
    }

    public function feedback() {
        return [
            'required' => 'O campo :attribute deve ser preenchido.',
            'nome.unique' => 'O nome da marca já existe.',
            'nome.min' => 'O nome da marca deve ter no mínimo 3 caracteres.',
        ];
    }
}
