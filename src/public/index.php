<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

$loader = new Twig\Loader\ArrayLoader([
   'index' => 'Hello {{ name }} at {{ location }}'
]);

$uri = $_SERVER['REQUEST_URI'];
$twig = new Twig\Environment($loader);

try {
    echo $twig->render('index', ['name' => 'Mikita', 'location' => $uri]);
}catch (Throwable $exception){
    echo $exception->getMessage();
    echo PHP_EOL;
}
