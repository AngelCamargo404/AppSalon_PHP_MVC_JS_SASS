<?php

namespace Controllers;

use Model\Cita;
use Model\Servicio;
use Model\CitaServicio;

class APIController {
    public static function index(){
        $servicios = Servicio::all();
        echo json_encode($servicios);
    }
    
    public static function guardar() {
        
        // Almacena la Cita y devuelve el ID
        $cita = new Cita($_POST);
        $resultado = $cita->guardar();

        $id = $resultado['id'];

        // Almacena la Cita y el Servicio

        $idServicios = explode(",", $_POST['servicios']); // FUNCION IGUAL A SPLIT DE JS

        // Almacena los servicios con el id de la cita
        foreach($idServicios as $idServicio) {
            $args = [
                'citaId' => $id,
                'servicioId' => $idServicio
            ];
            $citaServicio = new citaServicio($args);
            $citaServicio->guardar();
        }

        echo json_encode(['resultado' => $resultado]);
        
    }

    public static function eliminar() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];

            $cita = Cita::find($id);

            $cita->eliminar();

            header('Location: ' . $_SERVER['HTTP_REFERER']);

        }
    }
}