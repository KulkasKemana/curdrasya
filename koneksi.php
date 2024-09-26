<?php

$host="sql204.infinityfree.com";
$user="if0_37387549";
$password="g5C7eJdnji";
$db="if0_37387549_crud";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
        die("Koneksi Gagal:".mysqli_connect_error());
        
}
?>