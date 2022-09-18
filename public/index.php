<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\AdminController;
use MVC\Router;
use Controllers\IndexController;
use Controllers\LoginController;
use Controllers\PollsController;
use Controllers\UserController;

$router = new Router();

// Rutas de la página principal
$router->get('/', [IndexController::class, 'index']);

// Rutas del login de usuarios
$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/register', [LoginController::class, 'register']);
$router->post('/register', [LoginController::class, 'register']);
$router->get('/logout', [LoginController::class, 'logout']);

// Rutas para la sección de administrador
$router->get('/admin/index', [AdminController::class, 'index']);

// Páginas principales
$router->get('/polls', [PollsController::class, 'polls']);
$router->get('/polls-categories', [PollsController::class, 'categories']);
$router->get('/my-polls', [PollsController::class, 'myPolls']);
$router->get('/profile', [PollsController::class, 'profile']);
$router->get('/profile/change-password', [UserController::class, 'changePassword']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->checkRoutes();