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
          
    <table width="600" border="1" align='center'>
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
    <tr style="background-color:green">
      <td>1</td>
      <td>The page includes the form elements as the Program Sample: dropdown menu, radio buttons, etc.</td>
      <td width="20" align="center">5</td>
    </tr>
    <tr style="background-color:green">
      <td>2</td>
      <td>Errors are displayed if month or number of locations are not submitted.</td>
      <td width="20" align="center">5</td>
    </tr> 
    <tr style="background-color:green">
      <td>3</td>
      <td>Header and Subheader are displayed with info submitted. </td>
      <td align="center">5</td>
    </tr>    
	<tr style="background-color:green">
      <td>4</td>
      <td>A table with days and weeks is displayed when submitting the form</td>
      <td align="center">5</td>
    </tr> 
    <tr style="background-color:green">
      <td>5</td>
      <td>The number of days in the table correspond to the month selected</td>
      <td align="center">10</td>
    </tr>
    <tr style="background-color:#FFC0C0">
      <td>6</td>
      <td>Random images are displayed in random days</td>
      <td align="center">5</td>
    </tr>       
    <tr style="background-color:#FFC0C0">
      <td>7</td>
      <td>The number of random images correspond to the number of locations and country submitted</td>
      <td align="center">10</td>
    </tr>  
    <tr style="background-color:#FFC0C0">
      <td>8</td>
      <td>The proper name of the location is displayed below the image 
      		(e.g. "New York", "Las Vegas")</td>
      <td align="center">10</td>
    </tr>  
    <tr style="background-color:green">
      <td>9</td>
      <td>The list of months submitted along with the country and number of locations is displayed below the table (using Sessions)</td>
      <td align="center">15</td>
    </tr>    
    <tr style="background-color:#FFC0C0">
      <td>10</td>
      <td>Random locations should be ordered alphabetically, if user checks corresponding radio button (A-Z or Z-A). </td>
      <td align="center">15</td>
    </tr>        
    <tr style="background-color:#FFC0C0">
      <td>11</td>
      <td>The web page uses Bootstrap and has a nice look. </td>
      <td align="center">5</td>
    </tr>        
 <!--   <tr style="background-color:#99E999">
      <td>12</td>
      <td>This rubric is properly included AND UPDATED (BONUS)</td>
      <td width="20" align="center">2</td>
    </tr>   -->  
     <tr>
      <td></td>
      <td>T O T A L </td>
      <td width="20" align="center"><b></b></td>
    </tr> 
  </tbody></table>

    </body>
</html>