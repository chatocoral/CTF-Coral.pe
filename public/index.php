<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$url = parse_url($_SERVER['REQUEST_URI']);

if (isset($url['query'])) {
    parse_str($url['query'],$query);
}

$p = explode('/', $url['path']);

switch ($p[1]) {
    case '' :
        require '../pages/home.php';
        break;
    case 'vueltas' :
        require '../pages/vueltas.php';
        break;
    case 'formulario':
        require '../pages/formulario.php';
        break;
    case 'tienda':
        require '../pages/tienda.php';
        break;
    case 'producto':
        require '../pages/producto.php';
        break;
    case 'admin':
        require '../pages/admin.php';
        break;
    case 'pagina-escondida':
        require '../pages/pagina-escondida.php';
        break;
    default:
        require '../pages/404.php';
        break;
}