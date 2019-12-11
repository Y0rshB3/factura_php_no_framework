<?php
use Aura\Router\RouterContainer; // Contenedor de rutas

$routerContainer = new RouterContainer(); // Se inicializa un nuevo contenedor de rutas
$routes = $routerContainer->getMap(); // Se obtiene el objeto mapa de las rutas

// Rutas POST - GET

$routes->get('index', '/', BASENAME.'\Views\index.php');
$routes->get('login', '/login', BASENAME.'\Views\login.php');

$matchRoutes = $routerContainer->getMatcher(); // Realizar match con las rutas ingresadas
$route = $matchRoutes->match($request);

if(!$route){
    require BASENAME.'\Views\PagesErrors\404.php'; // Ruta defecto cuando no exista url
}else{
    require $route->handler; // Enrutador
}