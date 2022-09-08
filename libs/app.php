<?php
require_once 'controllers/errores.php';

class App{
    
    function __construct(){
        // echo "<p>Nueva App</p>";

        $url = isset($_GET['url']) ? $_GET['url'] : "main";
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        $archivoController = 'controllers/' . $url[0] . '.php';
        
        if (file_exists($archivoController)) {
            require_once $archivoController;

            // Inicializar controlador
            $controller = new $url[0];
            $controller->loadModel($url[0]);

            //num de elementos del arreglo
            $nParams = sizeof($url);

            if($nParams > 1){
                if($nParams > 2){
                    $param = [];
                    for($i = 2; $i < $nParams; $i++){
                        array_push($param, $url[$i]);
                    }
                    $controller->{$url[1]}($param);
                }else{
                    $controller->{$url[1]}();
                }
            }else{
                $controller->render();
            }

            // if(isset($url[1])){
            //     $controller->{$url[1]}();
            // }
        }else{
            $controller = new Errores();
        }
    }
}

?> 