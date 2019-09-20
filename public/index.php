<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

switch ($_SERVER['REQUEST_URI']) {
    case '/' :
        require '../pages/home.php';
        break;
    case '/vueltas' :
        require '../pages/vueltas.php';
        break;
    case '/formulario':
        require '../pages/formulario.php';
        break;
    default:
        require '../pages/404.php';
        break;
}