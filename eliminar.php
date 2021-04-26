<?php
require_once('./dbtarea.php');
$pdo=getPdo();

$userEliminar = $_POST['id'];

$sql = "delete from tarea where id = ?";
$consulta = $pdo->prepare($sql);
$consulta->execute([$userEliminar]);
header('location:tareas.php');
?>