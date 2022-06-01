<?php

    $email = $_POST["email"];
    $password = $_POST["password"];


    session_start();
    

    include('db.php');

    $consulta = "SELECT id, nombre, email, usuario, rol, status FROM usuarios where email = '$email' and password = '$password'";
    $resultado =mysqli_query($conexion,$consulta);
    $filas= mysqli_num_rows($resultado);


    if($filas > 0){
        $row = $resultado ->fetch_assoc();

        $_SESSION['id'] = $row['id'];
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['usuario'] = $row['usuario'];
        $_SESSION['rol'] = $row['rol'];
        $_SESSION['status'] = $row['status'];
      
    }
    if($_SESSION['status'] == 1){

        header("Location:home.php");
        exit();
    }
    else{

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