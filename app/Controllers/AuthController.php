<?php

/*
 * File        : AuthController.php
 * Description : Controller de autenticação de usuários
 * Author      : Bruno Firmiano <bruno.firmiano@inovedados.com.br>
*/

namespace App\Controllers;

use App\Extensions\Support\Date;
use App\Extensions\Support\Str;
use App\Util\Mailer;
use Slim\Http\Request;
use Slim\Http\Response;

class AuthController extends Controller {

    //usuário autenticado
    protected $user;

    //erros de autenticação
    protected $errors;

    /*
    |--------------------------------------------------------------------------
    | Login
    |--------------------------------------------------------------------------
    */
    public function login(Request $request, Response $response){

        if($request->isPost()){
            //usuário não existe
            $this->flash('error', 'Incorrect username or password.');

            return $response->withRedirect(
                $this->route('auth.login')
            );

        }else{
            
            //tenta o login por cookie
            return $this->view('auth', 'login');

        }

    }

    /*
    |--------------------------------------------------------------------------
    | Recuperação de senha
    |--------------------------------------------------------------------------
    */
    public function recovery(Request $request, Response $response){

        if($request->isPost()){

            //usuário não existe
            $this->flash('error', 'The data provided is invalid.');

            //redireciona para a recuperação
            return $response->withRedirect(
                $this->route('auth.recovery')
            );

        }else{
            return $this->view('auth', 'recovery');
        }

    }


    /*
    |--------------------------------------------------------------------------
    | Register
    |--------------------------------------------------------------------------
    */
    public function register(Request $request, Response $response){
        if($request->isPost()){

            Mailer::to("bruno.firmiano@inovedados.com.br")
            ->subject('Teste')
            ->template('mail.register.profile',$request->all())
            ->send();

            //usuário não existe
            $this->flash('error', 'The data reported does not constitute an indication of users.');

            //redireciona para a recuperação
            return $response->withRedirect(
                $this->route('auth.register')
            );

        }else{
            return $this->view('auth', 'register');
        }

    }

}