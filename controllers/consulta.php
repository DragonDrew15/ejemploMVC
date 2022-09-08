<?php

class Consulta extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->usuarios = [];
        // echo "<p>Nuevo controlador Consulta</p>";
        // $this->view->render('consulta/index');
    }

    function render(){
        $usuarios = $this->model->get();
        $this->view->usuarios = $usuarios;
        $this->view->render('consulta/index');
    }

    function verUsuario($param = null){
        // var_dump($param);
        $user_id = $param[0];
        $usuario = $this->model->getById($user_id);

        session_start();
        $_SESSION['id_verUsuario'] = $usuario->user_id;
        
        $this->view->usuario = $usuario;
        $this->view->message = "";
        $this->view->render('consulta/detalle');

    }

    function actualizarUsuario(){
        session_start();
        $user_id = $_SESSION['id_verUsuario'];
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $curp = $_POST['curp'];

        unset($_SESSION['id_verUsuario']);
        if($this->model->update(['user_id' => $user_id, 'nombre' => $nombre, 'correo' => $correo, 'curp' => $curp])){
            //success
            $usuario = new Usuario();
            $usuario->user_id = $user_id;
            $usuario->nombre = $nombre;
            $usuario->correo = $correo;
            $usuario->curp = $curp;

            $this->view->usuario = $usuario;
            $this->view->message = "Exito";

        }else{
            //error
            $this->view->message = "Error al actualizar";

        }
        $this->view->render('consulta/detalle');
    }

    function eliminarUsuario($param = null){
        // var_dump($param);
         $user_id = $param[0];

        if($this->model->delete($user_id)){
            //success
            // $this->view->message = "Usuario Eliminado";
            $message = "Usuario Eliminado";

        }else{
            //error
            // $this->view->message = "Error al eliminar";
            $message = "Error al eliminar";

        }
        // $this->render();

            echo $message;
            // echo "Se elimino " . $user_id;

    }
}

?>