<?php

define('TEMPLATES_URL', __DIR__ . '/templates');
define('FUNCIONES_URL', __DIR__ . 'funciones.php');
define('CARPETA_IMAGENES', $_SERVER['DOCUMENT_ROOT'] . '/imagenes/');

function incluirTemplate(string $nombre, bool $inicio = false){
    include TEMPLATES_URL . "/${nombre}.php";
}

function estaAutenticado(){
    session_start();

    if(!$_SESSION['login']){
        header('Location: /index.php');
    }
}

function debuguear($variable){
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// - - - - Escapa/Sanitiza el HTML - - - - //
function s($html) : string{ 
    $s = htmlspecialchars($html);
    return $s;
}

function validarTipoContenido($tipo){
    $tipos = ['vendedor', 'propiedad'];

    return in_array($tipo, $tipos);
}

function mostrarNotificacion($codigo){
    $mensaje = '';

    switch( $codigo ){
        case 1:
            $mensaje = 'Datos Creados Correctamente';
            break;
        case 2:
            $mensaje = 'Datos Actualizados Correctamente';
            break;
        case 3:
            $mensaje = 'Datos Eliminados Correctamente';
            break;
        default:
            $mensaje = false;
            break;
    }
    return $mensaje;
}

function validarORedireccionar(string $url){
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    if(!$id){
        header('Location: ${url}');
    }

    return $id;
}