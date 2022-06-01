<?php

    include 'db.php';

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $rol = 2;
    $status = 1;

    $query = "INSERT INTO usuarios (nombre, email, usuario, password, rol, status) 
    VALUES ('$nombre', '$email', '$usuario', '$password', '$rol', '$status')";

    //verificar que el correo no se repita en la base de datos

    $verificarCorreo = mysqli_query($conexion,"SELECT * FROM usuarios WHERE email = '$email'");
    $verificarUsuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario = '$usuario'");

    if (mysqli_num_rows($verificarCorreo) > 0){

        echo '
            <script>
                alert("El correo electronico ya esta registrado, intenta con otro diferente!")
                window.location = ".../cyberwarrior/index.php";
            </script>
        ';
        exit();

    }
    if (mysqli_num_rows($verificarUsuario) > 0){

        echo '
            <script>
                alert("El nombre de usuario ya esta registrado, intenta con otro diferente!")
                window.location = ".../cyberwarrior/index.php";
            </script>
        ';
        exit();
    }
    

    $ejecutar = mysqli_query($conexion,$query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario registrado Exitosamente");
                window.location = "../cyberwarrior/index.php";
            </script>
        
        ';
    }else{
        echo '
            <script>
                alert("Intentalo de nuevo, usuario no almacenado");
                window.location = "../cyberwarrior/index.php";
            </script>
        
        ';

    }

    mysqli_close($conexion);
?>