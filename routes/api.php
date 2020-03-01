<?php

/*
 * File        : API.php
 * Description : Rotas da API Rest
 * Author      : Alef Carvalho <alef.carvalho@inovedados.com.br>
*/

use App\Middlewares\Auth\TokenMiddleware;

//rotas autenticadas
$this->group('/api', function(){

    //

})->validate(TokenMiddleware::class);
