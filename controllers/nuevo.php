<?php

class Nuevo extends Controller{

    function __construct(){
        parent::__construct();
        // echo "<p>Nuevo controlador Nuevo</p>";
        
    }

    function render(){
        $this->view->message = "";
        $this->view->render('nuevo/index');
    }

    function registrarUsuario(){
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $curp = $_POST['curp'];

        $message = "";

        if($this->model->insert(['nombre' => $nombre, 'correo' => $correo, 'curp' => $curp])){
            $message = "<br>Datos Insertados<br>";
        }else{
            $message = "<br>Hubo un error al crear el Registro<br>";
        }

        $this->view->message = $message;
        $this->render();
    
        // echo "Usuario Registrado!";
        // $this->model->insert();
    }
}

?>