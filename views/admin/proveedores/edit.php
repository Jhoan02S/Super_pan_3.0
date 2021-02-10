<body>
<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand text-center Oswald" href="?controller=user&method=admin" style="font-size: 25px;">Super Pan <br> La Castellana</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="row">
    <div class="collapse navbar-collapse " id="navbarSupportedContent-333">
      <ul class="navbar-nav mr-auto d-flex justify-content-between">
        <i class="nav-item material-icons">
          <a href="?controller=user&method=admin" class="nav-link" style="color: white;">home</a>
            <span class="sr-only">(current)</span>
        </i>
        <i class="nav-item">
          <a href="?controller=productoa&method=create" class="nav-link Oswald">Productos</a>
        </i>
        <i class="nav-item">
          <a href="?controller=facturaa&method=create" class="nav-link Oswald">Factura</a>
        </i>
         <i class="nav-item">
          <a href="?controller=proveedor&method=create" class="nav-link Oswald">Proveedores</a>
        </i>
        <i class="nav-item">
          <a href="?controller=index&method=register" class="nav-link Oswald">Empleados</a>
        </i>
        <i class="nav-item material-icons">
          <a href="?controller=security&method=logout" class="nav-link" style="color: white;">block</a>
        </i>
      </ul>
    </div>
  </div>
  </div>
</nav>
<!--/.Navbar -->
<section>
  <div class="container p-5 mb-5">
    <div class="row">
      <div class="text-left col-md-6">
        <h1>
          <font style="font-family: 'Righteous', cursive;">Bienvenido<br> Super Pan la castellana</font>
        </h1>
        <p>Ingresaste a la zona de edicion de proveedores, podras editar la empresa, teléfono u otras opciones dentro del proveedor</p> 
      </div>
          <div class="col-md-6 align-self-center">   
            <div class="col-mb-5 text-center heading-section">
              <h2 style="font-family: 'Righteous', cursive;">Edicion de proveedor</h2>
            </div> 
            <form action="?controller=proveedor&method=update" method="POST">
               <input name="id" type="hidden"value="<?= $proveedor->id?>">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="empresa">Empresa</label>
                    <input name="empresa" id="empresa" type="text" class="form-control" required placeholder="Ingrese la empresa" required value="<?= $proveedor->empresa ?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input name="direccion" id="direccion" type="text" class="form-control" required placeholder="Ingrese la dirección" required value="<?= $proveedor->direccion ?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="correo">Correo</label>
                    <input type="email" name="correo" id="correo" class="form-control" required placeholder="Ingrese el correo" required value="<?= $proveedor->correo ?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="num_telefono">Teléfono</label>
                    <input name="num_telefono" id="num_telefono" type="text" class="form-control" required placeholder="Valor del producto" required value="<?= $proveedor->num_telefono?>">
                  </div>
                </div>
                
                <div class="col-md-12 mt-3">
                  <div class="form-group">
                    <center><button type="submit" value="Actualizar" class="btn btn-warning py-3 px-5">Aceptar</button>
                    </center>
                  </div>
                </div>
              </div>
            </form>
    </div>  
  </div>          
</section>