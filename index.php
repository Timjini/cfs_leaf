<?php

require_once __DIR__ . '/bootstrap.php';


use MyApp\Controller\TestController;

$controller = new TestController($twig);

$controller->index();
