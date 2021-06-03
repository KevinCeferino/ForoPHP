<?php 
session_start();
?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="./">Foro PHP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link <?php if(!isset($_GET['p'])){ echo "active"; } ?>" aria-current="page" href="/php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($_GET['p'] == 'nosotros'){ echo "active"; } ?>" href="?p=nosotros">Nosotros</a>
        </li>
        <?php
if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
  ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?php
          if($_SESSION['rol'] == '1'){
              echo "<i class='fas fa-user-tie'></i>";
            }else if($_SESSION['rol'] == '0'){
              echo "<i class='fas fa-user'></i>";
            }
            ?>
          
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Mi Perfil</a></li>
            <?php if(isset($_SESSION['rol']) && !empty($_SESSION['rol']) && $_SESSION['rol'] == 1){
              echo "<li><a class='dropdown-item' href='#'>Administrar Usuarios</a></li>";
            }?>
            <li><a class="dropdown-item" href="#">Configuración</a></li>
            <li><a class="dropdown-item" href="?p=logout">Cerrar Sesión</a></li>
          </ul>
        </li><?php
       }else{ 
         ?>
          <li class="nav-item">
          <a class="nav-link <?php if($_GET['p'] == 'login'){ echo "active"; } ?>" href="?p=login">Iniciar Sesión</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($_GET['p'] == 'register'){ echo "active"; } ?>" href="?p=register">Registrarse</a>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>