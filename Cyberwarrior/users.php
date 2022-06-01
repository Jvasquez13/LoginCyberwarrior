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

        <a href="cerrar_session.php">
        <div class="icon__exit">
            <i class="fa-solid fa-arrow-right-from-bracket" title = "Close Session"></i>
        </div>
        </a>
    </header>
    <div class="menu__side" id="menu__side">

        <div class="name__page">
            <i class="fa-solid fa-user-shield"></i>
            <h4>Admin</h4>
        </div>

        <div class="options__menu">

            <a href="admin.php" class="">
                <div class="option">
                    <i class="fas fa-home" title="Home"></i>
                    <h4>Home</h4>
                </div>
            </a>

            <a href="users.php" class="selected">
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

        </div>

    </div>

    <main>
        <h1>Title Example</h1><br>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis, voluptates.
           Quod voluptate reprehenderit accusamus voluptatibus. Odit harum, eius perspiciatis iusto 
           error consectetur sint, nisi unde obcaecati enim et autem cumque?</p>
    </main>
    <script src="assets/js/scriptAdmin.js"></script>
</body>

</html>