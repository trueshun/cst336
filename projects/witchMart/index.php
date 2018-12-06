<?php
    session_start();
    include 'inc/functions.php';
    include 'dbConnection.php';
    $dbConn = startConnection("witchmart");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Wich Mart - Index</title>
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
        
        <!-- jquery code -->
        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
        <script>
            
        </script>
    </head>
    <body>
        <!-- navbar -->
        
        
        <h1 id="title">Witch Mart</h1>
        
        <form method="post" action="loginProcess.php">
            Username:  <input type="text" name="username"/> <br>
            Password:  <input type="password" name="password"/> <br>
            <input type="submit" value="Login">
        </form>
        <br />
        
        <!-- post normal shop viewing if not logged in as admin here -->
        <form>
            Product: <input type="text" name="productName" placeholder="Search Here" class ="searchInputs"/> <br />
            
            Category: 
            <select name="category" class ="searchInputs">
               <option value=""> -Select one- </option>  
               <?=displayCategories()?>
            </select>
            <br>
            Price: From: <input type="number" name="priceFrom" size="7" class ="searchInputs"/> 
             To: <input type="number" name="priceTo" size="7" class ="searchInputs"/>
            <br>
            
            Order Price By: <br>
                <input type="radio" name="orderBy" value="low-high">
                low-high <br>
                <input type="radio" name="orderBy" value="high-low"> 
                high-low <br>
            <br>
            Order Name By: <br>
                <input type = "radio" name = "orderBy" value ="az">A-Z
                <input type = "radio" name = "orderBy" value ="za">Z-A
                <br />
            <input id='search' type="submit" name="submit" value="Search!"/>
        </form>
        
        <br>
        <hr>
        
        <?php
            if($_GET['submit'] == "Search!") {
                echo "<h2>Search Results </h2>";
                filterProducts();
            }
        ?>
        <br />
        <footer>
            &copy;Chavez 
        </footer>
    </body>
</html>