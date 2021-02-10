<?php

class entradaController extends entrada {



public function index(){                
        require_once 'views/admin/layouts/header.php';
         require_once 'views/index/Contacto.php';
        require_once 'views/admin/layouts/footer.php';
    }

    // Mostar la vista del formulario
    public function create(){
        require_once 'views/producto/layouts/header.php';
        require_once 'views/producto/create.php';
        require_once 'views/producto/layouts/footer.php';
    }
  public function store (){
    
      
     echo parent::register($_POST) ? header('location: ?controller=entrada') : 'Error en el registro';

  }

public function edit(){
        $entrada = parent::find($_GET['id']);
        require_once 'views/entrada/layouts/header.php';
        require_once 'views/entrada/edit.php';
        require_once 'views/entrada/layouts/footer.php';
    }

public function update(){
      var_dump(parent::update_register($_POST));
      echo parent::update_register($_GET) ? header('location:?controller=entrada') : 'Error en la actualizacion';


    }
      public function delete(){
         echo parent::delete_register($_GET) ? header('location: ?controller=entrada') : 'Error en la eliminacion';
    }


}
 ?>