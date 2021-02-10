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
        
      <div class="text-left col-lg-12">
        

  <center><h1><font style="font-family: 'Righteous', cursive;">Productos</font></h1></center>

<section>
	
<button type="button" class="btn btn-info btn-lg"  data-toggle="modal" data-target="#exampleModal">Crear</button>

<div class="container mt-5">
<div class="row">
    <?php foreach(producto::all() as $producto):  ?>
<div class="col-md-4 align-self-center">
<center>
<div class="card text-center mb-5 shadow p-3 mb-5 bg-white rounded jk" style="width: 18rem;">
<img src="<?= $producto->url_image ?>"class="card-img-top img-fluid" alt="Responsive image" style="max-witch: 100px; min-witch:100px;">
<div class="card-body">
<h5 class="card-title mb-2"><?= $producto->nombre ?></h5>
<p class="card-text"><?= $producto->descripcion ?></p>
<div class="mt-4">
<p class="card-text">Valor U <?= $producto->valor ?></p>
<p class="card-text">Cantidad <?= $producto->cantidad ?></p>
<a href="?controller=productoa&method=edit&id_producto=<?= $producto->id_producto ?>">
<button class="btn btn-success py-2 px-3">Editar</button>

<a href="?controller=productoa&method=delete&id_producto=<?= $producto->id_producto ?>">
<button class="btn btn-danger py-2 px-3">Borrar</button>

</a>
</a>
<?php  if(isset($_SESSION['user']) && $_SESSION['user']->rol_id == "2"): ?>
<?php endif;?>
</div>
</div>
</div>
</center>
</div>
    <?php endforeach; ?>
    </div>
</div>
</section> 

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<form action="?controller=productoa&method=store" method="POST"  enctype="multipart/form-data">
      
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input name="nombre" id="nombre" type="text" class="form-control" required placeholder="Ingrese nombre del producto">
                  </div>
               
                  <div class="form-group">
                    <label for="exampleInputEmail1">Descripción</label>
                    <input name="descripcion" id="descripcion"type="text" class="form-control" required placeholder="Ingrese la descripcion">
                  </div>
              
                  <div class="form-group">
                    <label for="exampleInputEmail1">Cantidad</label>
                    <input type="number" name="cantidad" id="cantidad" class="form-control" required placeholder="Cantidad de productos">
                  </div>
               
                  <div class="form-group">
                    <label for="exampleInputEmail1">Valor</label>
                    <input name="valor" id="valor" type="number" class="form-control" required placeholder="Valor del producto">
                  </div>
               
                  <div class="form-group">
                    <label for="url_image">Imagen</label>
                    <input type="file" name="url_image" id="url_image" class="form-control" placeholder="https://dam.ngenespanol.com/wp-content/uploads/2019/03/luna-colores-nuevo.png" required="required">
                  </div>
                
                
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary col-md-6">Crear</button>
        <button type="button" class="btn btn-danger col-md-6"  data-dismiss="modal">Cerrar</button>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
   