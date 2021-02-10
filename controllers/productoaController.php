<?php
class productoaController extends producto {

    // Mostar la vista del formulario
    public function create(){
        require_once 'views/admin/product/layouts/header.php';
        require_once 'views/admin/product/productos.php';
        require_once 'views/admin/product/layouts/footer.php';
    }
    public function store (){
    


      $path = 'assets/images/' . $_FILES['url_image']['name'];

      var_dump(move_uploaded_file($_FILES['url_image']['tmp_name'], $path));

      $_POST['url_image'] = $path;
      
     echo parent::register($_POST) ? header('location: ?controller=productoa&method=create') : 'Error en el registro';

  }

public function edit(){
        $producto = parent::find($_GET['id_producto']);

        require_once 'views/admin/product/layouts/header.php';
        require_once 'views/admin/product/edit.php';
        require_once 'views/admin/product/layouts/footer.php';
    }

public function update(){

     $url_path = 'assets/images/' . $_FILES['url_image']['name'];
     var_dump(move_uploaded_file($_FILES['url_image']['tmp_name'], $url_path));

     $_POST['url_image'] = $url_path;

     echo parent::update_register($_POST) ? header('location: ?controller=productoa&method=create') : 'Error en la actualizacion';


    }
      public function delete(){
         echo parent::delete_register($_GET) ? header('location: ?controller=productoa&method=create ') : 'Error en la eliminacion';
    }


}
 ?>