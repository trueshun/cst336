<?php
    session_start();
    include 'inc/functions.php';
    include 'dbConnection.php';
    $dbConn = startConnection("witchmart");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Hogwarts Express - Index</title>
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
        
        <!-- Javascript for sparkles, lol -->
        <!-- <script type = "text/javascript" src= "js/spark.js"> </script> -->
        
        <!-- jquery code -->
        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
        <style>
            body{
                text-align:center;
            }
        </style>
    </head>
    <body>
        
        <?php
	        include 'inc/header.php';
	    ?>

        <br />
        <div class="outerBox">
            <div class="adminTitle">
                Log in <br />
            </div>
            <div class ="adminBox">
                <form method="post" action="loginProcess.php" class= "adminbox">
                    Username:  <input type="text" name="username"/> <br />
                    Password:  <input type="password" name="password"/> <br /> <br />
                    <input type="submit" class="btn btn-outline-dark" value="Admin Login">
                </form>
            </div> <!-- adminBox close -->
            <br />
            <!-- post normal shop viewing if not logged in as admin here -->
            <div class="innerBox">
            <form class>
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
                    <input id='search' type="submit" name="submit" class="btn btn-outline-dark" value="Search!"/> 
            </form>
            </div><!-- innerBox clos -->
        </div><!-- outerBox close -->
        <br>
        <hr>
        <hr>
        <br />
        <div class="searchResults">
            <?php
                if($_GET['submit'] == "Search!") {
                    echo "<h2>Search Results </h2>";
                    filterProducts();
                }
            ?>
        </div><!-- searchResults end -->
    </body>
    <?php
        include 'inc/footer.php';
    ?>
</html>