<?php
include 'db.php';

$id = $_GET['id'];

$consulta = "UPDATE usuarios SET status = '0' where id = '$id';";
$resultado = mysqli_query($conexion,$consulta);

if($resultado){
    Header("Location: users.php");
}


?>