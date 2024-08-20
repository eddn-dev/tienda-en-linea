<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\apiController;
use Controllers\siteController;
use MVC\Router;

$router = new Router();

$router->get('/', [siteController::class, 'index']);
$router ->get('/cart', [siteController::class, 'cart']);
$router ->get('/product', [siteController::class, 'product']);
$router ->get('/promotions', [siteController::class, 'promotions']);

$router->get('/api/productos', [apiController::class, 'productos']);

$router->checkRoutes();