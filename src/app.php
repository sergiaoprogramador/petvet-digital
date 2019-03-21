<?php

session_start();

// Faz consulta ao Slim e as demais dependencias instaladas
require '../vendor/autoload.php';
require '../config/config.php';

// Cria o objeto app. Passa as configurações do app
$app = new \Slim\App(['settings' => $config]);

require '../app/dependencies.php';

require '../app/routes.php';