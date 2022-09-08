<?php

class NuevoModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insert($data){
        // Insertar Datos en la BD

        try{
            $query = $this->db->connect()->prepare('INSERT INTO usuarios (user_ID, nombre, correo, curp) VALUES (:user_ID, :nombre, :correo, :curp)');
            $query->execute(['user_ID' => $data['curp'], 'nombre' => $data['nombre'], 'correo' => $data['correo'], 'curp' => $data['curp']]);
            // echo "Datos Insertados";
            return true;
        }
        catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }

        

    }

}

?>