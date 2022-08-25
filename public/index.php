<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\IndexController;
use Controllers\LoginController;
use Controllers\PollsController;

$router = new Router();

// Rutas de la página principal
$router->get('/', [IndexController::class, 'index']);

// Rutas del login de usuarios
$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/register', [LoginController::class, 'register']);
$router->post('/register', [LoginController::class, 'register']);

// Páginas principales
$router->get('/polls', [PollsController::class, 'polls']);
$router->get('/polls-categories', [PollsController::class, 'categories']);
$router->get('/profile', [PollsController::class, 'profile']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->checkRoutes();