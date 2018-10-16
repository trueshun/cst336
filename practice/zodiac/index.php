<?php

$sessionsStart();

function printYear($start,$end){
    //$ii = 1500;
    $ii =$start;
    
    
    $sum =0;
    $zodiac = array("rat","ox","tiger","rabbit","dragon","snake","horse","goat","monkey","rooster","dog","pig");
    
    $zodiac_counter=0;

    
    while($ii <=$end){
        if($ii == 1776){
            echo "<li> year ". $ii . " USA Independance!</li> <br />";
            //$sum += $ii;
            $ii++;
        }else if($ii%100==0){
            echo "<li> year ". $ii . " Happy new century!</li><br />";
            //$sum +=$ii;
            $ii++;
        }
        echo "<li> year ". $ii . "</li><br />";
        $sum += $ii;
        $ii++;
    }
    echo "<br />";
    echo $sum;
}

function createTable(){
    $res = '<table width ="200" border = "1">';
    $max_data = 
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Chinese Zodiac</title>
    </head>
    <body>
        <li>
            <?php printYear(1500,1600); ?>
            
            <form method = "GET">
                <strong>Start year </strong><input type="number" name ="start"><br />
                <strong>End year </strong><input type ="number" name ="end"><br />
                <input type="submit" value = "submit">
            </form>
        </li>
    </body>
</html>