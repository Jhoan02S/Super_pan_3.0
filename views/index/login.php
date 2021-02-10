<body>	
<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand text-center Oswald title-banner" href="?controller=index" >Super Pan <br> La Castellana</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="row">
    <div class="collapse navbar-collapse " id="navbarSupportedContent-333">
      <ul class="navbar-nav mr-auto d-flex justify-content-between align-items-center">
        <i class="nav-item material-icons">
          <a href="?controller=index" class="nav-link" style="color: white;">home</a>
            <span class="sr-only">(current)</span>
        </i>
        <i class="nav-item material-icons">
          <a href="?controller=index&method=contacto" class="nav-link" style="color: white;" >phone</a>
        </i>
        <i class="nav-item material-icons">
          <a href="?controller=index&method=login" class="nav-link" style="color: white;">account_circle</a>
        </i>
      </ul>
    </div>
  </div>
  </div>
</nav>
<!--/.Navbar -->

<section>
  <div class="container mb-5 d-flex justify-content-center">
    <div class="row">
          <div class="col-md-12 container-login shadow-lg p-5">   
            <div class="col-mb-5 text-center heading-section">
              <h2 style="font-family: 'Righteous', cursive;">Ingreso</h2>
            </div> 
            <form action="?controller=security&method=login" method="POST">
              <div class="form-group">
                <label for="exampleInputEmail1">Correo</label>
                <input type="email" class="form-control" name="email" placeholder="Ingresa tu correo" id="exampleInputEmail1" aria-describedby="emailHelp" required>
              </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Contraseña</label>
                  <input type="password" name="password" pattern="{8,}" placeholder="Ingrese su contraseña" class="form-control" id="exampleInputPassword1">
                </div>
                  <button type="submit" name="entrar" class="btn peach-gradient text-center">Ingresar</button>
            </form>
          </div>  
    </div>
  </div>    
</section>
