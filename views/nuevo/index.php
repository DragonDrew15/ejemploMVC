<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo</title>
</head>
<body>
    <?php require 'views/header.php' ?>
    <!-- <h1>Esta es la Vista de Nuevo</h1> -->

    <div id="main">
        <h1 class="center">Crea un Nuevo Registro</h1>

        <div class="center"><?php  echo $this->message; ?></div>

        <form action="<?php echo constant('URL'); ?>nuevo/registrarUsuario" method="POST">
            <p>
                <label for="nombre">Nombre</label><br>
                <input type="text" name="nombre" id="" required>
            </p>
            <p>
                <label for="correo">Correo</label><br>
                <input type="text" name="correo" id="" required>
            </p>
            <p>
                <label for="curp">CURP</label><br>
                <input type="text" name="curp" id="" required>
            </p>

            <input type="submit" value="Nuevo Usuario">
        </form>
    </div>
    

    <?php require 'views/footer.php' ?>
</body>
</html>