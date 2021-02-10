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
               </i>
        <i class="nav-item">
          <a href="?controller=producto&method=create" class="nav-link Oswald">Productos</a>
        </i>
        <i class="nav-item">
          <a href="?controller=factura&method=create" class="nav-link Oswald">Factura</a>
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
        <p>Ingresaste a la zona de edicion de productos, aca podras editar la cantidad precio u otras opciones dentro del producto</p> 
      </div>
          <div class="col-md-6 align-self-center">   
            <div class="col-mb-5 text-center heading-section">
              <h2 style="font-family: 'Righteous', cursive;">Edicion de producto</h2>
            </div> 
            <form action="?controller=producto&method=update" method="POST" enctype="multipart/form-data">
               <input name="id_producto" type="hidden"value="<?= $producto->id_producto?>">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input name="nombre" id="nombre" type="text" class="form-control" required placeholder="Ingrese nombre del producto" required value="<?= $producto->nombre ?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <input name="descripcion" id="descripcion" type="text" class="form-control" required placeholder="Ingrese la descripcion" required value="<?= $producto->descripcion ?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="cantidad">Cantidad</label>
                    <input type="text" name="cantidad" id="cantidad" class="form-control" required placeholder="Cantidad de productos" required value="<?= $producto->cantidad ?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="valor">Valor</label>
                    <input name="valor" id="valor" type="text" class="form-control" required placeholder="Valor del producto" required value="<?= $producto->valor?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="url_image">Imagen</label>
                    <input type="file" name="url_image" id="url_image" class="form-control" placeholder="https://dam.ngenespanol.com/wp-content/uploads/2019/03/luna-colores-nuevo.png" required value="<?= $producto->url_image ?>">
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