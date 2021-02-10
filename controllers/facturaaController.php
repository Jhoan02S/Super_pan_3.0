<?php

class facturaaController extends factura{

    // Mostar la vista del formulario
        public function create(){
        require_once 'views/admin/layouts/header.php';
        require_once 'views/admin/factura/factura.php';
        require_once 'views/admin/layouts/footer.php';
    }

    //'Validaciones e interaccion model
    public function store(){

        echo parent::register($_POST) ? header('location:?controller=facturaa&method=create') : 'Error en el registro';
    }

    //consultar y luego mostrar la informacion en el formulario
    public function edit(){
        $factura = parent::find($_GET['id']);
        require_once 'views/admin/layouts/header.php';
        require_once 'views/admin/factura/edit.php';
        require_once 'views/admin/layouts/footer.php';

    }

    //Validaciones e interaccion model
    public function update(){
        var_dump(parent::update_register($_POST) ? header('location:?controller=facturaa&method=create'): 'Error al actualizar');

        die();
    }


    //
    public function delete(){
        echo parent::delete_register($_GET) ? header('location:?controller=facturaa&method=create') : 'Error en la eliminacion';
    }
}