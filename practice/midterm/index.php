<?php

    // if (isset($_POST["location"])) {  //checks if the form has been submitted

    //     $location = $_POST["location"];
        
    //     if (!empty($_POST['months'])) { //user selected a category
            
    //         $keyword = $_POST['months'];
    //     }
              
    // }
    
    // function formIsValid(){
    //     if(empty($_POST['location'] && empty($_POST['months']))){
    //         echo "Error you need to pick the month or location";
    //     }
    //     return true;
    // }
    
    $monthsErr = $locationErr = "";
    $months = $location = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["months"])){
            $monthsErr = "Missing";
        }
        else{
            $months = $_POST["months"];
        }
        if(!isset)
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
        <form method = "POST">
            Select Month: 
            <select name="months">
                <option value ="nov">November</option>
                <option value ="dec">December</option>
                <option value ="jan">January</option>
                <option  <?= ($_POST['months'] == "February")?" selected":"" ?>February</option>
            </select> 
            
            <br />
            Number of locations:
            <input type="radio" name="location" value="three"><strong>Three</strong>
            <input type="radio" name ="location" value ="four"><strong>Four</strong>
            <input type="radio" name ="location" value ="five"><strong>Five</strong>
            
            <br />
            Select Country: 
            <select name ="country">
                <option value="usa">USA</option>
                <option value ="mex">Mexico</option>
                <option value ="fra">France</option>
            </select>
            <br />
            Visit locations in alphabetical order:
            <input type = "radio" name="order" value ="az"><strong>A-Z</strong>
            <input type = "radio" name="order" value ="za"><strong>Z-A</strong>
            <br />
            <input type = "submit" name ="sumbit" value ="Create Itinerary">
        </form>
        <br />
        <div class = "container">
            <?php formIsValid(); ?>
        </div>
    </body>
</html>