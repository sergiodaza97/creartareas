

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Tarea</title>
</head>
<body>
    <form action= "ingresar.php" method="post">
       Nombre Tarea:
       <input  type="text" name="Nombre"><br>
        estado tarea:
        <select name="Estado">
            <option value="0">...</option>
            <option value="Pendiente">Pendiente</option>
            <option value="En ejecucion">En ejecucion</option>
            <option value="Finalizado">Finalizado</option>
          </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>