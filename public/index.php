<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\AdminController;
use Controllers\IndexController;
use Controllers\LoginController;
use Controllers\PollsController;
use Controllers\OptionController;
use Controllers\ProfileController;
use Controllers\QuestionController;
use Controllers\PublicPollsController;
use Controllers\CategoryPollController;
use Controllers\StateAndRateController;

$router = new Router();

// Página principal
$router->get('/', [IndexController::class, 'index']);

// Registro e inicio de sesión de usuarios
$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/register', [LoginController::class, 'register']);
$router->post('/register', [LoginController::class, 'register']);
$router->get('/logout', [LoginController::class, 'logout']);

  ///////////////////////////////////////////////////////////////////////////////
 ///////////////////////////////PÁGINAS PRIVADAS////////////////////////////////
///////////////////////////////////////////////////////////////////////////////

// Administración del perfil y datos del usuario
$router->get('/profile', [ProfileController::class, 'profile']);
$router->post('/profile', [ProfileController::class, 'profile']);
$router->get('/profile/change-password', [ProfileController::class, 'changePassword']);
$router->post('/profile/change-password', [ProfileController::class, 'changePassword']);

// CRUD categorías
$router->get('/categories/list', [CategoryPollController::class, 'list']);
$router->get('/categories/create', [CategoryPollController::class, 'create']);
$router->post('/categories/create', [CategoryPollController::class, 'create']);

// Ver encuestas por categorías
$router->get('/polls-by-category', [CategoryPollController::class, 'pollsByCategory']);

// CRUD de las encuestas del lado del usuario
$router->get('/my-polls', [PollsController::class, 'listMyPolls']);
$router->get('/polls/list', [PollsController::class, 'list']);
$router->get('/polls/create', [PollsController::class, 'create']);
$router->post('/polls/create', [PollsController::class, 'create']);
$router->get('/polls/edit', [PollsController::class, 'edit']);
$router->get('/polls/edit-info', [PollsController::class, 'editInfo']);
$router->post('/polls/edit-info', [PollsController::class, 'editInfo']);
$router->get('/polls/delete', [PollsController::class, 'delete']);

// Vistas para responder una encuesta
$router->get('/polls/respond', [PublicPollsController::class, 'respond']);
$router->post('/polls/respond', [PublicPollsController::class, 'respond']);

// Vistas para ver el resultado de la encuesta
$router->get('/polls/answers', [PublicPollsController::class, 'answers']);
$router->post('/polls/get-answers', [PublicPollsController::class, 'getAnswers']);

// RUTAS para verificar si una encuesta es pública
$router->post('/polls/get-public-state', [StateAndRateController::class, 'getPublicState']);
$router->post('/polls/set-public-state', [StateAndRateController::class, 'setPublicState']);

// CRUD de las PREGUNTAS de las encuestas
$router->post('/questions/create', [QuestionController::class, 'create']);
$router->post('/questions/update', [QuestionController::class, 'update']);
$router->post('/questions/delete', [QuestionController::class, 'delete']);
$router->post('/questions/get', [QuestionController::class, 'get']);

//CRUD de las OPCIONES de las preguntas
$router->post('/options/create', [OptionController::class, 'create']);
$router->post('/options/list', [OptionController::class, 'list']);
$router->post('/options/edit', [OptionController::class, 'edit']);
$router->post('/options/delete', [OptionController::class, 'delete']);

// End-Point para agregar una nueva calificación a una encuesta
$router->post('/polls/rate', [StateAndRateController::class, 'addRatePoll']);
$router->post('/polls/verify-rate', [StateAndRateController::class, 'verifyRate']);

// Secciones de administrador
$router->get('/admin/index', [AdminController::class, 'index']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->checkRoutes();