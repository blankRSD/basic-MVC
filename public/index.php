<?php 

spl_autoload_register(
	function($class)
	{
		$root = dirname(__DIR__);
		$file = $root. '/' .str_replace('\\', '/', $class). '.php';
		if (is_readable($file)) {
			require $file;
		}
	}
);

// require '../App/Controllers/Posts.php';
// require '../Core/Router.php';

$router = new Core\Router();

$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);

$router->dispatch($_SERVER['QUERY_STRING']);


// echo "<pre>";
// // var_dump($router->getRoutes());
// echo htmlspecialchars(print_r($router->getRoutes(),true));
// echo "</pre>";

// $url = $_SERVER['QUERY_STRING'];

// if($router->match($url))
// {
// 	echo "<pre>";
// 	var_dump($router->getParams());
// 	echo "</pre>";
//  }
// else 
// {
// 	echo 'No route found';
// }

 ?>