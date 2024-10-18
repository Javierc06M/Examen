<?php include_once 'partials/variables.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exámen Final | Ejercicio02</title>
    <link rel="stylesheet" href="resources/css/bootstrap.min.css">
    <?php include_once 'partials/css.php'; ?>
</head>

<body>
    <div class="container mx-auto">
        <?php require_once 'partials/header.php'; ?> <!-- header del sitio -->
        <!-- escribir el codigo del ejercicio -->
        <div class="container-calculadora">
            <span>DATOS</span>
            <div class="container-operacion">
                <div class="numero">
                    <form action="" method="post">
                        <label for="">Numero 1</label>
                        <input type="text" name="n1">
                        <label for="">Numero 2</label>
                        <input type="text" name="n2">
                        <button type="submit">Calcular</button>
                    </form>
                </div>
                <div class="resultado">
                    <?php
                        if (isset($_POST['n1']) && $_POST['n2']) {
                            $n1 = $_POST['n1'];
                            $n2 = $_POST['n2'];
                            echo "<strong>La Suma Es: </strong>". ($n1 + $n2) ."</br>";
                            echo "<strong>La Resta Es: </strong>". ($n1 - $n2)."</br>";
                            echo "<strong>La Multiplicacion Es: </strong>". ($n1 * $n2)."</br>";
                            echo "<strong>La Division Es: </strong> ". ($n1 / $n2)."</br>"; 
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php include_once 'partials/js.php' ?> <!-- scripts de bootstrap -->
</body>
</html>