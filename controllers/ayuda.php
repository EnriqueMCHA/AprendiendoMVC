<?php

class Ayuda extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = 'No tengo ninguna ayuda para tí, espero haberte ayudado 🧐';
    }

    function render(){
        $this->view->render('ayuda/index');
    }


}


?>