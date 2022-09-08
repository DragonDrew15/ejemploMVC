<?php
    class Errores extends Controller{
        function __construct(){
            parent::__construct();
            // echo "<p>Error al Cargar Recurso</p>"; 
            $this->view->mensaje = "Error";
            $this->view->render('errores/index');
        }
        
    }

?>