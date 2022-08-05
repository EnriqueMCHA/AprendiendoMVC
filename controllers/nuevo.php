<?php

class Nuevo extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = 'Esta vista será para cualquier cosa idk 😬';
        $this->view->render('nuevo/index');
    }


}


?>