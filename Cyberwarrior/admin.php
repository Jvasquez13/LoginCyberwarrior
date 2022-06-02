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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="assets/css/estilosAdmin.css">
    <script src="https://kit.fontawesome.com/a539cc141c.js" crossorigin="anonymous"></script>
</head>
<body id= "body">
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
 
    </header>
    <div class="menu__side" id="menu__side">

        <div class="name__page">
            <i class="fa-solid fa-user-shield"></i>
            <h4>Admin</h4>
        </div>

        <div class="options__menu">

            <a href="" class="selected">
                <div class="option">
                    <i class="fas fa-home" title="Home"></i>
                    <h4>Home</h4>
                </div>
            </a>

            <a href="create.php">
                <div class="option">
                    <i class="fa-solid fa-user-plus" title="Create"></i>
                    <h4>Create</h4>
                </div>
            </a>

            <a href="users.php">
                <div class="option">
                    <i class="fa-solid fa-users" title="Users"></i>
                    <h4>Users</h4>
                </div>
            </a>

            <a href="company.php" >
                <div class="option">
                    <i class="fa-solid fa-building" title="Company"></i>
                    <h4>Company</h4>
                </div>
            </a>

            <a href="cerrar_session.php">
            <div class="option">
                <i class="fa-solid fa-arrow-right-from-bracket" title = "Exit"></i>
                <h4>Exit</h4>
            </div>
            </a>

        </div>

    </div>

    <main>
        <h1>Welcome, Administrator!</h1><br>
            
    </main>
    <script src="assets/js/scriptAdmin.js"></script>
</body>

</html>