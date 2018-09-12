<?php

    function getLuckyNumber(){
        $luckyNumber = 4; 
        
        while($luckyNumber == 4){
            $luckyNumber = rand(1,10);
        }
        
        echo $luckyNumber;
    }
?>

    function getRandomColor(){
        echo "rgba(".rand(0,255).", ".rand(0,255).", ".rand(0,255).",".(rand(0,10)/10).");";
    }
    
<!DOCTYPE html>
<html>
    <head>
        <title> Random Colors</title>
        <style>
            body{
                <?php
                
                   /* $red = rand(0,255);*/
                    echo "background-color:rgba(".rand(0,255).", ".rand(0,255).", ".rand(0,255).",".(rand(0,10)/10).");";
                ?>
            }
            h1{
                <?php
                    background-color: <?php getRandomColor(); ?>
                    echo "background-color:rgba(".rand(0,255).", ".rand(0,255).", ".rand(0,255).",".(rand(0,10)/10).");";
                    echo "color:rgba(".rand(0,255).", ".rand(0,255).", ".rand(0,255).",".(rand(0,10)/10).");";
                ?>
    
        
    }
        </style>
    </head>
    
    <!-- 
        Display random number when refreshed
    -->
    <body>
        <h1>
            My lucky number is: 
            <?php
                getLuckyNumber();
            ?>
            
        </h1>
    </body>
</html>