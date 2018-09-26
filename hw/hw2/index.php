<?php
    
    //array of image files.
    //files named 1-3, 1st reepresents spring, 2nd fall and third winter.
    $bg = array('1.jpg', '2.jpg', '3.jpg');
    
    //generates a random number for background.
    $i = rand(0, count($bg)-1);
    
    //    
    $selectedBg = "$bg[$i]";
   
    $randnum = rand(1,4); //might use for a loop
    
    switch($i){
        case 0: //for spring
            $symbol = rand(10,11);
            echo "<img id = \"photo\" src= \"img/$symbol.gif\" alt=\"Spring\" />";
            break;
            
        case 1://for fall
            $symbols= rand(5,6);
            echo "<img id = \"photo\" src = \"img/$symbols.gif\" alt=\"fall\" />";
            break;
        case 2://for winter
            $symbol = rand(7,8);
            echo "<img id= \"photo\" src = \"img/$symbol.gif\" alt=\"winter\" />";
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
            <div class = "flex-container">
                <form id="button">
                    <input type ="submit" value = "generate" />
                </form>
            </div>
        </body>
    </div>
</html>