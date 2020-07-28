<?php
$hostname = "127.0.0.1";
$hostuser = "root";
$hostpassword = "";
$hostdatabase = "hotel_che";
$connection = mysqli_connect($hostname,$hostuser,$hostpassword,$hostdatabase);
$sql = "SELECT * FROM  usuarios";

$id = $_GET['usuarios_id'];
    $sqlquery = "SELECT * FROM usuarios WHERE usuarios_id = '.$id.'";
    $result = mysqli_query($connection,$sql);

    while($row = mysqli_fetch_assoc($result)){
        if ($row['usuarios_id']== $id){
            if (mysqli_query($connection, $sqlquery)) {
                return[
                    
                    $row['usuarios_id'],
                    $row['usuarios_nombres'],
                    $row['usuarios_apellidos'],
                    $row['usuarios_num_empleado'],
                    $row['usuarios_telefono'],
                    $row['usuarios_correo'],
                    $row['usuarios_contra'],
                    $row['usuarios_tipo'],
                ];
                
              } else {
                echo "No encontrado: ". mysqli_error($connection);
              }
              mysqli_close($connection);
        }
    } 
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
    <title>Modificar</title>
</head>

<body>
    <header class="Tittle">
        <img class="logo" src="../img/che.png" alt="LOGO">
        <h3 id="id-saludo"> <i class="fas fa-user-tie"></i> Hola, Administrador <a class="botonLogout" href="">
        <i class="fas fa-sign-out-alt"></i></a></h3>
    </header>
    <section class= "cuadro">
        <h2>1</h2>
    </section>
    <a href=""></a>
    <footer class="piePagina">
</footer>
</body>

</html>