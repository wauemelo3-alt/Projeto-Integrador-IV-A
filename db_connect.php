<?php

$servername = "localhost"; 
$username = "root";        
$password = "";            
$dbname = "portifolio_db";  


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Falha na conexão: " . $conn->connect_error);
}


$conn->set_charset("utf8mb4");

?>
