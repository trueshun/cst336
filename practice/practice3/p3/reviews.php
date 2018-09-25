<?php

include 'inc/charts.php';
$posters = array("ready_player_one","rampage","paddington_2","hereditary","alpha","black_panther","christopher_robin","coco","dunkirk","first_man");

function prepareArray()
{
    global $posters;
    shuffle($posters);
    while(count($posters) > 4)
    {
        array_pop($posters);
    }
    rsort($posters);
}

function movieReviews() {
    global $posters;
    displayMovie(array_pop($posters));
}

function displayMovie($randomPoster)
{
    echo "<div class='poster'>";
    echo "<h2> $randomPoster </h2>";
    echo "<img width='100' src='img/posters/$randomPoster.jpg'>";    
    echo "<br>";
    
    //NOTE: $totalReviews must be a random number between 100 and 300
    $totalReviews = rand(100,300);
    
    //NOTE: $ratings is an array of 1-star, 2-star, 3-star, and 4-star rating percentages
    //      The sum of rating percentages MUST be 100
    $ratings = array(0,0,0,0);
    for ($i = 0; $i < 100; $i ++)
    {
        $ratings[rand(0,3)]++;
    }
    
    
    //NOTE: displayRatings() displays the ratings bar chart and
    //      returns the overall average rating
    $overallRating = displayRatings($totalReviews,$ratings);
    
    //NOTE: The number of stars should be the rounded value of $overallRating
    echo "<br><img src='img/star.png' width='25'>";
    echo "<img src='img/star.png' width='25'>";
    
    echo "<br>Total reviews: $totalReviews";
    echo "</div>";

}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Movie Reviews </title>
        <style type="text/css">
            body {
                text-align:center;
            }
            #main {
                display:flex;
                justify-content: center;
            }
            .poster {
                padding: 0 10px;
            }
        </style>
    </head>
    <body>
       
       <h1> Movie Reviews </h1>
        <div id="main">
           <?php
            prepareArray();
             //NOTE: Add for loop to display 4 movie reviews
             for($ii=0; $ii < 4; $ii++){
                movieReviews();
             }
             
           ?>
       </div>
       <br/>
       <hr>
       <h1>Based on ratings you should watch:</h1>
       
    </body>
</html>