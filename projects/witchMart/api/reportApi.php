<?php

    include '../dbConnection.php';
    $dbConn = startConnection("witchmart");

    if($_GET['id'] == "avg"){
        $sql = "SELECT AVG(price) 
                AS AveragePrice
                FROM wm_product";
    }
    if($_GET['id'] == "itemTotal"){
        $sql = "SELECT COUNT(productId) 
                AS CountTotal
                FROM wm_product";
    }
    if($_GET['id'] == "maxPrice"){
        $sql = "SELECT max(productName) as MaxName,
                MAX(price) as MaxPrice 
                FROM wm_product";
    }
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
    
    echo json_encode($record);

?>