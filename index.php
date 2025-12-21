<?php

require_once __DIR__ . '/bootstrap.php';
// require_once __DIR__ . '/lib/Router.php';

// require_once __DIR__ . '/config/routes.php';


use MyApp\Controller\HomeController;
$homeController = new HomeController($twig);


$trim = '/\^$';
$uri = trim($_SERVER['REQUEST_URI'], $trim);
$method = $_SERVER['REQUEST_METHOD'];

if ($uri == ''){
    $homeController->index();
} else {
    header("HTTP/1.1 404 Not Found");
    $homeController->notFound();
}

