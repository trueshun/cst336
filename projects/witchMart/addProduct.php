<?php

include 'dbConnection.php';
$dbConn = startConnection("witchmart");
include 'inc/functions.php';
validateSession();

if (isset($_GET['addProduct'])) { //checks whether the form was submitted
    
    $productName = $_GET['productName'];
    $description =  $_GET['description'];
    $price =  $_GET['price'];
    $catId =  $_GET['catId'];
    $image = $_GET['productImage'];
    
    
    $sql = "INSERT INTO wm_product (productName, productDescription, productImage,price, catId) 
            VALUES (:productName, :productDescription, :productImage, :price, :catId);";
    $np = array();
    $np[":productName"] = $productName;
    $np[":productDescription"] = $description;
    $np[":productImage"] = $image;
    $np[":price"] = $price;
    $np[":catId"] = $catId;
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute($np);
    echo "New Product was added!";
    
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title> Admin Section: Add New Product </title>
        <!-- bootstrap link -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" type="text/css" />
        <!-- css -->
        <link rel="stylesheet" href="css/add.css" type="text/css" />
    </head>
    <body>
        <?php
            include "inc/adminHeader.php";
        ?>
    <div class="outerBox">    
        <div class="nameBox">
            <h1> Adding New Product </h1>
        </div>
        
        <div class="titleBox">
            <form>
               Product name: <input type="text" name="productName"><br>
               Description: <textarea name="description" cols="50" rows="4"></textarea><br>
               Price: <input type="text" name="price"><br>
               Category: 
               <select name="catId">
                  <option value="">Select One</option>
                  <?php
                  
                  $categories = getCategories();
                  
                  foreach ($categories as $category) {
                      echo "<option value='".$category['catId']."'>" . $category['catName'] . "</option>";
                  }
                  
                  ?>
               </select> <br />
               Set Image Url: <input type="text" name="productImage"><br><br />
               <center><input type="submit" name="addProduct" class="btn btn-outline-dark" value="Add Product"></center>
            </form>
        </div><!--titleBox close -->
        
            <br /><br />
            <div class="returnBox">
                <a href="admin.php" class="btn btn-outline-dark">Return to ADMIN page</a>
            </div><!--returnBox close -->
    </div><!-- outerBox close -->
    </body>
</html>