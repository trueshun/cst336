<?php
    
    //array of image files.
    //files named 1-3, 1st reepresents spring, 2nd fall and third winter.
    $bg = array('1.jpg', '2.jpg', '3.jpg');
    
    //generates a random number for background.
    $i = rand(0, count($bg)-1);
    //    
    $selectedBg = "$bg[$i]";
    
    $numran = rand(1,6);
    switch($i){
        case 0: //for spring
            //for($ii=0;$ii<$numran; $ii++)
            while($numran != 0)
            {
                $springSymbol = rand(10,11);
                if($springSymbol == 10)
                {
                    echo "<img id = \"photo\" src= \"img/$springSymbol.gif\" alt=\"Spring\" />";
                }
                else{
                    echo "<img id = \"photo\" src= \"img/$springSymbol.gif\" alt=\"Spring\" />";
                }
                $numran--;
            }
            break;
            
        case 1://for fall
            for($ii=0;$ii<$numran; $ii++){
                $fallSymbols= rand(5,6);
                if($fallSymbols == 5){
                    echo "<img id = \"photo\" src = \"img/$fallSymbols.gif\" alt=\"fall\" />";
                }
                else{
                    echo "<img id = \"photo\" src = \"img/$fallSymbols.gif\" alt=\"fall\" />";
                }
            }
            break;
        case 2://for winter
            for($ii=0;$ii<$numran; $ii++){
                $winterSymbol = rand(7,8);   
                
                if($winterSymbol == 7){
                    echo "<img id= \"photo\" src = \"img/$winterSymbol.gif\" alt=\"winter\" />";
                }
                else{
                    echo "<img id= \"photo\" src = \"img/$winterSymbol.gif\" alt=\"winter\" />";
                }
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
                max-height:100px;
                max-width:200px;
                padding:15%;
            }
        </style>
    </head>
    
        <body>
            <div class = "flex-container">
                <form id="button">
                    <input type ="submit" value = "generate" />
                </form>
            </div>
        </body>
</html>