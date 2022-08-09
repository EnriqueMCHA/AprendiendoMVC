<?php

require_once 'libs/controller.php';

class Main extends Controller{

    function __construct(){

        parent::__construct();
        $this->view->mensaje = 'En este momento te encuentras en la vista main asie 😎';
        //echo '<p>Nuevo controlador main</p>';
    }

    function render(){
        $this->view->render('main/index');
    }

    function saludo(){
        echo '<p>Estoy en main ejecutando el metodo saludo</p>';
    }
}
