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

            <a href="" class="selected">
                <div class="option">
                    <i class="fas fa-home" title="Home"></i>
                    <h4>Home</h4>
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

        </div>

    </div>

    <main>
        <h1>Welcome, Administrator!</h1><br>
        <section>
                <input type="text" placeholder="Full Name" name="nombre">
                <input type="text" placeholder="Email"name="email">
                <input type="text" placeholder="Username" name="usuario">
                <input type= "password" placeholder="Password" name="password">
                <label for="rol">Rol:</label>
                <select name="rol">
                <option value="1">Administrator</option>
                <option value="0">User</option>
                </select>
                <label for="status">Status:</label>
                <select name="status">
                <option value="1">Active</option>
                <option value="0">Desactivate</option>
                </select>
                <button>Registrarse</button>
        </section>
            
    </main>
    <script src="assets/js/scriptAdmin.js"></script>
</body>

</html>