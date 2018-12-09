<?php
    include '../dbConnection.php';
    $dbConn = startConnection("witchmart");
    
    $sql = "SELECT * FROM wm_product WHERE productId = ".$_GET['productid'];
            
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch(PDO::FETCH_ASSOC); //we're expecting just one record
    //print_r($record);
    echo json_encode($record);
?>