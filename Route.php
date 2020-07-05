<?php
class Route {

	public static $routes = array();

	public static function post($route, $function) {
		self::$routes['POST'][$route] = $function;
	}

	public static function get($route, $function) {
		self::$routes['GET'][$route] = $function;
	}

	public static function use($method, $route) {
		$key = self::$routes[$method][$route];
		if(!isset($key)) {
		 	View::page('public/404.php');
		} else {
		 	$key();
		}
	}
}
?>