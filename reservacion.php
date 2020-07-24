<?php

$host_name = "127.0.0.1";
$host_user = "root";
$host_pass = "";
$database = "hotel_che";

$connection = mysqli_connect($host_name, $host_user, $host_pass, $database);

if ($connection) {
    echo "You're connected!";    
} else {
    echo "Sorry, NOT connected";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva Ya!</title>
</head>
<body>
    
</body>
</html>
