<?php

/*
 * File        : Index.php
 * Description : Launcher da aplicação
 * Author      : Bruno Firmiano <bruno.firmiano@inovedados.com.br>
*/

ob_start();
session_start();

//carrega o autoload do composer
require '../vendor/autoload.php';

use App\Framework\Kernel;

//inicializa a aplicação
$app = new Kernel([
    'settings' => [
        'debug' => APP_DEBUG,
        'determineRouteBeforeAppMiddleware' => true,
        'displayErrorDetails'    => APP_DEBUG,
        'addContentLengthHeader' => false,
    ],
]);

//configura a aplicação
$app->config();

//roda o stack
$app->run();

ob_end_flush();
