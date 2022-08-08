<?php

class Consulta extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->peliculas = [];
        $this->view->pelicula = [];
        $this->view->mensaje = '';
        $this->view->error = false;
    }

    function render(){

        $peliculas = $this->model->get();
        $this->view->peliculas = $peliculas;

        $this->view->render('consulta/index');
    }

    function verPelicula($id = null){

        $idPelicula = $id[0];
        $pelicula = $this->model->getById($idPelicula);

        session_start();
        $_SESSION['peliculaNombre'] = $pelicula->nombre;
        $_SESSION['idPelicula'] = $pelicula->id;
        $this->view->pelicula = $pelicula;
        $this->view->render('consulta/verDetalles');
    }

    function actualizarPelicula(){

        session_start();

        $datos = array(

            'pelicula_id' => $_SESSION['idPelicula'],
            'nombre' => $_SESSION['peliculaNombre'],
            'genero' => $_POST['genero'],
            'calidad' => $_POST['calidad']
        );

        session_unset();
        session_destroy();
        
        if($this->model->update($datos)){

            $pelicula = new Pelicula();
            $pelicula->nombre = $datos['nombre'];
            $pelicula->genero = $datos['genero'];
            $pelicula->calidad = $datos['calidad'];

            $mensaje = 'Película actualizada correctamente ';
            $error = false;
        } else{

            $mensaje = "No fue posible la actualización de la película";
            $error = true;
        }

        $this->view->pelicula = $pelicula;
        $this->view->mensaje = $mensaje;
        $this->view->error = $error;
        $this->view->render('consulta/verDetalles');
    }

    function eliminarPelicula(){

    }
}


?>