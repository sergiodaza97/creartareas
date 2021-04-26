<?php

$nombreTarea = $_POST['Nombre'];
$estado = $_POST['Estado'];
require_once('./dbtarea.php');
$pdo = getPdo();

$sqlInsertarUsuario = "INSERT INTO tarea (Nombre,Estado) VALUES (?,?);";
$consulta = $pdo->prepare($sqlInsertarUsuario);
$consulta->execute([$nombreTarea,$estado]);  
header('location: tareas.php');
?>
