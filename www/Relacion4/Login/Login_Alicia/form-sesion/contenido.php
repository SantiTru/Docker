<?php
session_start();

if (isset($_SESSION['usuario'])) {
    require 'views/contenido.view.php';
} else {
    require 'views/login.view.php';
    //require 'views/contenido.view.php';
}
?>
