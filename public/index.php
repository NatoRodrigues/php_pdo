<?php

require '../vendor/autoload.php';


use app\classes\Uri;
use app\classes\Routes;


$routes = [
    '/' => 'controllers/index_controller.php',
    '/about' => 'controllers/about_controller.php'
];


$uri = Uri::load_uri(); // realiza-se essa chamada por se tratar de um método estático

try {
    $route = Routes::load_routes($routes, $uri,);
} catch (Exception $e) {
    // Exibe a mensagem de erro no navegador
    echo '<h1>Erro</h1>';
    echo '<p>' . $e->getMessage() . '</p>';
}

require Routes::load_routes($routes, $uri,);