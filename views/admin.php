<?php 
$hostname = "127.0.0.1";
$hostuser = "root";
$hostpassword = "";
$hostdatabase = "hotel_che";
$connection = mysqli_connect($hostname,$hostuser,$hostpassword,$hostdatabase);


?>


<!DOCTYPE html>
<html lang="en">
<meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles01.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Administrador</title>
</head>

<body>
    <header class="Tittle">
        <img class="logo" src="../img/che.png" alt="LOGO">
        <h3 id="id-saludo"> <i class="fas fa-user-tie"></i> Hola, Administrador <a class="botonLogout" href="">
        <i class="fas fa-sign-out-alt"></i></a></h3>
    </header>
    <section class="mainDashboard">
        <nav>
            <ul class="lista">
                <li> <a class="boton" href="usuarios.php"><i class="fas fa-users"></i> Usuarios</a></li> 
                <li> <a class="boton" href=""><i class="fas fa-puzzle-piece"></i> Modulos</a></li>
                <li> <a class="boton" href=""><i class="fas fa-toolbox"></i> Administracion</a></li>
                <li> <a class="boton" href=""><i class="fas fa-hashtag"></i> Redes sociales</a></li>
            </ul>
        </nav>
    </section>
    <section class= "cuadro">
        <h2>1</h2>
    </section>
    <footer class="piePagina">
</footer>
</body>

</html>