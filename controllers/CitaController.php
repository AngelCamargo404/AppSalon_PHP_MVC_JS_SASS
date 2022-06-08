<?php

namespace Controllers;

use MVC\Router;

class CitaController {

    public static function index(Router $router){
        $_SESSION['nombre'];

        if(!isset($_SESSION)){
            session_start();
        }

        $router->render('cita/index', [
            'nombre' => $_SESSION['nombre']
        ]);
    }

}