<?php
session_start();

include '../../inc/dbConnection.php';
$dbConn = startConnection("witchmart");
include 'inc/functions.php';
validateSession();


if (isset($_GET['productId'])) {
  $productInfo = getProductInfo($_GET['productId']);
 // print_r($productInfo);
}
//function updateItems() {
    if (isset($_GET['updateProduct'])){  //user has submitted update form
    $productName = $_GET['productName'];
    $description = $_GET['description'];
    $price =  $_GET['price'];
    $catId =  $_GET['catId'];
    $image = $_GET['productImage'];
    
    $sql = "UPDATE wm_product 
            SET productName= :productName,
               productDescription = :productDescription,
               price = :price,
               catId = :catId,
               productImage = :productImage
            WHERE productId = " . $_GET['productId'];
         
    $np = array();
    $np[":productName"] = $productName;
    $np[":productDescription"] = $description;
    $np[":productImage"] = $image;
    $np[":price"] = $price;
    $np[":catId"] = $catId;
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute($np);


    echo"<h4><b>Product has been updated. Refresh page to see changes.</b></h4>";
    
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title> Update Products! </title>
        <!-- bootstrap link -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" type="text/css" />
        <!-- css -->
        <link rel="stylesheet" href="css/update.css" type="text/css" />
    </head>
    <body>
        <?php
            include "inc/adminHeader.php";
        ?>
        <div class="outerBox">
        <div class="nameBox"> 
            <h1> Updating A Product </h1>
        </div>   
        <div class="titleBox">
        <form>
            <input type="hidden" name="productId" value="<?=$productInfo['productId']?>">
           Product name: <input type="text" name="productName" value="<?=$productInfo['productName']?>"><br>
           Description: <textarea name="description" cols="50" rows="4"> <?=$productInfo['productDescription']?> </textarea><br>
           Price: <input type="text" name="price" value="<?=$productInfo['price']?>"><br>
           Category: 
           <select name="catId">
              <option value="">Select One</option>
              <?php
              
              $categories = getCategories();
              
              foreach ($categories as $category) {
                  
                  echo "<option  "; 
                  echo  ($category['catId']==$productInfo['catId'])?"selected":"";
                  echo " value='".$category['catId']."'>" . $category['catName'] . "</option>";
                  
              }
              
              ?>
           </select> <br />
           Set Image Url: <input type="text" name="productImage" value="<?=$productInfo['productImage']?>"><br /><br />
           <center><input type="submit" name="updateProduct" class="btn btn-outline-dark" value="Update Product"></center>
        </form>
        </div><!-- outerBox end -->
        <br /> <br />
        <div class="returnBox">
            <a href="admin.php" class="btn btn-outline-dark" >Return to ADMIN page</a>
        </div><!-- returnBox close -->
        
    </body>
</html>