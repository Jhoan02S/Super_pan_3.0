<?php
class user extends Database{

    public function all(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM users INNER JOIN rol ON rol.id_rol=users.rol_id INNER JOIN estado ON estado.id_estado=users.estado ");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function register($data){
        try{
            $result = parent::connect()->prepare("INSERT INTO users (name, surname, user, email, password, rol_id,estado ) VALUES (?,?,?,?,?,?,?)");
            $result->bindParam(1, $data['name'], PDO::PARAM_STR);
            $result->bindParam(2, $data['surname'], PDO::PARAM_STR);
            $result->bindParam(3, $data['user'], PDO::PARAM_STR);
            $result->bindParam(4, $data['email'], PDO::PARAM_STR);
            $result->bindParam(5, $data['password'], PDO::PARAM_STR);
            $result->bindParam(6, $data['rol_id'], PDO::PARAM_INT);
            $result->bindParam(7, $data['estado'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
           die("Error User->register() " . $e->getMessage());
        }
    }

    public function find($id){
        try{
            $result = parent::connect()->prepare("SELECT * FROM users WHERE id = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function update_register($data){
        try{
            $result = parent::connect()->prepare("UPDATE users SET name = ?, surname = ?, user =?, email = ?, rol_id = ?, estado = ? WHERE id = ?");
            $result->bindParam(1, $data['name'], PDO::PARAM_STR);
            $result->bindParam(2, $data['surname'], PDO::PARAM_STR);
            $result->bindParam(3, $data['user'], PDO::PARAM_STR);
            $result->bindParam(4, $data['email'], PDO::PARAM_STR);
            $result->bindParam(5, $data['rol_id'], PDO::PARAM_INT);
            $result->bindParam(6, $data['estado'], PDO::PARAM_INT);
            $result->bindParam(7, $data['id'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("Error User->update_register() " . $e->getMessage());
        }
    }
    public function delete_register($data){
        try{
            $result = parent::connect()->prepare("DELETE FROM users WHERE id = ?");
            $result->bindParam(1, $data['id'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("Error User->update_register() " . $e->getMessage());
        }
    }
}


