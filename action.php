<?php
$servername='localhost'
$username="root"
$password="himanshu"  

$conn = new mysqli($servername,$username,$password)
 if(!$conn){
    echo 'error connecting database'.$conn->connect_error
 }
 echo 'connected sucessfully'
?>