<?php

    // if($_SERVER["REQUEST_METHOD"] == "POST"){
    //     if(!empty($_POST["question-4-answers"])){
    //         foreach($_POST["question-4-answers"] as $checked)
    //         {
    //             echo  $checked;
    //         }
    //     }
    //     else{
    //         echo 'Please select a pokemon.';
    //     }
    // }
    
    // if(isset($_POST["sumbit"])){
    //     if(!empty($_POST["question-4-answers"])){
    //         foreach($_POST["question-4-answers"] as $question4answers)
    //         {
    //             echo '<p>' . $question4answers . '</p>';
    //         }
    //     }
    // }
    // else{
    //     echo 'Please select at least one pokemon';
    // }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>buckle up buckaroo, it's quiz time</title>
    </head>
    <body>
        <form action = "quiz_result.php" method = "POST" id = "quiz">
            <!-- question 1 -->
            <!-- radio type -->
            <li>
                <h2>1. CSS stands for: </h2>
                
                <div>
                    <input type = "radio" name = "question-1-answers" id = "question-1-answers-A" value ="A">
                    <label for = "question-1-answers-A">A. Computer Styled Sections</label>
                </div>
                
                <div>
                    <input type= "radio" name = "question-1-answers" value="B" >
                    <label for = "question-1-answers-B">B. Cascading Style Sheets</label>
                </div>
                
                <div>
                    <input type = "radio" name= "question-1-answers" value ="C">
                    <label for ="question-1-answers-C">C. Crazy Slip'n Slide</label>
                </div>
                
                <div>
                    <input type = "radio" name = "question-1-answers" value = "D">
                    <label for ="question-1-answers-D">D. None of the above</label>
                </div>
            </li>
            
            <!-- Question 2 -->
            <li>
                <h2>2. Are you a: </h2>
                <div>
                    <input type ="radio" name = "question-2-answers" value="guy">Guy
                    
                </div>
                <div>
                    <input type="radio" name = "question-2-answers" value ="chick">Chick
                </div>
            </li>    
            <!-- Question 3 -->
            <li>
                <h2>3. Who is Ash's main pokemon?</h2>
                <div>
                    <input type = "text" name = "question-3-answers" value = "">
                </div>
            </li>
            <!-- Question 4 -->
            <li>
                <h2>4. Which is a starter pokemon from the Kanto region</h2>
                <div>
                    <input type ="checkbox" name = "question-4-answers" value ="ony">
                    <label for = "question-4-answers-char">Onyx</label>
                </div>
                <div>
                    <input type = "checkbox" name = "question-4-answers" value ="abra">
                    <label for="question-4-answers-bulb">Abra</label>
                </div>
                <div>
                    <input type = "checkbox" name = "question-4-answers" value = "kaka">
                    <label for ="question-4-answers-squrt">kakashi</label>
                </div>
                <div>
                    <input type = "checkbox" name = "question-4-answers" value = "none">
                    <label for="question-4-answers-psy">none of the above</label>
                </div>
            </li>
            
            <li>
                <h2>5.What's Professor Oak's grandson's name?</h2>
                <div>
                    <input type="radio" name = "question-5-answers" value = "A">
                    <label for="question-5-answers">Loser</label>
                </div>
                <div>
                    <input type="radio" name = "question-5-answers" value = "B">
                    <label for="question-5-answers">Ass</label>
                </div>
                <div>
                    <input type="radio" name = "question-5-answers" value = "C">
                    <label for="question-5-answers">Smell ya later</label>
                </div>
                <div>
                    <input type="radio" name = "question-5-answers" value = "D">
                    <label for="question-5-answers">Gary</label>
                </div>
            </li>
            <br />
            <input type= "submit" name = "submit" value = "Submit quiz!">
        </form>
    </body>
</html>