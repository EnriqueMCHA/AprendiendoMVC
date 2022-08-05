<?php

class Consulta extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = 'Esta vista será para las consultas 👀';
        $this->view->render('consulta/index');
    }


}


?>