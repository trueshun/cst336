<?php
    session_start();
    
    function validateSession(){
        if(!isset($_SESSION['adminFullName'])){
    
        header("Location: index.php"); //redirects users who haven't logged in 
        exit;
        }   
    }
    
    // used to display categories for dropdown
    function displayCategories() { 
        global $dbConn;
        
        $sql = "SELECT * FROM wm_category ORDER BY catName";
        $stmt = $dbConn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($records as $record) {
            echo "<option value='".$record['catId']."'>" .$record['catName']. "</option>";
        }
    }
    
    function filterProducts() {
    global $dbConn;
    
    $namedParameters = array();
    $product = $_GET['productName'];
    
    //This SQL works but it doesn't prevent SQL INJECTION (due to the single quotes)
    //$sql = "SELECT * FROM om_product
    //        WHERE productName LIKE '%$product%'";
  
    $sql = "SELECT * FROM wm_product WHERE 1"; //Gettting all records from database
    
    if (!empty($product)){
        //This SQL prevents SQL INJECTION by using a named parameter
         $sql .=  " AND productName LIKE :product";
         $namedParameters[':product'] = "%$product%";
    }
    
    if (!empty($_GET['category'])){
        //This SQL prevents SQL INJECTION by using a named parameter
         $sql .=  " AND catId =  :category";
          $namedParameters[':category'] = $_GET['category'] ;
    }
    
    if (!empty($_GET['priceFrom'])){
            //This SQL prevents SQL INJECTION by using a named parameter
             $sql .=  " AND price >=  :priceFrom";
              $namedParameters[':priceFrom'] = $_GET['priceFrom'] ;
    }
    
    if (!empty($_GET['priceTo'])){
            //This SQL prevents SQL INJECTION by using a named parameter
             $sql .=  " AND price <=  :priceTo";
              $namedParameters[':priceTo'] = $_GET['priceTo'] ;
    }
    
    if (isset($_GET['orderBy'])) {
        if ($_GET['orderBy'] == "low-high") {
            $sql .= " ORDER BY price ASC";
        } else if ($_GET['orderBy'] == "high-low"){
                
        $sql .= " ORDER BY price DESC";
        }else if($_GET['orderBy'] == "az"){
            $sql .= " ORDER BY productName ASC";
        }else{
            $sql .= " ORDER BY productName DESC";
        }   
    }

    $stmt = $dbConn->prepare($sql);
    $stmt->execute($namedParameters);
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);  
    //print_r($records);
    
    
        echo "<table width='100' class='table table-striped table-dark'>";
        foreach ($records as $record) {
            
            echo "<tr>";
            echo "<td><img src='" . $record['productImage'] . "'  width='100px'></td>";
            //echo "<td><h2><a href='purchaseHistory.php?productId=".$record['productId']."'>";
            //echo "<td><h2>".$record['productId'];
            echo "<td><h2>".$record['productName']. "<h2></td>";
            //echo "<td><h4>".$record['productDescription']. "<h4></td>";
            echo "<td><h2>Price: $" .$record['price']. "</h2></td>";
            
            echo "<td><form method ='post'>";
            echo "<input type='hidden' name = itemName value='". $record['productName'] ."'>";
            echo "<input type='hidden' name = itemPrice value='". $record['price'] ."'>";
            echo "<input type='hidden' name = itemImage value='". $record['productImage'] ."'>";
            echo "<input type='hidden' name = itemId value='". $record['productId'] ."'>";
            echo "</form></td>";
            
            
            echo "</tr>";
            
        }
        
        echo "</table>";

}

    
 
    function getCategories() {
        global $dbConn;
        
        $sql = "SELECT * FROM wm_category ORDER BY catName";
        $stmt = $dbConn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC); //we're expecting multiple records   
        
        //print_r($records);
        
        return $records;
        
    }
    function getProductInfo($productId) {
         global $dbConn;
        
        $sql = "SELECT * FROM wm_product WHERE productId = $productId";
        $stmt = $dbConn->prepare($sql);
        $stmt->execute();
        $record = $stmt->fetch(PDO::FETCH_ASSOC);   
        
        return $record;
    }   
    
    function displayAllProducts(){
        global $dbConn;
        
        $sql = "SELECT * FROM wm_product ORDER BY productName";
        $stmt = $dbConn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC); //we're expecting multiple records
    
        foreach ($records as $record) {
            
            echo "<a class='btn btn-primary' role='button' href='updateProduct.php?productId=".$record['productId']."'>Update</a>";
            //echo "[<a href='deleteProduct.php?productId=".$record['productId']."'>Delete</a>]";
            echo "<form action='deleteProduct.php' onsubmit='return confirmDelete()'>";
            echo "<input type='hidden' name='productId' value='".$record['productId']."'>";
            echo "<button class='btn btn-outline-danger' type='submit'>Delete</button>";
            echo "</form>";
            
            echo "[<a 
            onclick='openModal()' target='productModal'
            href='productInfo.php?productId=".$record['productId']."'>".$record['productName']."</a>]  ";
            echo " $" . $record[price]   . "<br><br>";
            
        }
    }
    
    // function avgPrice(){
    //     global $dbConn;
        
    //     $sql = "SELECT AVG(price) 
    //             AS AveragePrice
    //             FROM wm_product";

    //     $stmt = $dbConn->prepare($sql);
    //     $stmt->execute();
    //     $record = $stmt->fetch(PDO::FETCH_ASSOC);   
        
    //     echo "The average price of all the items in the database is ". $record['AveragePrice']. ".";
    // }
    
    // function itemCount(){
    //     global $dbConn;
        
    //     $sql = "SELECT COUNT(productId) 
    //             AS CountTotal
    //             FROM wm_product";
                
    //     $stmt = $dbConn->prepare($sql);
    //     $stmt->execute();
    //     $record = $stmt->fetch(PDO::FETCH_ASSOC);   
        
    //     //echo $record['CountTotal'];
    //     echo 'There are ' .$record['CountTotal']. ' items in the database.';
    // }
    
    // function maxPrice(){
    //     global $dbConn;
        
    //     $sql = "SELECT max(productName) as MaxName,
    //             MAX(price) as MaxPrice 
    //             FROM wm_product";
                
    //     $stmt = $dbConn->prepare($sql);
    //     $stmt->execute();
    //     $record = $stmt->fetch(PDO::FETCH_ASSOC);   
        
    //     echo 'The most expensive item is ' .$record['MaxName']. ', which cost '.$record['MaxPrice']. '.';
    // }
    
?>