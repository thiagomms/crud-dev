<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $nome
 * @property $data_de_nascimento
 * @property $cpf
 * @property $idade
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'nome' => 'required',
		'data_de_nascimento' => 'required',
		'cpf' => 'required',
		'idade' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nome','data_de_nascimento','cpf','idade'];



}
