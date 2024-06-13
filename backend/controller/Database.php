<?php
$host="localhost";
$user="root";
$pass="";
$database="arisan_online";

$conn = new mysqli($host,$user,$pass,$database);

if (mysqli_connect_errno()){
		trigger_error("Koneksi gagal : ". mysqli_connect_error(), E_USER_ERROR);
		
		}
?>