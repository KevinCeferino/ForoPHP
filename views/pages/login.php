<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'complements/head.php';
    ?>
    <title>Login</title>
</head>

<body>

    <?php
    include 'complements/navbar.php';
    ?>
    <div class="container col-md-6 offset-md-3">
        <div class="text-center">
            <h1>Iniciar sesión</h1>
        </div>
        <div class="text-center">
            <form class="form-group" action="controller/login.php" method="post">
                <input class="form-control my-2" type="email" name="email" id="email" placeholder="Correo Electronico" required>
                <input class="form-control my-2" type="password" name="password" id="password" placeholder="Contraseña" required>
                <button type="submit" class="btn btn-outline-dark" name="login">Iniciar sesión</button>
            </form>
        </div>
    </div>

</body>

</html>