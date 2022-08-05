<?php

require_once 'controllers/errores.php';

class App{

    function __construct(){
        //echo '<p>estoy en app</p>';

        $url = (isset($_GET['url'])) ? $_GET['url'] : null;
        $url = rtrim($url,'/');
        $url = explode('/',$url);

        //Validamos que si no se está enviando nada por la url, lo redirija al main
        if(empty($url[0])){

            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main();
            $controller->loadModel('main');
            return false;
        }

        // echo '<pre>';
        // var_dump($url);
        // echo '</pre>';

        $archivoController = 'controllers/' . $url[0] . '.php';

        //Validamos que el controlador exista, caso contrario llamamos al error
        if(file_exists($archivoController)){
            require_once $archivoController;
            $controller = new $url[0];
            $controller->loadModel($url[0]);

            if(isset($url[1])){
                $controller->{$url[1]}();
            } 
        } else{
            $controller = new Errores();
        }
        
    }


}


?>