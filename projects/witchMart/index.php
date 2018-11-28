<?php
    session_start();
    include 'functions.php';
    // filters and displays the products
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Wich Mart Index</title>
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
        
        <!-- jquery code -->
        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
        <script>
            
        </script>
    </head>
    <body>
        <!-- <div class="jumbotron"> -->
            <h1 id="title">Witch Mart</h1>
        <!-- </div> -->
        
        <form action="adminloginpage.php">
            <input type="submit" id="main_page_buttons" value="Admin Login" />
        </form>
        
        <!-- post normal shop viewing if not logged in as admin here -->
        <form>
            Product: <input type="text" name="productName" placeholder="Product keyword" class ="searchInputs"/> <br />
            
            Category: 
            <select name="category" class ="searchInputs">
               <option value=""> -Select one- </option>  
               <?=displayCategories()?>
            </select>
            <br>
            Price: From: <input type="number" name="priceFrom" size="7" class ="searchInputs"/> 
             To: <input type="number" name="priceTo" size="7" class ="searchInputs"/>
            <br>
            
            Order Price By <br>
              <input type="radio" name="orderBy" value="low-high"
                <?php if ($_GET['orderBy'] == "ASC") {
                //echo "checked";
                } ?>
                /> low-high <br>
              <input type="radio" name="orderBy" value="high-low"
                <?php if ($_GET['orderBy'] == "DECS") {
                //echo "checked";
                } ?>
                /> high-low <br>
            <br>
            Order Name By<br>
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