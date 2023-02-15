<?php 
    
$conn = new mysqli ("localhost", "root", "", "misis_db");
mysqli_set_charset($conn, 'utf8');


if($conn->connect_error){
    die("Connection failed: " .$conn->connect_error);
}
?>
