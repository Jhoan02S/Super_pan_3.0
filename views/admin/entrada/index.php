<nav class="navbar navbar-expand-lg navbar-dark  scrolling-navbar fixed-top">
    <div class="container">
      <a class="" href="?controller=index" style="font-family: 'Pacifico', cursive;">
        <img src="assets/images/Logo.png" width="50" height="50" style="border-radius: 50px;" class="d-inline-block align-top" alt=""> 
      </a>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"></li>
        <li class="nav-item"><a href="?controller=user&method=create" style="font-family: 'Pacifico', cursive;" class="nav-link">Crear Usuario</a></li>
      </ul>
    </div>
</nav>

</div>
<section class="ftco-section">
      <div class="container">
        <div class="row no-gutters justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section">
            <h2 style="font-family: 'Indie Flower', cursive;">Lista de usuarios</h2>
          </div>
<br>
<table class="table">
    <thead>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>Opciones</th>
    </thead>
    <tbody>
    <?php foreach(parent::all() as $user):  ?>
        <tr>
            <td><?= $user->id ?></td>
            <td><?= $user->name ?></td>
            <td><?= $user->email ?></td>
            <td width="200" class="table__options">
                <a href="?controller=user&method=edit&id=<?= $user->id ?>">
                    <button class="btn btn-outline-green">Editar</button>
                </a>
                <a href="?controller=user&method=delete&id=<?= $user->id ?>">
                <button class="btn btn-outline-red">Borrar</button>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

