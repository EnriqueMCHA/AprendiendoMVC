<?php 

require_once 'libs/controller.php';

class Main extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = 'Esta es la vista de Main Asie 😎';
        $this->view->render('main/index');
        //echo '<p>Nuevo controlador main</p>';
    }

    function saludo(){
        echo '<p>Estoy en main ejecutando el metodo saludo</p>';
    }

}

?>