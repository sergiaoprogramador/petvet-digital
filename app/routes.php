<?php

// Rota - Home Login
$app->get('/', 'HomeController:inicio')->setName('inicio');

$app->get('/home', 'HomeController:home');

$app->get('/consulta', 'HomeController:consulta');

$app->get('/login', 'HomeController:login');