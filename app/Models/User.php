<?php

/*
 * File        : User.php
 * Description : Model de usuários do sistema
 * Author      : Alef Carvalho <alef.carvalho@inovedados.com.br>
*/

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model {

    //campos cadastraveis
    protected $fillable = [
        'name',
        'cpf',
        'email',
        'password',
        'blocked'
    ];

    //soft delete trait
    use SoftDeletes;

}