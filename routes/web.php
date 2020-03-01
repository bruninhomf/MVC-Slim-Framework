<?php

/*
 * File        : AppRoutes.php
 * Description : Rotas base da aplicação
*/

use App\Middlewares\Validation\LoginValidation;
use App\Middlewares\Validation\RecoveryValidation;
use App\Middlewares\Auth\AuthenticatedMiddleware as Authenticated;


//autenticação

$this->any('/', 'AuthController:login')->unrestricted()->setName('auth.login');
$this->any('/logout', 'AuthController:logout')->setName('auth.logout');
$this->any('/forgot-password', 'AuthController:recovery')->unrestricted()->setName('auth.recovery');
$this->any('/register', 'AuthController:register')->unrestricted()->setName('auth.register');

//rotas base
$this->group('/app', function(){

    //painel
    $this->any('', 'HomeController:index')->setName('home.index');

})->add(Authenticated::class);

