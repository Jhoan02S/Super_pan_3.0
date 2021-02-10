<body>
<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand text-center Oswald" href="?controller=user&method=employe" style="font-size: 25px;">Super Pan <br> La Castellana</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="row">
    <div class="collapse navbar-collapse " id="navbarSupportedContent-333">
      <ul class="navbar-nav mr-auto d-flex justify-content-between">
        <i class="nav-item material-icons">
          <a href="?controller=user&method=admin" class="nav-link" style="color: black;">home</a>
            <span class="sr-only">(current)</span>
        </i>
        <i class="nav-item">
          <a href="?controller=productoa&method=create" class="nav-link Oswald">Productos</a>
        </i>
        <i class="nav-item">
          <a href="?controller=facturaa&method=create" class="nav-link Oswald">Factura</a>
        </i>
        <i class="nav-item">
          <a href="?controller=proveedor&method=create" class="nav-link Oswald">Proovedores</a>
        </i>
        <i class="nav-item">
          <a href="?controller=index&method=register" class="nav-link Oswald">Empleados</a>
        </i>
        <i class="nav-item material-icons">
          <a href="?controller=security&method=logout" class="nav-link" style="color: black;">block</a>
        </i>
      </ul>
    </div>
  </div>
  </div>
</nav>

<section>
  <div class="container p-5 mb-5">
    <div class="row">
        

      <div class="text-left col-lg-12">
      	
 <center><h1><font style="font-family: 'Righteous', cursive;">Empleados</font></h1></center>

 <button type="button" class="btn btn-info btn-lg"  data-toggle="modal" data-target="#exampleModal">Crear</button>
<div style="height:50px"></div>
<div class="container">
   <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive">        
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Correo</th>
        <th>Cargo</th>
        <th>Estado</th>
        <th>Opciones</th>
    </thead>
    <tbody>
 <?php foreach(user::all() as $user):  ?>
        <tr>
            <td><?= $user->name ?></td>
            <td><?= $user->surname ?></td>
            <td><?= $user->email ?></td>
            <td><?= $user->type ?></td>
            <td><?= $user->nombre ?></td>
            <td width="300" class="table__options">
                <center><a href="?controller=user&method=edit&id=<?= $user->id ?>">
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
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Empleado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="?controller=user&method=store" method="POST">
             
                  <div class="form-group">
                    <label for="">Nombres</label>
                    <input name="name" type="text" class="form-control" required placeholder="Ingrese sus nombres">
                  </div>
                
                  <div class="form-group">
                    <label for="">Apellidos</label>
                    <input name="surname" type="text" class="form-control" required placeholder="Ingrese sus apellidos">
                  </div>
               
                  <div class="form-group">
                    <label for="">Usuario</label>
                    <input type="text" name="user" class="form-control" required placeholder="Cree un Usuario">
                  </div>
                
                  <div class="form-group">
                    <label for="">Correo</label>
                    <input name="email" type="email" class="form-control" required placeholder="Ingrese su correo">
                  </div>
                
                  <div class="form-group">
                    <label for="">Contraseña</label>
                    <input name="password" type="password" pattern=".{8,}"
               class="form-control" required placeholder="Contraseña con 8 o mas caracteres">
                  </div>
               
                  <div class="form-group">
                    <label  for="">Tipo de usuario </label>
                      <div class="select-wrap one-third">
                        <select  name="rol_id" id="" class="form-control" required>
              <option value="">Seleccione una opción</option>     
                          <option value="1">Administrador </option>
                          <option value="2">Empelado</option>
                        </select>
                      </div>
                  </div>
                    <div class="form-group">
                    <label  for="">Estado </label>
                      <div class="select-wrap one-third">
                        <select  name="estado" id="" class="form-control" required>
              <option value="">Seleccione una opción</option>     
                          <option value="1">Activo </option>
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
