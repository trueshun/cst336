<?php
    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];
    $answer4 = $_POST['question-4-answers'];
    $answer5 = $_POST['question-5-answers'];
    
    $totalCorrect = 0;
    $gender ="";
    
    if($answer1 == "B") {$totalCorrect++;}
    if($answer2 == "guy") {$gender = "you're a dude";}if($answer2 == "chick"){$gender = "you're a dudette";}else{$gender = "Ya both, Harry";}
    if($answer3 == "C") {$totalCorrect++;}
    if($answer4 == "D") {$totalCorrect++;}
    if($answer5) {$totalCorrect++;}
    
    echo "<div id='results'>$totalCorrect / 4 correct, and $gender</div>";
?>