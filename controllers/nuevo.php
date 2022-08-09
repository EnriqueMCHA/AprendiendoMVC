<?php

class Nuevo extends Controller{

    function __construct(){

        parent::__construct();
        $this->view->mensaje = '';
        $this->view->error = false;
    }

    function render(){
        $this->view->render('nuevo/index');
    }

    function registrarPelicula(){

        //Para validar los datos hacerlo en el controller para que el model solo reciba la info ya procesada

        $datos = array(

            'nombre' => $_POST['nombre'],
            'genero' => $_POST['genero'],
            'calidad' => $_POST['calidad']
        );

        if (!empty($datos['nombre'])) {

            if ($this->model->insert($datos)) {

                $mensaje = 'Película agregada exitosamente! ✔';
                $error = false;
            } else {

                $mensaje = 'La película ingresada ya existe ❌';
                $error = true;
            }

            $this->view->mensaje = $mensaje;
            $this->view->error = $error;
            $this->render();
        } else {

            $this->view->mensaje = 'El campo de la película no puede ir vacio 🙄';
            $this->view->error = true;
            $this->render();
        }
    }
}
