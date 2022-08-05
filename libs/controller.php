<?php

//Deberia hacer un require del archivo de la clase View(); (?)

class Controller{

    function __construct(){
        
        //echo '<p>Controlador principal</p>';
        $this->view = new View();
    }

    function loadModel($model){
        $url = 'models/' . $model . 'model.php';

        if(file_exists($url)){
            require $url;

            $modelName =  $model . 'Model';
            $this->model = new $modelName();
        }
    }
}

?>