<?php

  class userController extends user{

    //public function __construct()
    //{
     //   Security::verifyUser();
    //}


    public function employe(){
        require_once 'views/employee/layouts/header.php';
        require_once 'views/employee/index.php';
        require_once 'views/employee/layouts/footer.php';
    }

    public function admin(){
        require_once 'views/admin/layouts/header.php';
        require_once 'views/admin/index.php';
        require_once 'views/admin/layouts/footer.php';
    }

    public function store(){
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        echo parent::register($_POST) ? header('location:?controller=index&method=register') : 'Error en el registro';
      }

    //consultar y luego mostrar la informacion en el formulario
    public function edit(){
        $user = parent::find($_GET['id']);
        require_once 'views/index/layouts/header.php';
        require_once 'views/admin/empleados/edit.php';
        require_once 'views/index/layouts/footer.php';
    }

    //Validaciones e interaccion model
   
    public function update(){
        var_dump(parent::update_register($_POST) ? header('location:?controller=index&method=register'): 'Error al actualizar');
    }

    //
    public function delete(){

    }
  }


?>
