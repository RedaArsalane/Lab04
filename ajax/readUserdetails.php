<?php

include("db_connection.php");                               
if(isset($_POST['id']) && isset($_POST['id']) != ""){       
    $user_id = $_POST['id'];                                

    $query = "SELECT * FROM users WHERE id = '$user_id'";   
    if (!$result = mysqli_query($con, $query)) {              
        exit(mysqli_error($con));                           
    }
 


?>
