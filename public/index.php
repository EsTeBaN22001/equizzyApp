<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\AdminController;
use Controllers\CategoryPollController;
use MVC\Router;
use Controllers\IndexController;
use Controllers\LoginController;
use Controllers\PollsController;
use Controllers\UserController;

$router = new Router();

// Páginas principales
$router->get('/', [IndexController::class, 'index']);
$router->get('/my-polls', [IndexController::class, 'myPolls']);
$router->get('/profile', [IndexController::class, 'profile']);
$router->get('/profile/change-password', [UserController::class, 'changePassword']);

// Registro e inicio de sesión de usuarios
$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/register', [LoginController::class, 'register']);
$router->post('/register', [LoginController::class, 'register']);
$router->get('/logout', [LoginController::class, 'logout']);

// CRUD categorías
$router->get('/categories/list', [CategoryPollController::class, 'list']);
$router->get('/categories/create', [CategoryPollController::class, 'create']);
$router->post('/categories/create', [CategoryPollController::class, 'create']);

// CRUD de las encuestas del lado del usuario
$router->get('/polls/list', [PollsController::class, 'list']);
$router->get('/polls/create', [PollsController::class, 'create']);
$router->post('/polls/create', [PollsController::class, 'create']);

// Secciones de administrador
$router->get('/admin/index', [AdminController::class, 'index']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->checkRoutes();