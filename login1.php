<?php
require 'connect.php'; 

$username = $_POST["user"];
$password = $_POST["pass"];
$email = $_POST["email"];


$query_sql = "INSERT INTO login (username, password, email)
              VALUES ('$username', '$password', '$email')";


if (mysqli_query($conn, $query_sql)) {
    
    header("Location: home.html");
} else {
   
    echo "Pendaftaran gagal: " . mysqli_error($conn);
}


mysqli_close($conn);
?>
