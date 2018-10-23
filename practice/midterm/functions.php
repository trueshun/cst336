<?php
    // $monthDays = array("November"=>30, "December"=>31, "January"=>31, "February"=>28);
    
    $France = array("bordeaux", "le_havre", "lyon", "montpellier", "paris", "strasbourg");
    $Mexico = array("acapulco", "cabos", "cancun", "chichenitza", "huatulco", "mexico_city");
    $USA = array("chicago", "hollywood", "las_vegas", "ny", "washington_dc", "yosemite");
    
    $input = $_GET["months"];
    $location = $_GET["location"];
    $country = $_GET["country"];
        
    $nov = array();
    $dec = array();
    $jan = array();
    $feb = array();
    
    for($i = 1; $i <= 31; $i++){
        $dec[] = $i;
        $jan[] = $i;
        
        if($i < 31){
            $nov[] = $i;
        }
        if($i < 29){
            $feb[] = $i;
        }
    }
    
    function generateTable(){
        global $jan, $feb, $nov, $dec;
        global $input, $location, $country;
        
        $month = "";
        
        if($input == "january"){
            $month = $jan;
        }
        if($input == "february"){
            $month = $feb;
        }
        if($input == "november"){
            $month = $nov;
        }
        if($input == "december"){
            $month = $dec;
        }
        
        if(($input != "") && (isset($_GET["location"]))){
            echo "<br /> <br /><table align='center' style = 'width:25%' border ='1px solid black'>";
            
            for($i=0;$i <5;$i++){
                echo "<tr>";
                if($input == "february" && $i == 4){
                    break;
                }
                for($j = $i * 7; $j < ($i * 7) + 7; $j++){
                    echo "<td>".$month[$j] ."</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }
    
    function displayHeader(){
        global $input, $location, $country;
        echo "<hr>";
        echo "<h2>".ucfirst($input). " Itinerary</h2>";
        echo "<h4>Visiting $location places in $country</h4>.";
    }
    
    function displaySubheader(){
        global $input, $location, $country;
        echo "<hr>";
        echo "<h3>Monthly Itinerary</h3>";
        echo "<h4>Month: ".$input.", Visting ".$location. " places in ".$country."</h4>";
    }
?>