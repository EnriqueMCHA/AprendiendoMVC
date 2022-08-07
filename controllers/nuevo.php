<?php

class Nuevo extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = 'Esta vista será para cualquier cosa idk 😬';
        $this->view->render('nuevo/index');
    }

    function registrarPelicula(){

        //Para validar los datos hacerlo en el controller para que el model solo reciba la info ya procesada

        $datos = array(

            'nombre' => $_POST['nombre'],
            'genero' => $_POST['genero'],
            'calidad' => $_POST['calidad']
        );

        if($this->model->insert($datos)){
            echo 'Película agregada exitosamente!';
        }
        

    }

}


?>