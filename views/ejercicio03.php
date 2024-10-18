<?php include_once 'partials/variables.php'; ?>
<?php 
$clientes = [
    [
        'nombre' => 'Juan',
        'apellido' => 'Pérez',
        'correo' => 'juan@gmail.com',
        'edad' => 25
    ],
    [
        'nombre' => 'María',
        'apellido' => 'Gómez',
        'correo' => 'maria@gmail.com',
        'edad' => 30
    ],
    [
        'nombre' => 'Pedro',
        'apellido' => 'Jiménez',
        'correo' => 'pedro@gmail.com',
        'edad' => 35
    ],
    [
        'nombre' => 'Laura',
        'apellido' => 'García',
        'correo' => 'laura@gmail.com',
        'edad' => 40
    ],
    [
        'nombre' => 'Carlos',
        'apellido' => 'López',
        'correo' => 'carlos@gmail.com',
        'edad' => 45
    ],
    [
        'nombre' => 'Ana',
        'apellido' => 'Martínez',
        'correo' => 'ana@gmail.com',
        'edad' => 50
    ]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exámen Final | Ejercicio03</title>
    <link rel="stylesheet" href="resources/css/bootstrap.min.css">
    <?php include_once 'partials/css.php'; ?>
</head>

<body>
    <div class="container mx-auto">
        <?php require_once 'partials/header.php'; ?> <!-- header del sitio -->
        <!-- escribir el codigo del ejercicio -->
         <div class="table">


                <span>Lista De Cliente</span>
                <table>
                    <tr>
                        <th class="thead" >DATOS</th>
                    </tr>
                        <tr>
                            <th class="th">Nombre</th>
                            <th class="th">Apellidos</th>
                            <th class="th">Correo</th>
                            <th class="th">Edad</th>
                        </tr>
                        <?php foreach ($clientes as $cliente):?>
                            <tr>
                                <td><?php echo $cliente['nombre']?></td>
                                <td><?php echo $cliente['apellido']?></td>
                                <td><?php echo $cliente['correo']?></td>
                                <td><?php echo $cliente['edad']?></td>
                            </tr>
                        <?php endforeach;?>
                </table>
        </div>
    </div>
    <?php include_once 'partials/js.php' ?> <!-- scripts de bootstrap -->
</body>
</html>