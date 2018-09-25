<?php
    
    //array of image files.
    //files named 1-3, 1st reepresents spring, 2nd fall and third winter.
    $bg = array('1.jpg', '2.jpg', '3.jpg');
    
    //generates a random number for background.
    $i = rand(0, count($bg)-1);
    
    //    
    $selectedBg = "$bg[$i]";
    
    
    // // selecting random images
    // $spring = array('10.gif','11.gif');
    // //generates a random number for items
    // $jj = rand(0, 1);
    // //puts random number as index of spring array
    // $selectedspring = "$spring[$jj]";
    //<img src="img/<?php $spring = rand(0,1); echo $spring; 
   
    $randnum = rand(1,5);
    
    switch($i){
        case 0: //for spring
            for($ii=0; $ii < $randnum; $ii++)
            {
                // selecting random images
                $spring = array('10.gif','11.gif');
                //generates a random number for items
                $jj = rand(0, count($spring) -1);
                //puts random number as index of spring array
                $selectedspring = "$spring[$jj]";
                echo "<img src = \"img/<?php echo $selectedspring\" alt=\"spring\" / ?>";
            }
            break;
        case 1://for fall
            for($ii=0; $ii < $randnum; $ii++)
            {
                // selecting random images
                $fall = array('5.gif','6.gif');
                //generates a random number for items
                $jj = rand(0, count($fall) -1);
                //puts random number as index of array.
                $selectedfall = "$fall[$jj]";
                //puts random number as index of spring array
                $selectedfall = "$fall[$jj]";
                echo "<img src = \"img/<?php echo $selectedfall\" alt=\"fall\" / ?>";
            }
            break;
        case 2://for winter
            for($ii=0; $ii < $randnum; $ii++)
            {
                // selecting random images
                $winter = array('7.gif','8.gif');
                //generates a random number for items
                $jj = rand(0, count($winter) -1);
                //puts random number as index of array.
                $selectedwinter = "$winter[$jj]";
                //puts random number as index of spring array
                $selectedwinter = "$winter[$jj]";
                echo "<img src = \"img/<?php echo $selectedspring\" alt=\"winter\" / ?>";
            }
            break;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Season Generator</title>
        <link rel = "stylesheet" type="text/css" href = "css/styles.css" />
        <style type="text/css">
            body{
                background-image: url('img/<?php echo $selectedBg ?>');
                background-repeat: no-repeat;
                background-size: contain;
                padding:15%;
                width:30%;
            }
        </style>
    </head>
    
    <div>
        <body>
            <div class = "items">
                <form id="button">
                    <input type ="submit" value = "generate" />
                </form>
            </div>
        </body>
    </div>
</html>