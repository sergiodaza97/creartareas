<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
</head>
<body>
<form action= "editar.php" method="post" id="Registro">
       Id:
       <input  type="text" name="id"><br>
       Nombre Tarea:
       <input  type="text" name="Nombre"><br>
        estado tarea:
        <select name="Estado">
            <option value="0">...</option>
            <option value="Pendiente">Pendiente</option>
            <option value="En ejecucion">En ejecucion</option>
            <option value="Finalizado">Finalizado</option>
          </select>
        <br><br>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>