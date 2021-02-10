<?php

class securityController extends security {
     public function login(){

        $user = parent::validateLogin($_POST['email']);

        if(!is_object($user)) return header('location:?controller=index');

       if(password_verify($_POST['password'], $user->password)){
           $_SESSION['user'] = $user;
           
           if($_SESSION['user']->rol_id == 1){
           	     return header('Location:?controller=user&method=admin');
           }else if($_SESSION['user']->rol_id == 2) {
               return header('location:?controller=user&method=employe');
       }
      
       } else {
       	return header ('location:?controller=index');
       }
    
}
    public function logout(){
        unset($_SESSION['user']);
        session_destroy();
        header('location:?controller=index');
    }

}