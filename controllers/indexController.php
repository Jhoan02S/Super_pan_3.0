<?php

class indexController{

  public function __construct(){

  }

  public function index(){
    require_once 'views/index/layouts/header.php';
    require_once 'views/index/index.php';
    require_once 'views/index/layouts/footer.php';
  }

  public function contacto(){
    require_once 'views/index/layouts/header.php';
    require_once 'views/index/contacto.php';
    require_once 'views/index/layouts/footer.php';
  }
  public function login(){
    require_once 'views/index/layouts/header.php';
    require_once 'views/index/login.php';
    require_once 'views/index/layouts/footer.php';
  }
  public function register(){
    require_once 'views/index/layouts/header.php';
    require_once 'views/admin/empleados/register.php';
    require_once 'views/index/layouts/footer.php';
  }

  public function singup(){
    require_once 'views/layouts/header.php';
    require_once 'views/layouts/navbar.php';
    require_once 'views/index/singup.php';
    require_once 'views/layouts/footer.php';
  }
}


 ?>
