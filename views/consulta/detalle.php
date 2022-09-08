<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle</title>
</head>
<body>
    <?php require 'views/header.php' ?>
    <!-- <h1>Esta es la Vista de Nuevo</h1> -->

    <div id="main">
        <h1 class="center">Detalle de <?php echo $this->usuario->nombre; ?></h1>

        <div class="center"><?php  echo $this->message; ?></div>

        <form action="<?php echo constant('URL'); ?>consulta/actualizarUsuario" method="POST">
            <p>
                <label for="nombre">Nombre</label><br>
                <input type="text" name="nombre" value="<?php echo $this->usuario->nombre; ?>" id="" required>
            </p>
            <p>
                <label for="correo">Correo</label><br>
                <input type="text" name="correo" value="<?php echo $this->usuario->correo; ?>" id="" required>
            </p>
            <p>
                <label for="curp">CURP</label><br>
                <input type="text" name="curp" value="<?php echo $this->usuario->curp; ?>" id="" required>
            </p>

            <input type="submit" value="Actualizar Usuario">
        </form>
    </div>
    

    <?php require 'views/footer.php' ?>
</body>
</html>