<?php

require_once 'View.php';
require_once 'Route.php';
require_once 'routes.php';

Route::use($_SERVER['REQUEST_METHOD'], urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));