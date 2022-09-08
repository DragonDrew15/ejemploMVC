<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
</head>
<body>
    <?php require 'views/header.php' ?>
    <!-- <h1>Esta es la Vista de Consulta</h1> -->

    <div id="main">
        <h1 class="center">Realiza una Consulta</h1>
        <div id="respuesta" class="center"></div>

        <table width=100%>
            <thead>
                <tr>
                    <th hidden>user_ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>CURP</th>
                </tr>
            </thead>
            <tbody id="tbody-usuarios">
                <?php
                    include_once 'models/usuario.php';

                    foreach($this->usuarios as $row){
                        $usuario = new Usuario();
                        $usuario = $row;
                ?>
                    <tr id="fila-<?php echo $usuario->user_id; ?>">
                        <td hidden><?php echo $usuario->user_id ?></td>
                        <td><?php echo $usuario->nombre ?></td>
                        <td><?php echo $usuario->correo ?></td>
                        <td><?php echo $usuario->curp ?></td>
                        <td><a href="<?php echo constant('URL') . 'consulta/verUsuario/' . $usuario->user_id ?>">Editar</a></td>
                        <td><button class="bEliminar" data-user_id="<?php echo $usuario->user_id; ?>">Eliminar</button></td>
                        <!-- <td><a href="<?php // echo constant('URL') . 'consulta/eliminarUsuario/' . $usuario->user_id ?>">Eliminar</a></td> -->
                    </tr>
                <?php 
                    } 
                ?>
                
            </tbody>
        </table>

        <!--  var_dump($this->usuarios) -->
    </div>
    

    <?php require 'views/footer.php' ?>
    <script src="<?php echo constant('URL'); ?>public/js/main.js"></script>
</body>
</html>