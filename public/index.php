<?php

// Activation des dépendances composer
require_once __DIR__.'./../vendor/autoload.php';

// Chargement de MainController
require_once __DIR__.'/../app/controllers/MainController.php';


// Création de l'instance AltoRouter
$router= new AltoRouter();

// partie de l'URL qui ne change pas
$baseUrl = dirname($_SERVER['SCRIPT_NAME']); 

// J'indique à Altorouter la partie d'URL qui reste fixe
$router->setBasePath($baseUrl);

// Définition des routes de l'application

// Pour la home
$router->map('GET', '/', ['controller' => 'MainController', 'method' => 'home'], 'home');
// Pour la page créateurs
$router->map('GET', '/creators/', ['controller' => 'MainController', 'method' => 'creators'], 'creators');

// Je vérifie si l'url appelée correspond à une route
$match = $router->match();

// Création du dispatcher
$dispatcher = new Dispatcher($match, 'MainController::notFound');
$dispatcher->dispatch();

