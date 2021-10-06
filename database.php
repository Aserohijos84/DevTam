<?php
    $url='localhost:3306';
    $username='root';
    $password='';
    $conn=mysqli_connect($url,$username,$password,"pnpvirtualhub_db");
    if(!$conn){
        die('Could not Connect My Sql:'.mysql_error());
    }
?>
