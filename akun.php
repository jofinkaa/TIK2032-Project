<?php 
require 'connect.php'; 


$email = $_POST["email"];
$password = $_POST["pass"]; 


$query_sql = "SELECT * FROM login WHERE email = ? AND password = ?";
$stmt = $conn->prepare($query_sql); 
$stmt->bind_param('ss', $email, $password); 
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    header("Location: index.html");
    exit;
} else {
    echo "<center><h1>Email atau password anda salah. Silahkan coba login kembali.</h1>
              <button><strong><a href='login.php'>Login</a></strong></button></center>";
}

$stmt->close();
$conn->close();
