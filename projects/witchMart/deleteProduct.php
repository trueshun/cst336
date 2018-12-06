<?php

    session_start();
    
    include 'dbConnection.php';
    $dbConn = startConnection("witchmart");
    include 'inc/functions.php';
    validateSession();
    
    $sql = "DELETE FROM wm_product WHERE productId = " . $_GET['productId'];
    $stmt=$dbConn->prepare($sql);
    $stmt->execute();
    
    header("Location: admin.php");
?>