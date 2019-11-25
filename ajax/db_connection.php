<?php
$host = "localhost";                                    
$user = "root";                                         
$password = "";                                         
$database = "reda";                                 

$con = new mysqli($host, $user, $password, $database);  

if ($con->connect_error) {                              
    die("Connection failed: " . $con->connect_error);   
}
?>