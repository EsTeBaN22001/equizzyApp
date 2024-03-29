<?php

namespace MVC;

class Router
{
	public array $getRoutes = [];
	public array $postRoutes = [];

	public function get($url, $fn)
	{
		$this->getRoutes[$url] = $fn;
	}

	public function post($url, $fn)
	{
		$this->postRoutes[$url] = $fn;
	}

	public function checkRoutes()
	{
		
		// Proteger Rutas...
		session_start();

		// Arreglo de rutas protegidas...
		$protectedRoutes = [
			//profile user
			'/profile',
			'/profile/change-password',
			// categories
			'/categories/list',
			'/categories/create',
			'/polls-by-category',
			// polls
			'/my-polls',
			'/polls/list',
			'/polls/create',
			'/polls/edit',
			'/polls/edit-info',
			'/polls/delete',
			'/polls/respond',
			'/polls/answers',
			'/polls/rate',
			// admin
			'/admin/index'
		];

		$currentUrl = $_SERVER['PATH_INFO'] ?? '/';
		$method = $_SERVER['REQUEST_METHOD'];

		if ($method === 'GET') {
			$fn = $this->getRoutes[$currentUrl] ?? null;
		} else {
			$fn = $this->postRoutes[$currentUrl] ?? null;
		}

		$auth = $_SESSION['login'] ?? null;

		if(in_array($currentUrl, $protectedRoutes) && !$auth){
			header('Location: /login');
		}


		if ( $fn ) {
			// Call user fn va a llamar una función cuando no sabemos cual sera
			call_user_func($fn, $this); // This es para pasar argumentos
		} else {
			include_once __DIR__ . "/views/404.php";
		}
	}

	// Layout principal
	public function render($view, $datos = []){
		// Leer lo que le pasamos  a la vista
		foreach ($datos as $key => $value) {
			$$key = $value;  // Doble signo de dolar significa: variable de variable, básicamente nuestra variable sigue siendo la original, pero al asignarla a otra no la reescribe, mantiene su valor, de esta forma el nombre de la variable se asigna dinamicamente
		}
		ob_start(); // Almacenamiento en memoria durante un momento...
		// entonces incluimos la vista en el layout
		include_once __DIR__ . "/views/$view.php";
		$content = ob_get_clean(); // Limpia el Buffer
		include_once __DIR__ . '/views/layouts/layout.php';
	}

	// Layout para el el inicio y registro de los usuarios
	public function renderLogin($view, $datos = []){
		foreach ($datos as $key => $value){
			$$key = $value;
		}
		ob_start();
		include_once __DIR__ . "/views/$view.php";
		$content = ob_get_clean();
		include_once __DIR__ . '/views/layouts/layoutLogin.php';
	}

	// Layout para las encuestas
	public function renderPolls($view, $datos = []){
		foreach ($datos as $key => $value){
			$$key = $value;
		}
		ob_start();
		include_once __DIR__ . "/views/$view.php";
		$content = ob_get_clean();
		include_once __DIR__ . '/views/layouts/layoutPolls.php';
	}

	public function renderAdmin($view, $datos = []){
		foreach ($datos as $key => $value){
			$$key = $value;
		}

		ob_start();
		include_once __DIR__ ."/views/admin/$view.php";
		$content = ob_get_clean();
		include_once __DIR__ . "/views/layouts/layoutAdmin.php";
	}
}
