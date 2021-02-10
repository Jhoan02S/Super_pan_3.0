<body>  
<nav class="navbar n avbar-expand-lg navbar-dark  ftco_navbar scrolling-navbar fixed-top">
    <div class="container">
      <a class="" href="?controller=user&method=admin" style="font-family: 'Pacifico', cursive;">
        <img src="assets/images/Logo.png" width="50" height="50" style="border-radius: 50px;" class="d-inline-block align-top" alt="">
      </a>
    
</nav>
<section class="ftco-section">
      <div class="container">
        <div class="row no-gutters justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section">
            <h2 style="font-family: 'Indie Flower', cursive;">Registrar Usuario</h2>
          </div>
        </div>
            <form action="?controller=user&method=store" method="POST">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Nombres</label>
                    <input name="name" type="text" class="form-control" required placeholder="Ingrese sus nombres">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Apellidos</label>
                    <input name="surname" type="text" class="form-control" required placeholder="Ingrese sus apellidos">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Usuario</label>
                    <input type="text" name="user" class="form-control" required placeholder="Cree un Usuario">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Correo</label>
                    <input name="email" type="email" class="form-control" required placeholder="Ingrese su correo">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Contraseña</label>
                    <input name="password" type="password" pattern=".{8,}"
               class="form-control" required placeholder="Contraseña con 8 o mas caracteres">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label  for="">Tipo de usuario </label>
                      <div class="select-wrap one-third">
                        <select  name="rol_id" id="" class="form-control">
                          <option value="0">Seleccione opción</option>       
                          <option value="1">Administrador </option>
                          <option value="2">Empelado</option>
                        </select>
                      </div>
                  </div>
                </div>
              </div>
                <div class="col-md-12 mt-3">
                  <div class="form-group">
                    <center><button type="submit" value="Registrarse" class="btn btn-warning py-3 px-5">Registrar</button>
                    </center>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
