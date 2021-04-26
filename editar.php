<?php 
require_once('./dbtarea.php');
$pdo = getPdo();
$userEditar = $_POST['id'];
$nombreTarea = $_POST['Nombre'];
$estado = $_POST['Estado'];

$sql = "update tarea set Nombre = ? , Estado= ?  where id = ?";
$consulta = $pdo->prepare($sql);
$consulta->execute([$nombreTarea,$estado,$userEditar]);
header('location:tareas.php');

?>