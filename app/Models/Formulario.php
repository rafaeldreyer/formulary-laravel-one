<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $fillable = ['nome', 'telefone', 'email', 'genero', 'data_nascimento', 'cidade', 'estado', 'endereco'];
}
