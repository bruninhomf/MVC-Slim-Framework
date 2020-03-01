<?php

/*
 * File        : Mail.php
 * Description : Arquivo de configuração do serviço de email
 * Author      : Bruno Firmiano <bruno.firmiano@inovedados.com.br>
*/

/*
|--------------------------------------------------------------------------
| Mail
|--------------------------------------------------------------------------
|
| Configurações do serviço de envio de email da aplicação.
|
*/
define('APP_MAIL', [

    'driver'      => 'smtp',
    'host'        => 'smtp.mailtrap.io',
    'user'        => '',
    'pass'        => '',
    'port'        =>  2525,
    'charset'     => 'utf-8',
    'encryption'  => 'tls',
    'debug'       => false,
    'from'        => [
        'name'    => APP_NAME,
        'address' => 'teste@teste.com',
    ],
    'smtp'        => [
        'ssl'     => [
            'verify_peer'       => false,
            'verify_peer_name'  => false,
            'allow_self_signed' => true
        ]
    ]

]);