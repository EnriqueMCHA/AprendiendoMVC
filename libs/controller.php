<?php

//Deberia hacer un require del archivo de la clase View(); (?)

class Controller{

    function __construct(){
        
        //echo '<p>Controlador principal</p>';
        $this->view = new View();
    }


}

?>