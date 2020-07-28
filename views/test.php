<?php 

$host_name = "127.0.0.1";
$host_user = "root";
$host_pass = "";
$database = "univa";


$connection = mysqli_connect($host_name, $host_user, $host_pass, $database);






 ?>




<!DOCTYPE html>
<html>

<head>
    <title>mostrar datos</title>

</head>

<body style="text-align: center;">
    <img src="image/fiji.jpg" style="position: absolute; display: flex; width: 98%">
    <br>

    <div style="position: relative">



        <?php 
        $codigo=$_POST['codigo'];
		$sql="SELECT * from rsv where num_res='$codigo'";
		$result=mysqli_query($connection,$sql);
		if (mysqli_num_rows($result)>0) {
			while($mostrar=mysqli_fetch_array($result)){
				?>
        <br>
        <img style="height: 100px" src="image/unnamed.png">
        <br>
        <table style="margin-left: 35%" id="tabla" border="1">
            <tr>



                <td>numero de habitacion</td>

                <td>Fecha de llegada</td>
                <td>Fecha de salida</td>
            </tr>


            <br>
            <section>Numero de reservacion: <?php echo $mostrar['num_res'] ?> </section>
            <br>


            <tr>

                <td><?php echo $mostrar['num_habitacion'] ?></td>
                <td><?php echo $mostrar['fecha_ingreso'] ?></td>
                <td><?php echo $mostrar['fecha_salida'] ?></td>


            </tr>



            <?php 
		   
		   }
			
		}else{
	        
			echo '<span style="font-size:30px;">No hemos encontrado ninguna reservacion</span>';
			echo '<br>';
			echo '<br>';
			echo '<br>';
			echo '<img src="image/7.gif" width="200" height="200" />';
			
		}

		
	 ?>

        </table>


    </div>
</body>

</html>