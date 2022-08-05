<?php

class Ayuda extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = 'Esta es la vista de Ayuda Asie 🧐';
        $this->view->render('ayuda/index');
    }


}


?>