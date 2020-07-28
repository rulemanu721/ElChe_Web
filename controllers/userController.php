<?php 
$hostname = "127.0.0.1";
$hostuser = "root";
$hostpassword = "";
$hostdatabase = "hotel_che";
$connection = mysqli_connect($hostname,$hostuser,$hostpassword,$hostdatabase);
$sqlquery = "SELECT * FROM usuarios";
    $buscar= $_GET['buscar'];
    $sqlBuscar = "select * from usuarios where usuarios_correo = '$buscar'"; 
    
    $result=mysqli_query($connection,$sqlquery);

    while($row = mysqli_fetch_assoc($result)){
        if ($row['usuarios_correo']== $buscar){
            if (mysqli_query($connection, $sqlBuscar)) {
                echo "Usuario encontrado";
              } else {
                echo "No encontrado: ". mysqli_error($connection);
              }
              mysqli_close($connection);
        }


    }  
    

?>

