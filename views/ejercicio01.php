<?php include_once 'partials/variables.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exámen Final | Ejercicio01</title>
    <link rel="stylesheet" href="resources/css/bootstrap.min.css">
    <?php include_once 'partials/css.php'; ?>
</head>

<body>
    <div class="container mx-auto">
        <?php require_once 'partials/header.php'; ?> <!-- header del sitio -->
        <!-- escribir el codigo del ejercicio -->
        <div class="container-form">
           
            <form action="" method="POST">
            <span>DATOS DEL CONTACTO</span>
                <label for="">Nombre</label>
                <input type="text" name="nombre">
                <label for="">Email</label>
                <input type="email" name="email">
                <label for="">Edad</label>
                <input type="text" name="edad">
                <button type="submit">Registrar</button>
            </form>
            <div class="container-mostrar">
                <?php
                    if (isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['edad'])){
                        $nombre = $_POST['nombre'];
                        $email = $_POST['email'];
                        $edad = $_POST['edad'];
                        echo "<p> <strong>Nombre:</strong> $nombre</p>";
                        echo "<p><strong>Email:</strong>: $email</p>";
                        echo "<p><strong>Edad:</strong>: $edad años</p>";
                        echo  "<strong>DATOS REGISTRADOS EXITOSAMENTE:</strong>";
                    }
                ?>
            </div>
        </div>
        
    </div>
    <?php include_once 'partials/js.php' ?> <!-- scripts de bootstrap -->
</body>

</html>