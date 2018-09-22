<?php

function displayArray($my_symbols){
    echo "<hr>";
    print_r($my_symbols); //diplays array content
    
    for($ii=0; $ii < count($symbols); $ii++){
        echo $symbols[$ii] . ", ";
    }
}//scope of function is local. Variable needs to be called in parameter
    $symbols = array("seven");
    print_r($symbols); //diplays array content
    
    $points = array("orange"=>250, "cherry"=> 500);//associative arrays - index 0/zero does not exist
    //echo $points["orange"];//displays 250.
    $points["seven"] = 1000;//to add value to associative array.
    
    array_push($symbols, "orange", "grapes"); //adds elements to the end of the array.
    print_r($symbols);// displays array content
    
    $symbols[] = "cherry";//adds element to the end of the array.
    print_r($symbols);
    displayArray($symbols);
    
    sort($symbols);//sort in acending order
    displayArray($symbols);
    
    rsort($symbols);//reverse sort
    displayArray($symbols);
    
    unset($symbols[2]); //removes an element in the array
    displayArray($symbols);
    
    $symbols = array_values($symbols); // re-indexes elements in an array.
    displayArray($symbols);
    
    shuffle($symbols);
    displayArray($symbols);
    
    echo "<br">
    
    $random = rand(0,count($symbols) - 1);
    echo "Random item: " . $symbols[rand(0, count($symbols) - 1)];
    //the period is to combine regular text with php code
    //or
    echo "Random Item " . $symbols[array_rand($symbols)]; //displays random index.
    echo "<hr>";
    
    $indexes = array();
    
    for($i=0;$i<3;$i++){
        $indexes = $symbols[ array_rand($symbols) ];
        echo "<img src='../lab2/img/" . $symbols[ array_rand($symbols) ] . ".png'>"; //displays random index.
    }
    echo "<hr>";
    print_r($indexes);
    
 
    if($indexes[0] == $indexes[1] && $indexes[1] == $indexes[2]) {
        echo "Congratz! You won " . $points["cherry"];
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

    </body>
</html>