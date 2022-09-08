<?php

class Ayuda extends Controller{

    function __construct(){
        parent::__construct();
        // echo "<p>Nuevo controlador Ayuda</p>";
        // $this->view->render('ayuda/index');
    }

    function render(){
        $this->view->render('ayuda/index');
    }

    /* function saludo(){
        echo "<p>Ejecutaste el método Saludo</p>";
    } */
}

?>