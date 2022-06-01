<?php

    session_start();

    if(!isset($_SESSION['usuario'])){

        echo '
            <script>
                alert("Por favor debes iniciar sesión") 
                window.location = "../cyberwarrior/index.php"; 
            </script>
        ';        
        session_destroy();
    die();
    }

    $rol = $_SESSION['rol'];
    if($rol == 1){
        header("location:admin.php");
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Bienvenidos a CyberWarrior</h1>
</body>
<a href="cerrar_session.php" > Cerrar sessión</a>
</html>