<?php

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
                <h2>Pick the three starter pokemon from the Kanto region</h2>
                <div>
                    <input type ="checkbox" name = "question-4-answers" value ="char">
                    <label for = "question-4-answers-char">Charmander</label>
                </div>
                <div>
                    <input type = "checkbox" name = "question-4-answers" value ="bulb">
                    <label for="question-4-answers-bulb">Bulbasaur</label>
                </div>
                <div>
                    <input type = "checkbox" name = "question-4-answers" value = "squrt">
                    <label for ="question-4-answers-squrt">Squirtle</label>
                </div>
                <div>
                    <input type = "checkbox" name = "question-4-answers" value = "psy">
                    <label for="question-4-answers-psy">Psyduck</label>
                </div>
            </li>
            
            <br />
            <input type= "submit" value = "Submit quiz!">
        </form>
    </body>
</html>