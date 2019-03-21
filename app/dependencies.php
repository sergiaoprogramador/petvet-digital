<?php

// DIC (Container de injeção de Dependência)
// Cria objeto container
$container = $app->getContainer();

// Registra o componente como um serviço no app Slim
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig('../resources/views', [
        'cache' => false //'../resources/views/temp/'
    ]);

    // Instancia e adiciona uma extensão específica do Slim
    $view->addExtension(new \Slim\Views\TwigExtension(
        $container->router,
        $container->request->getUri()
    ));

    return $view;
};

// Registra o controller
$container['HomeController'] = function($container) {
    return new \App\Controllers\HomeController($container);
};

// Registra o controller
$dotenv = new Dotenv\Dotenv('../config/');
$dotenv->load();