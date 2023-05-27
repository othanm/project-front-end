<?php
$servername='localhost';
$username='root';
$password='';
$dbname='user_db';

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    echo "connection error".$conn->error_list;
} 

?>