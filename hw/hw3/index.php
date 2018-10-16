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
                <h2>CSS stands for: </h2>
                
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
                    <label for ="question-1-answers-C">C. Crazy Slip Slide</label>
                </div>
                
                <div>
                    <input type = "radio" name = "question-1-answers" value = "D">
                    <label for ="question-1-answers-D">D. None of the above</label>
                </div>
            </li>
            
            <!-- Question 2 -->
            <li>
                <h2>Are you a: </h2>
                <div>
                    <input type ="checkbox" name = "question-2-answers" value="guy">Dude
                </div>
                <div>
                    <input type="checkbox" name = "question-2-answers" value ="chick">Dudette
                </div>
            </li>    
            
            <input type= "submit" value = "Submit quiz!">
        </form>
    </body>
</html>