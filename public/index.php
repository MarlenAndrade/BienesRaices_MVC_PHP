<?php 
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\PropiedadController;
use Controllers\VendedorController;
use Controllers\PaginasController;
use Controllers\LoginController;

$router = new Router();

// . . . ZONA PRIVADA . . . //
// - - -  (/Visita URL, [Controlador asciado a la URL, y tiene un método]) - - - //
$router->get('/admin', [PropiedadController::class, 'index']);
$router->get('/propiedades/crear', [PropiedadController::class, 'crear']);
$router->post('/propiedades/crear', [PropiedadController::class, 'crear']);
$router->get('/propiedades/actualizar', [PropiedadController::class, 'actualizar']);
$router->post('/propiedades/actualizar', [PropiedadController::class, 'actualizar']);
$router->post('/propiedades/eliminar', [PropiedadController::class, 'eliminar']);

$router->get('/vendedores/crear', [VendedorController::class, 'crear']);
$router->post('/vendedores/crear', [VendedorController::class, 'crear']);
$router->get('/vendedores/actualizar', [VendedorController::class, 'actualizar']);
$router->post('/vendedores/actualizar', [VendedorController::class, 'actualizar']);
$router->post('/vendedores/eliminar', [VendedorController::class, 'eliminar']);

// . . . ZONA PÚBLICA . . . //
$router->get('/', [PaginasController::class, 'index']);
$router->get('/nosotros', [PaginasController::class, 'nosotros']);
$router->get('/propiedades', [PaginasController::class, 'propiedades']);
$router->get('/propiedad', [PaginasController::class, 'propiedad']);
$router->get('/blog', [PaginasController::class, 'blog']);
$router->get('/entrada1', [PaginasController::class, 'entrada1']);
$router->get('/entrada2', [PaginasController::class, 'entrada2']);
$router->get('/entrada3', [PaginasController::class, 'entrada3']);
$router->get('/entrada4', [PaginasController::class, 'entrada4']);
$router->get('/error404', [PaginasController::class, 'error404']);
$router->get('/contacto', [PaginasController::class, 'contacto']);
$router->post('/contacto', [PaginasController::class, 'contacto']);

// . . . LOGIN Y AUTENTICACIÓN . . . //
$router->get('/login', [LoginController::class, 'login']); //mostrar formulario
$router->post('/login', [LoginController::class, 'login']); //enviar datos al formulario
$router->get('/logout', [LoginController::class, 'logout']); //cerrar sesión

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();