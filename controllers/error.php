<?php

require_once 'libs/controller.php';

//Errorr con dos "R" porque ya php cuenta con una clase Error()
class Errorr extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = 'Esta es la vista de Error "dinamica" Asie 😢';
        $this->view->render('error/index');
        //echo '<p>Error al cargar el recurso</p>';
    }
}


?>