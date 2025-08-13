<?php
$servername="localhost";
$database= "database";
$username="root";
$pasword="";

$conn= mysqli_connect ($servername,$database,$username,$pasword);
if (!$coon->connect_error) {
   echo "koneksi database rusak";  
    die ("error!");
} 
echo"koneksi berhasil";    
?>
