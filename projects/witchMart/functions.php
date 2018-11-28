<?php
    include 'dbConnection.php';
    $dbConn = startConnection("witchmart");
    
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
      
        $sql = "SELECT * FROM wm_product WHERE 1"; //Gettting all records from database
        
        if (!empty($product)){
            //This SQL prevents SQL INJECTION by using a named parameter
             $sql .=  " AND productName LIKE :product OR productDescription LIKE :product";
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
    
        
    }
    
?>