<?php
include'../../inc/dbConnection.php';
$dbConn = startConnection("ottermart");

//Creating database connection
$host = "localhost";
$dbname = "ottermart";
$username = "root";
$password = "";
$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);//creates database connection
$dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//creates the database connection

function displayCategories() { 
    global $dbConn;
    
    $sql = "SELECT * FROM om_category ORDER BY catName";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //print_r($records);
    //echo "<hr>";
    //echo $records[2] . "<br>";
    //echo $records[1]['catDescription'] . "<br>";
    
    foreach ($records as $record) {
        echo "<option value='".$record['catId']."'>" . $record['catName'] . "</option>";
    }
}

function filterProducts(){
    global $dbConn;
    $namedParameters = array();
    $product = $_GET['productName'];
    
    //$sql = "SELECT * FROM om_product
    //      WHERE productName LIKE '%$product%"; //This sql works but it doesn't prevetn sql injection
    //    //name parameters are sued to prevent sql inhection
    //This SQL prevents SQL INJECTION by using a named parameter
    $sql = "SELECT * FROM om_product WHERE 1";//getting all the products.
    if(!empty($product)){
        $sql .= " AND productName LIKE :product";//needs to have the space in front of the AND, else errors//cannot have two insatnces of WHERE when one has already been stated.
        $namedParameters[':product'] = "%$product%";
    }
    
    if(!empty($_GET['category'])){
        $sql .= " AND catId = :category";//needs to have the space in front of the AND, else errors//cannot have two insatnces of WHERE when one has already been stated.
        $namedParameters[':category'] = $_GET['category'] ;
    }
    
    if(isset($_GET['orderBy'])){//for checkboxes and radio
        if($_GET['orderBy'] == "productPrice"){
            $sql .= " ORDER BY productName";
        }
        else{
            $sql .= " ORDER BY productName";
        }
    }
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute($namedParameters);
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //print_r($records); //this checks to see if everything is working well.
    
    foreach ($records as $record){
        echo "<a href='productInfo.php?productId=" . $record['productId'] . ">";
        echo $record['productName'];
        echo "</a> ";
        echo $record['productDescription'] . " $" .  $record['price'] .   "<br>";
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Lab 6: Ottermart Product Search</title>
    </head>

    <body>
        
        <h1> Ottermart </h1>
        <h2> Product Search </h2>
        
        <form>
            
            Product: <input type="text" name="productName" placeholder="Product keyword" /> <br />
            
            Category: 
            <select name="category">
               <option value=""> Select one </option>  
               <?=displayCategories()?>
            </select>
            <br />
            Price:From <input name ="priceFrom" type = "text" size = 2;> 
            To: <input name ="priceTo" type="text" size =4>
            <br />
            Order result by:
            <br />
            <input type= "radio" name = "orderBy" value="productPrice">Price
            <br />
            <input type="radio" name ="orderBy" value="productName">Name
            <br />
            <input type="submit" name="submit" value="Search!"/>
        </form>
        <br />
        <?= filterProducts() ?>
        
</html>