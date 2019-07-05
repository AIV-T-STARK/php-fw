<?php

	define('ENV', 'development');
	if(ENV == 'development') {
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
	}
	//load config
	require '../configs/default.php';


	//load third party libraries
	if(file_exists('../vendor/autoload.php')) {
		require '../vendor/autoload.php';
	}


	//load core classes
	foreach ($config['core_class'] as $class) {
		if(file_exists('../core/' . $class . '.php')) {
			require '../core/' . $class . '.php';
		}
	}

	//boot system up
	$request = new request();

	if(file_exists('../app/controller/' . $request->controller . 'Controller.php')) {
		// require '../app/controller/' . $request->controller . 'Controller.php';
		// $controllerName = $request->controller . 'Controller'
		// $controller = new {$controllerName}();
	}
	else {
		die('page not found');
	}
?>