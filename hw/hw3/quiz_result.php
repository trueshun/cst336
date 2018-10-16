<?php
    $answer1 = $_GET['question-1-answers'];
    $answer2 = $_GET['question-2-answers'];
    $answer3 = $_GET['question-3-answers'];
    $answer4 = $_GET['question-4-answers'];
    $answer5 = $_GET['question-5-answers'];
    $answer6 = $_GET['question-6-answers'];
    
    $totalCorrect = 0;
    $congrats = "";
    
    if($answer1 == "B") {$totalCorrect++;}
    if($answer2 == "guy") {$gender = "you're a dude";}else{$gender = "you're a dudette";}
    if($answer3 == "pikachu" || $answer3 == "Pikachu") {$totalCorrect++;}
    if($answer4 == "none") {$totalCorrect++;}
    if($answer5 == "D") {$totalCorrect++;}
    if($answer6 == "c"){$totalCorrect++;}
    
    if($totalCorrect == 5){$congrats = "Yay, ya got them all! Doing way better than Ash!";}
    
    echo "<div id='results'>$totalCorrect / 5 correct, and $gender. $congrats </div>";
?>