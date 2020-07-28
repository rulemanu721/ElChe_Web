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
    <link rel="stylesheet" href="..\css\styles01.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="../javascript/myscript.js"></script>
    <title>Usuarios</title>
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
    <article>

    <aside class = "buscar">
    <form action="/dmoreno/ElChe_Web/controllers/userController.php" method="get">
     <h5> Buscar:<input id ="form" type="email" name="buscar" id=""> <input type="submit" value="buscar"> </h5>
    </form>
    </aside>
        <section class="cuadro">
            <h4 id="id-usuarios">Usuarios</h4>
            <?php
       $sql= "SELECT * from usuarios";
        $result=mysqli_query($connection,$sql);
        ?>
            <table class="tabla" ad>
                <tr>
                    <th class="th">Id</th>
                    <th class="th">Nombre</th>
                    <th class="th">Apellidos</th>
                    <th class="th">No Empleado</th>
                    <th class="th">Telefono</th>
                    <th class="th">correo</th>
                    <th class="th">Contraseña</th>
                    <th class="th">Tipo</th>
                    
                </tr>
                </thead>
                <tbody>
                    <?php 
                 foreach ($result as $row){ ?>
                    <tr>
                        <form action="modificarProd.php" method="get">
                        <td class="td"><?php echo $row ['usuarios_id']?></td>
                        <td contenteditable='true' class="td"><?php echo $row ['usuarios_nombres']?></td>
                        <td contenteditable='true' class="td"><?php echo $row ['usuarios_apellidos']?></td>
                        <td contenteditable='true'class="td"><?php echo $row ['usuarios_num_empleado']?></td>
                        <td contenteditable='true' class="td"><?php echo $row ['usuarios_telefono']?></td>
                        <td contenteditable='true' class="td"><?php echo $row ['usuarios_correo']?></td>
                        <td contenteditable='true' class="td"><?php echo $row ['usuarios_contra']?></td>
                        <td contenteditable='true' class="td"><?php echo $row ['usuarios_tipo']?></td>
                        <?php echo "<td> <a href='modificarProd.php?usuarios_id=".$row['usuarios_id']."'><button type = 'button' class= 'btnModif'>Modificar</button></a></td>" ?>

                        <td> <a href="modificar.php"><button type = "button" class= "btnDelete">Eliminar</button></a></td>
                        </form>
                    </tr>
                </tbody>
                <?php
                } ?>
            </table>
            <a class="botonUsuarios" href="admin.php">Regresar</a>
        </section>
    </article>
</body>
<a href=""></a>
<footer class="piePagina">
</footer>
</html>