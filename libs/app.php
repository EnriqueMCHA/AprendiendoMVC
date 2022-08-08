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
            $controller->render();
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
            //$controller->render(); Esto funciona perfactamente pero el men no lo coloco aquí

            $nParametros = sizeof($url);

             // //Validamos que se esté enviando un metodo aparte si se están enviando parametros

            if($nParametros > 1){

                if($nParametros > 2){

                    $parametros = [];

                    for($i = 2; $i < $nParametros; $i++){

                        array_push($parametros, $url[$i]);
                    }

                    $controller->{$url[1]}($parametros);
                }else{

                    $controller->{$url[1]}();
                }
            } else{
                $controller->render();
            }

            // //Validamos que se esté enviando un metodo
            // if(isset($url[1])){
            //     $controller->{$url[1]}();
            // } else{
            //     $controller->render();
            // }

        } else{
            $controller = new Errores();
        }
        
    }


}


?>