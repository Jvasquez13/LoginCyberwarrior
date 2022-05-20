<?php

    $email = $_POST["email"];
    $password = $_POST["password"];

    session_start();
    

    include('db.php');

    $consulta = "SELECT * FROM usuarios where email = '$email' and password = '$password'";
    $resultado =mysqli_query($conexion,$consulta);

    $filas= mysqli_num_rows($resultado);

    if($filas > 0){
        $_SESSION['usuario'] = $email;
        header("Location:home.php");
        exit();
    }else{

        echo '
        
            <script>
                alert("Usuario no existe, por favor verifique los datos introducidos");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);