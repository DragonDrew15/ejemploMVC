<?php

include_once 'models/usuario.php';

class ConsultaModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function get(){
        $items = [];

        try{

            $query = $this->db->connect()->query("SELECT * FROM usuarios");

            while($row = $query->fetch()){
                $item = new Usuario();
                $item->user_id = $row['user_id'];
                $item->nombre = $row['nombre'];
                $item->correo = $row['correo'];
                $item->curp = $row['curp'];

                array_push($items, $item);
            }

            return $items;

        }catch(PDOException $e){
            return [];
        }
    }

    public function getById($id){
        $item = new Usuario();

        $query = $this->db->connect()->prepare("SELECT * FROM usuarios WHERE user_id = :user_id");

        try{

            $query->execute(['user_id' => $id]);

            while($row = $query->fetch()){
                $item->user_id = $row['user_id'];
                $item->nombre = $row['nombre'];
                $item->correo = $row['correo'];
                $item->curp = $row['curp'];
            }

            return $item;

        }catch(PDOException $e){
            return null;
        }

    }

    public function update($item){

        $query = $this->db->connect()->prepare("UPDATE usuarios SET nombre = :nombre, correo = :correo, curp = :curp WHERE user_id = :user_id");

        try{

            $query->execute([
                'user_id' => $item['user_id'],
                'nombre' => $item['nombre'],
                'correo' => $item['correo'],
                'curp' => $item['curp'],
            ]);

            return true;

        }catch(PDOException $e){

            return false;

        }

    }

    public function delete($id){

        $query = $this->db->connect()->prepare("DELETE FROM usuarios WHERE user_id = :user_id");

        try{

            $query->execute([
                'user_id' => $id
            ]);

            return true;

        }catch(PDOException $e){

            return false;

        }

    }

}

?>