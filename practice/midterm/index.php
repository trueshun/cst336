<?php

    include "functions.php";
    
    function isValid(){
        $valid = true;
        
        if(!isset($_GET["location"]) || $_GET["location"] > 0){
            echo "<h4>Please select the number of locations.</h4>";
            $valid = false;
        }
        if(!isset($_GET["months"]) || $_GET["months"] == ""){
            echo '<h4>Please select a month.</h4>';
            $valid = false;
        }
        return $valid;
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Winter Vacation Planner</title>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <style>
        	@import url("css/styles.css");
        </style>
    </head>
    <body>
        <div class="jumbotron">
            <h1> Winter Vacation Planner ! </h1>
        </div>
        <form method = "get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Select Month: 
            <select name="months">
                <option value ="" >Select</option> 
                <option value ="november">November</option>
                <option value ="december">December</option>
                <option value ="january">January</option>
                <option value ="february">February</option>
            </select> 
            
            <br />
            Number of locations:
            <input type="radio" name ="location" value ="three"><strong>Three</strong>
            <input type="radio" name ="location" value ="four"><strong>Four</strong>
            <input type="radio" name ="location" value ="five"><strong>Five</strong>
            
            <br />
            Select Country: 
            <select name ="country">
                <option value="USA">USA</option>
                <option value ="Mexico">Mexico</option>
                <option value ="France">France</option>
            </select>
            <br />
            Visit locations in alphabetical order:
            <input type = "radio" name="order" value ="az"><strong>A-Z</strong>
            <input type = "radio" name="order" value ="za"><strong>Z-A</strong>
            <br />
            <input type = "submit" name ="sumbit" value ="Create Itinerary">
        </form>
        <br />
        
        <div class="container">
            <?php isValid(); ?>
        </div>
        <div class ="displayData">
            <?php 
                if(isset($_GET["months"])){
                    displayHeader();
                    generateTable();
                    displaySubheader();
                }
            ?>
        </div>
    </body>
</html>