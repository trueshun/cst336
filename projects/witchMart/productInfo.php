<?php
    session_start();
    
    include 'dbConnection.php';
    $dbConn = startConnection("witchmart");
    include 'inc/functions.php';
    validateSession();
    
    if (isset($_GET['productId'])) {
    
      $productInfo = getProductInfo($_GET['productId']);    
      //print_r($productInfo);
        
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Product Information</title>
    </head>
    <body>
        <h3><?=$productInfo['productName']?></h3>
        <?=$productInfo['productDescription']?> <br />
        <img src='<?=$productInfo['productImage']?>' height = '75' />
    </body>
</html><!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

    </body>
</html>