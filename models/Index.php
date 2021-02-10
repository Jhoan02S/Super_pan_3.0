<?php
class index extends Database{

    public function all(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM producto");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}