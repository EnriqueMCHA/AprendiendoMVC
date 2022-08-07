<?php

class Consulta extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->peliculas = [];
        $this->view->mensaje = '';
    }

    function render(){
        $peliculas = $this->model->get();
        $this->view->peliculas = $peliculas;

        $this->view->render('consulta/index');
    }

}


?>