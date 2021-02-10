<?php
//Herencia
class factura extends Database{

    public function all(){
        try{

        	$result = parent::connect()->prepare("SELECT factura.id,factura.fecha,factura.cod_producto, factura.producto, factura.cantidad, factura.valor,factura.funcionario,producto.nombre,users.name FROM factura INNER JOIN producto ON producto.id_producto=factura.producto INNER JOIN users ON users.id=factura.funcionario");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    

    public function register($data){
        try{
            $result = parent::connect()->prepare("INSERT INTO factura (fecha, cod_producto, producto, cantidad, valor,funcionario) VALUES (?,?,?,?,?,?)");
            $result->bindParam(1, $data['fecha'], PDO::PARAM_STR);
            $result->bindParam(2, $data['cod_producto'], PDO::PARAM_INT);
            $result->bindParam(3, $data['producto'], PDO::PARAM_STR);
            $result->bindParam(4, $data['cantidad'], PDO::PARAM_INT);
            $result->bindParam(5, $data['valor'], PDO::PARAM_INT);
            $result->bindParam(6, $data['funcionario'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
           die("Error factura->register() " . $e->getMessage());
        }
    }

    public function find($id){
        try{
            $result = parent::connect()->prepare("SELECT * FROM factura WHERE id = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function update_register($data){
        try{
            $result = parent::connect()->prepare("UPDATE factura SET fecha = ?, cod_producto = ?, producto = ?, cantidad = ?, valor = ? WHERE id = ?");
            $result->bindParam(1, $data['fecha'], PDO::PARAM_STR);
            $result->bindParam(2, $data['cod_producto'], PDO::PARAM_INT);
            $result->bindParam(3, $data['producto'], PDO::PARAM_STR);
            $result->bindParam(4, $data['cantidad'], PDO::PARAM_INT);
            $result->bindParam(5, $data['valor'], PDO::PARAM_INT);
            $result->bindParam(6, $data['id'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("Error factura->update_register() " . $e->getMessage());
        }
    }
    public function delete_register($data){
        try{
            $result = parent::connect()->prepare("DELETE FROM factura WHERE id = ?");
            $result->bindParam(1, $data['id'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("Error factura->update_register() " . $e->getMessage());
        }
    }
}
