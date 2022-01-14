<?php

$servername ="localhost";
$username ="root";
$password ="";
$db_name ="crud";
$conn = new mysqli($servername, $username, $password, $db_name);

if($conn->connect_error){
    die("Failed to connect to mysql :".mysqli_connect_error());
}
else{
    echo "Connected succesfully";
}
?>