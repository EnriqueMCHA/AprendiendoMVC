<?php

require_once 'libs/controller.php';

//Errores porque ya php cuenta con una clase Error()
class Errores extends Controller{

    function __construct()
    {

        parent::__construct();
        $this->view->mensaje = 'La solicutud no ha sido procesada correctamente o la página no existe 😢';
        $this->view->render('errores/index');
        //echo '<p>Error al cargar el recurso</p>';
    }
}
