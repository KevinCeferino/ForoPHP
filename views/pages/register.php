<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'complements/head.php';
    ?>
    <title>Register</title>
</head>

<body>

    <?php
    include 'complements/navbar.php';
    ?>
    <div class="container col-md-6 offset-md-3">
        <?php
        if(isset($_GET['q']) && !empty($_GET['q'])){
            if($_GET['q'] == 'true'){
                echo "<div class='alert alert-success my-3 d-flex justify-content-between' role='alert'>
            ¡Se ha registrado con exito!
            <a class='btn btn-outline-success' href='/php'>Volver a Inicio</a>
          </div>";
            }else if($_GET['q'] == 'false'){
                echo "<div class='alert alert-danger my-3 d-flex justify-content-between' role='alert'>
            No se ha podido registrar.
          </div>";
            }
        }
        ?>
        <div class="text-center">
            <h1 class="my-3">Registrate</h1>
        </div>
        <div class="text-center">
            <form class="form-group" action="controller/register.php" method="post">
                <input class="form-control my-2" type="text" name="name" id="name" placeholder="Nombre" required>
                <input class="form-control my-2" type="email" name="email" id="email" placeholder="Correo Electronico" required>
                <input class="form-control my-2" type="password" name="password" id="password" placeholder="Contraseña" required>
                <button type="submit" class="btn btn-outline-dark" name="register">Iniciar sesión</button>
            </form>
        </div>
    </div>
    <?php include 'complements/footer.php'  ?>
</body>

</html>