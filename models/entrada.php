<?php
//Herencia
class entrada extends Database{

    public function all(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM producto");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function register($data){
        try{
            $result = parent::connect()->prepare("INSERT INTO producto (nombre, descripcion, cantidad, valor, url_image) VALUES (?,?,?,?,?)");
            $result->bindParam(1, $data['nombre'], PDO::PARAM_STR);
            $result->bindParam(2, $data['descripcion'], PDO::PARAM_STR);
            $result->bindParam(3, $data['cantidad'], PDO::PARAM_INT);
            $result->bindParam(4, $data['valor'], PDO::PARAM_INT);
            $result->bindParam(5, $data['url_image'], PDO::PARAM_STR);
            return $result->execute();
        }catch (Exception $e){
           die("Error producto->register() " . $e->getMessage());
        }
    }

    public function find($id){
        try{
            $result = parent::connect()->prepare("SELECT * FROM producto WHERE id = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function update_register($data){
        try{
            $result = parent::connect()->prepare("UPDATE producto SET nombre = ?, descripcion = ?, cantidad = ?, valor= ?, url_image = ? WHERE id = ?");
            $result->bindParam(1, $data['nombre'], PDO::PARAM_STR);
            $result->bindParam(2, $data['descripcion'], PDO::PARAM_STR);
            $result->bindParam(3, $data['cantidad'], PDO::PARAM_INT);
            $result->bindParam(4, $data['valor'], PDO::PARAM_INT);
            $result->bindParam(5, $data['url_image'], PDO::PARAM_STR);
            $result->bindParam(6, $data['id'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("Error producto->update_register() " . $e->getMessage());
        }
    }
    public function delete_register($data){
        try{
            $result = parent::connect()->prepare("DELETE FROM producto WHERE id = ?");
            $result->bindParam(1, $data['id'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("Error producto->update_register() " . $e->getMessage());
        }
    }
}
