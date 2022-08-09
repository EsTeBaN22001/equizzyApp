<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\IndexController;
use Controllers\LoginController;
use MVC\Router;

$router = new Router();

// Rutas de la página principal
$router->get('/', [IndexController::class, 'index']);

// Rutas del login de usuarios
$router->get('/login', [LoginController::class, 'login']);
$router->get('/register', [LoginController::class, 'register']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->checkRoutes();