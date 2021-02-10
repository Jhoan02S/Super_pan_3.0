
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
        

      <div class="text-left col-lg-12">
      	
 <center><h1><font style="font-family: 'Righteous', cursive;">Facturas</font></h1></center>
 <button type="button" class="btn btn-info btn-lg"  data-toggle="modal" data-target="#exampleModal">Crear</button>

<div style="height:50px"></div>
<div class="container">
   <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive">        
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <th>Fecha</th>
        <th>Producto</th>
        <th>Cantidad</th>
        <th>Valor</th>
        <th>Funcionario</th>
        <th>Opciones</th>
    </thead>
    <tbody>
     <?php foreach(factura::all() as $factura):  ?>
        <tr>
            <td><?= $factura->fecha ?></td>
            <td><?= $factura->nombre ?></td>
            <td><?= $factura->cantidad ?></td>
            <td><?= $factura->valor ?></td>
            <td><?= $factura->name ?></td>
            <td width="300" class="table__options">
                <center><a href="?controller=facturaa&method=edit&id=<?= $factura->id?>">
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
        <h5 class="modal-title" id="exampleModalLabel">Crear Factura</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="?controller=facturaa&method=store" method="POST">
                   
                  <div class="form-group">
                    <label for="">Fecha</label>
                    <input name="fecha" type="date" class="form-control" required placeholder="Ingrese la fecha de la factura">
                  </div>
               
                  <div class="form-group">
                    <label for="">Codigo del producto</label>
                    <input type="text" name="cod_producto" class="form-control" required placeholder="Ingrese el codigo del producto">
                  </div>
               
                  
                  <div class="form-group">
                    <label for="">Producto</label>
                     <div class="select-wrap one-third">
                        <select  name="producto" id="" class="form-control">
                        <option value="">Seleccione una opción</option> 
                        <?php foreach(producto::all() as $producto): ?>
                        <option value="<?=$producto->id_producto?>"><?=$producto->nombre?></option>
                        <?php  endforeach; ?>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="">Cantidad</label>
                    <input name="cantidad" type="number" class="form-control" required placeholder="Ingrese la cantidad del producto">
                  </div>
                  <div class="form-group">
                    <label for="">Valor</label>
                    <input name="valor" id="valor" type="number" class="form-control"  required placeholder="Ingrese el valor del producto">
                  </div>
                  
                  <div class="form-group">
                    <label for="">Funcionario</label>
                     <div class="select-wrap one-third">
                        <select  name="funcionario" id="" class="form-control">
                        <option value="">Seleccione una opción</option> 
                        <?php foreach(user::all() as $user): ?>
                        <option value="<?=$user->id?>"><?=$user->name?></option>
                        <?php  endforeach; ?>
                        </select>
                      </div>
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
  


    

   