
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
      	
 <center><h1><font style="font-family: 'Righteous', cursive;">Proveedores</font></h1></center>
 <button type="button" class="btn btn-info btn-lg"  data-toggle="modal" data-target="#exampleModal">Crear</button>
<div style="height:50px"></div>
<div class="container">
   <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive">        
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <th>Empresa</th>
        <th>Dirección</th>
        <th>Correo</th>
        <th>Teléfono</th>
        <th>Opciones</th>
    </thead>
    <tbody>
     <?php foreach(proveedor::all() as $proveedor):  ?>
        <tr>
            <td><?= $proveedor->empresa ?></td>
            <td><?= $proveedor->direccion ?></td>
            <td><?= $proveedor->correo ?></td>
            <td><?= $proveedor->num_telefono ?></td>
            <td width="300" class="table__options">
                <center><a href="?controller=proveedor&method=edit&id=<?= $proveedor->id?>">
                <button class="btn btn-success">Editar</button></a></center>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
    </div>
  </div>    
</section>
</div>
</div>
</div>
    
</div>
</div>
</section>  
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Proveedor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="?controller=proveedor&method=store" method="POST">
                   
                  <div class="form-group">
                    <label for="">Empresa</label>
                    <input name="empresa" type="text" class="form-control" required placeholder="Ingrese la empresa">
                  </div>
               
                  <div class="form-group">
                    <label for="">Dirección</label>
                    <input type="text" name="direccion" class="form-control" required placeholder="Ingrese la dirección">
                  </div>
               
                  <div class="form-group">
                    <label for="">Correo</label>
                    <input name="correo" type="email" class="form-control" required placeholder="Ingrese el correo">
                  </div>
               
                  <div class="form-group">
                    <label for="">Teléfono</label>
                    <input name="num_telefono" type="number" class="form-control" required placeholder="Ingrese el teléfono">
                  </div>
               
                 
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary col-md-6">Crear</button>
        <button type="button" class="btn btn-danger col-md-6"  data-dismiss="modal">Cerrar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php  if(isset($_SESSION['user']) && $_SESSION['user']->rol_id == "2"): ?>
<?php endif;?>
 </body>

        


    

   