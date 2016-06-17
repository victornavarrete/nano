<?php


// The name of THIS file
define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME)); 
// Path to the system folder
define('BASEPATH', str_replace('\\', '/', $system_path)); 
// Path to the front controller (this file)
define('FCPATH', dirname(__FILE__).'/');   
  
define('ENVIRONMENT', 'development' );  
 
switch (ENVIRONMENT)
{
  case 'development':
    error_reporting(-1);
    ini_set('display_errors', 1);
  break; 
  case 'testing':
  case 'production':
    ini_set('display_errors', 0);
    if (version_compare(PHP_VERSION, '5.3', '>='))
    {
      error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
    }
    else
    {
      error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE);
    }
  break; 
  default:
    header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
    echo 'The environment is not set correctly.';
    exit(1);  
}  
 

// data
include_once 'config/config.php';
include_once 'config/routes.php';

// librerias y funciones
include_once 'libraries/errors.php';
//include_once 'libraries/minify.php';
include_once 'helpers/url.php';
include_once 'third/altorouter/AltoRouter.php'; 
 
$router = new AltoRouter(); 
$router->addRoutes($routes);

// match current request url
$match = $router->match(); 
$error_page = 404;
$view_path = 'views/';

///generar index
if (!empty($match['target'])) { 
	$path_file = $view_path. $match['target'] . '.php'; 
	if(is_file($path_file)){
		$error_page = null;
		include_once $path_file;
	} 
} 

// si hay error
if(!empty($error_page)){

  $error_manager = new errors(); 
  switch ($error_page) {
    case 404: 
       $error_manager->set(404, $view_path.'errors/404.php'); 
    break; 
    case 403: 
       $error_manager->set(403, $view_path.'errors/403.php'); 
    break; 
  }
}
 