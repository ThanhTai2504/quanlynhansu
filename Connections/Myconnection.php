<?php
$hostname_Myconnection = "localhost";
$database_Myconnection = "quanly_nhansu";
$username_Myconnection = "root";
$password_Myconnection = "";
$Myconnection = mysqli_connect($hostname_Myconnection, $username_Myconnection,'',$database_Myconnection);
mysqli_set_charset($Myconnection, 'utf8');
?>