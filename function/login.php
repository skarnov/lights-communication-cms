<?php
    
    session_start();

    require 'db_connect.php';
    
    $client_email = filter_input(INPUT_POST, 'client_email');
    $client_password = filter_input(INPUT_POST, 'client_password');

    $sql = "SELECT * FROM tbl_client WHERE client_email='$client_email' AND client_password='$client_password' AND client_status='1' ";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
     
    if ($count == 1) {
        $_SESSION["client_id"] = $row['client_id'];    
        $_SESSION["client_name"] = $row['client_name'];    
        header("location: ../index.php");
    } 
    
    else {
        header("location: ../failed.php");
    }
?>