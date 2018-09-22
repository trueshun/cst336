<?php
    function displayPoints($random_value1, $random_value2, $random_value3){

        echo "<div id='output'>";
        if($random_value1 == $random_value2 and $random_value2 == $random_value3){
            switch($random_value1){
                case 0: $totalPoints = 1000;
                    echo "<h1>Jackpot!</h1>";
                    echo "<audio autoplay>";
                    echo "<source src = \"slot.mp3\" type =\"audio/mpeg\">";
                    echo "</audio>";
                    break;
                case 1: $totalPoints = 500;
                    break;
                case 2: $totalPoints = 250;
                    break;
                case 3: $totalPoints = 900;
                    break;
            }
            echo "<h2>You won $totalPoints points!</h2>";
        }else{
            echo "<h3> Try Again! </h3>";
        }
        echo "<div>";
    }
    
    
function displaySymbol($random_value, $pos){
    #or with a switch
    switch($random_value) {
        case 0: $symbol = "seven";
            break;
        case 1: $symbol = "orange";
            break;
        case 2: $symbol = "cherry";
            break;
        case 3: $symbol = "grapes";
        }
        echo "<img id = 'reel$pos' src=\"img/$symbol.png\" alt='A $symbol' title='A FUCKING " .ucfirst($symbol).", AHHHH' width ='70'/>";
    }
        //$random_value = rand(0,2); // Geneartes a random value from 0 to 2
    
    // if($random_value == 0){
    //     $symbol = "seven";
    // } else if($random_value == 1){
    //     $symbol = "orange";
    // } else{
    //     $symbol ="cherry";
    // }
    
    function play(){
          //create varibales to keep track of what symbol is displayed.
          for($i=1; $i<4; $i++){
              ${"random_value" . $i } = rand(0,3);
              displaySymbol(${"random_value" . $i}, $i);
          }
          displayPoints($random_value1, $random_value2, $random_value3);
          
        //   $random_value1 = rand(0,2);
        //   displaySymbol($random_value1);
        //   $random_value2 = rand(0,2);
        //   displaySymbol($random_value2);
        //   $random_value3 = rand(0,2);
        //   displaySymbol($random_value3);
        //   displayPoints($random_value1, $random_value2, $random_value3);
    }
    
    
?>