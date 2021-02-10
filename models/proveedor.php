<?php
//Herencia
class proveedor extends Database{

    public function all(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM proveedor");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function register($data){
        try{
            $result = parent::connect()->prepare("INSERT INTO proveedor (empresa, direccion, correo, num_telefono) VALUES (?,?,?,?)");
            $result->bindParam(1, $data['empresa'], PDO::PARAM_STR);
            $result->bindParam(2, $data['direccion'], PDO::PARAM_STR);
            $result->bindParam(3, $data['correo'], PDO::PARAM_STR);
            $result->bindParam(4, $data['num_telefono'], PDO::PARAM_STR);
            return $result->execute();
        }catch (Exception $e){
           die("Error proveedor->register() " . $e->getMessage());
        }
    }

    public function find($id){
        try{
            $result = parent::connect()->prepare("SELECT * FROM proveedor WHERE id = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function update_register($data){
        try{
            $result = parent::connect()->prepare("UPDATE proveedor SET empresa = ?, direccion = ?, correo = ?, num_telefono = ? WHERE id = ?");
            $result->bindParam(1, $data['empresa'], PDO::PARAM_STR);
            $result->bindParam(2, $data['direccion'], PDO::PARAM_STR);
            $result->bindParam(3, $data['correo'], PDO::PARAM_STR);
            $result->bindParam(4, $data['num_telefono'], PDO::PARAM_STR);
            $result->bindParam(5, $data['id'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("Error proveedor->update_register() " . $e->getMessage());
        }
    }
    public function delete_register($data){
        try{
            $result = parent::connect()->prepare("DELETE FROM proveedor WHERE id = ?");
            $result->bindParam(1, $data['id'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("Error proveedor->update_register() " . $e->getMessage());
        }
    }
}
