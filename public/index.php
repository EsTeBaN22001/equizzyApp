<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\UserController;
use Controllers\AdminController;
use Controllers\IndexController;
use Controllers\LoginController;
use Controllers\PollsController;
use Controllers\OptionController;
use Controllers\QuestionController;
use Controllers\CategoryPollController;

$router = new Router();

// Páginas principales
$router->get('/', [IndexController::class, 'index']);
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
$router->get('/my-polls', [PollsController::class, 'listMyPolls']);
$router->get('/polls/list', [PollsController::class, 'list']);
$router->get('/polls/create', [PollsController::class, 'create']);
$router->post('/polls/create', [PollsController::class, 'create']);
$router->get('/polls/edit', [PollsController::class, 'edit']);
$router->get('/polls/delete', [PollsController::class, 'delete']);

// CRUD de las PREGUNTAS de las encuestas
$router->post('/questions/create', [QuestionController::class, 'create']);
$router->post('/questions/update', [QuestionController::class, 'update']);
$router->post('/questions/delete', [QuestionController::class, 'delete']);
$router->post('/questions/get', [QuestionController::class, 'get']);

//CRUD de las OPCIONES de las preguntas
$router->post('/options/create', [OptionController::class, 'create']);

// Secciones de administrador
$router->get('/admin/index', [AdminController::class, 'index']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->checkRoutes();