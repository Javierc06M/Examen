<?php

    include '../config/app.php';

    $uri = $_SERVER['REQUEST_URI'];

    if($uri == '/arquitectura/examen/public/'){
        require_once '../views/inicio.php';
    }elseif($uri == '/arquitectura/examen/public/ejercicio01'){
    require_once '../views/ejercicio01.php';
    }elseif($uri == '/arquitectura/examen/public/ejercicio02'){
    require_once '../views/ejercicio02.php';
    } elseif($uri == '/arquitectura/examen/public/ejercicio03'){
    require_once '../views/ejercicio03.php';
    }else {
        echo 'Pagina no encontrada';
    }

    ?>