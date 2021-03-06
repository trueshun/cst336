<?php
    include'../../inc/dbConnection.php';
    $dbConn = startConnection("midtermPrac");
    //creating database connection
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "midtermPrac";
    
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);//creates database connection
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//creates the database connection
    
    function displayBetween(){
        global $dbConn; //jfc, i forgot to add this and it was pain
        
        echo "<h3>1. List all cities/towsn with a population between 50,00 to 80,000 </h3><br />";
        $sql = "SELECT town_name, population FROM mp_town WHERE population BETWEEN 50000 AND 80000";
        
        $stmt = $dbConn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($records as $record) {
            echo $record['town_name'] . " - " . $record['population'] . "<br />";
        }
    }
    
    function displayMaxMinPop(){
        global $dbConn;
        
        echo "<h3>2. List all towns and population, orderd by population(from biggest to smallest.</h3><br />";
        $sql = "SELECT town_name, population FROM mp_town ORDER BY population DESC";//DESC reverses order by
        
        $stmt = $dbConn->prepare($sql);
        $stmt->execute();
        $records = $stmt ->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($records as $record){
            echo $record['town_name'] . " ------- " . $record['population'] . "<br />";
        }
    }
    
    function displayLast3(){
        global $dbConn;
        
        echo "<h3>3. List the three least populated towns. </h3><br />";
        $sql ="SELECT town_name, population FROM mp_town ORDER BY population LIMIT 3";
        
        $stmt = $dbConn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($records as $record){
            echo $record['town_name'] . " - " . $record['population'] . "<br />";
        }
    }
    
    function displayAllS(){
        global $dbConn;
        
        echo "<h3>4. List the counties that start with the letter 'S' </h3>";
        $sql = "SELECT county_name FROM mp_county WHERE county_name LIKE 'S%'";
        
        $stmt =$dbConn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($records as $record){
            echo $record['county_name'] . "<br />";
        }
    }
    
    function populationByCounty(){
        global $dbConn;
        
        echo"<h3>5. Population by county.</h3><br />";
        $sql = "SELECT county_name, SUM(population) total FROM mp_town JOIN
                mp_county ON mp_town.county_id = mp_county.county_id GROUP BY county_name";
        
        $stmt = $dbConn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($records as $record){
            echo $record['county_name'] . " " . $record['total'] . "<br />";
        }
    }
    
    function townWithCountyName(){
        global $dbConn;
        
        echo "<h3>6. Display towns/cities with county name.</h3><br />";
        $sql = "SELECT town_name, county_name FROM mp_town JOIN mp_county ON 
                mp_town.county_id = mp_county.county_id";
                
        $stmt= $dbConn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($records as $record){
            echo $record['town_name'] . " - " . $record['county_name'] . "<br />";
        }
    }
    
    function populationByState(){
        global $dbConn;
        
        echo "<h3>7. Population by state.</h3><br />";
        $sql = "SELECT state_name, SUM(population) total FROM mp_town JOIN
                mp_county ON mp_town.county_id = mp_county.county_id JOIN mp_state ON
                mp_county.state_id = mp_state.state_id GROUP BY state_name";
                
        $stmt = $dbConn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($records as $record){
            echo $record['state_name'] . " - " . $record['total'] . "<br />";
        }
    }
    
    function countiesWithNoTown(){
        global $dbConn;
        
        echo "<h3>8. Display counties withot a town.</h3><br />";
        $sql = "SELECT county_name FROM mp_county LEFT JOIN mp_town ON 
                mp_county.county_id = mp_town.county_id WHERE mp_town.county_id IS NULL";
        
        $stmt=$dbConn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($records as $record){
            echo $record['county_name'] . "<br />";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Midterm2 practice</title>
    </head>

    <body>
        
        <h1> midterm2 database </h1>
        <br />
        
        <?php 
            displayBetween();
        ?>
        <hr>
        <?= displayMaxMinPop(); ?>
        <hr>
        <?= displayLast3(); ?>
        <hr>
        <?= displayAllS(); ?>
        <hr>
        <?= populationByCounty(); ?>
        <hr>
        <?= townWithCountyName(); ?>
        <hr>
        <?= populationByState(); ?>
        <hr>
        <?= countiesWithNoTown(); ?>
        
        <hr>
        <div id="rubric2Div">  
  <table border=1 width="600" align='center'>
    <tr><th>#</th><th>Task Description</th><th>Points</th></tr>
    <tr style="background-color:green">
      <td>1</td>
      <td>The report shows all cities/towns that have a population between 50,000 and 80,000</td>
      <td width="20" align="center">10</td>
    </tr>  
    <tr style="background-color:green">
      <td>2</td>
      <td>The report shows all towns ordered by population (from biggest to smallest)</td>
      <td width="20" align="center">10</td>
    </tr>  
    <tr style="background-color:green">
      <td>3</td>
      <td>The report lists the three least populated towns</td>
      <td width="20" align="center">10</td>
    </tr>     
    <tr style="background-color:green">
      <td>4</td>
      <td>The report Lists the counties that start with the letter "S"</td>
      <td width="20" align="center">10</td>
    </tr>
<!--     <tr style="background-color:#99E999">
      <td>7</td>
      <td>This rubric is properly included AND UPDATED (BONUS)</td>
      <td width="20" align="center">2</td>
 </tr>     -->
     <tr>
      <td></td>
      <td>T O T A L </td>
      <td width="20" align="center"><b></b></td>
    </tr> 
  </table>    
</div
        
</html>