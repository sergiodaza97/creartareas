
<?php
require_once('./dbtarea.php');
$pdo=getPdo();

$sql = "SELECT * FROM tarea ";
$consulta = $pdo->prepare($sql);
$consulta->execute();
$tareas=$consulta->fetchALL(PDO::FETCH_ASSOC);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Tareas</title>
    <style> table, th, td {
    border: 1px solid black;
    }
    </style>
</head>

<body>

    <div>
        <table style="width:100%" class ="default">
            <tr>
                <td>ID</td>
                <td>Nombre Tarea</td>
                <td>Estado</td>
            </tr>
            <?php 
            foreach($tareas as $tarea){ ?>
            <tr>
                <td><?php echo $tarea ['id'] ?></td>
                <td><?php echo $tarea ['Nombre'] ?></td>
                <td><?php echo $tarea ['Estado'] ?></td>  
            </tr>
            <?php } ?> 
            <tr>
                <td>
                <a href="ingresar1.php"><p>Crear Tarea</p></a>
                </td>
                <td><a href="eliminar1.php"><p>Eliminar</p></a> </td>
                <td>
                <a href="editar1.php"><p>Editar</p></a> 
                </td> 
            </tr>
        </table>
    </div>
</body>

</html>