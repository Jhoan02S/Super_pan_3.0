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
        <p>Ingresaste a la zona de edicion de productos, aca podras editar la cantidad precio u otras opciones dentro del producto</p> 
      </div>
          <div class="col-md-6 align-self-center">   
            <div class="col-mb-5 text-center heading-section">
              <h2 style="font-family: 'Righteous', cursive;">Edicion de la factura</h2>
            </div> 
            <form action="?controller=facturaa&method=update" method="POST" enctype="multipart/form-data">
               <input name="id" type="hidden"value="<?= $factura->id?>">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Fecha</label>
                    <input  name="fecha" id="fecha" type="date" class="form-control" required value="<?= $factura->fecha ?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Codigo</label>
                    <input type="text" name="cod_producto" id="codigo" class="form-control"required value="<?= $factura->cod_producto ?>">
                  </div>
                </div>
               
                <div class="col-md-6">
                <div class="form-group">
                    <label for="">Producto</label>
                     <div class="select-wrap one-third">
                        <select  name="producto" id="" class="form-control" required  value="<?= $factura->producto ?>">
                        <option value="">Seleccione una opción</option> 
                        <?php foreach(producto::all() as $producto): ?>
                        <option value="<?=$producto->id_producto?>"><?=$producto->nombre?></option>
                        <?php  endforeach; ?>
                        </select>
                      </div>
                  </div>
                 </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Cantidad</label>
                    <input name="cantidad" id="cantidad" type="number" class="form-control" required value="<?= $factura->cantidad?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Valor</label>
                    <input name="valor" id="valor" type="number" class="form-control"  required value="<?= $factura->valor?>">
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