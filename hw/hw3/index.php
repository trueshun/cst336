<?php

    function valid(){
        $valid = true;
        if(!isset($_GET['question-1-answers']) || !isset($_GET['question-2-answers']) || !isset($_GET['question-5-answers'])){
            $valid = false;
        }
        return $valid;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>HW3</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
    </head>
    <body>
        <div class="container">
            <h1>Buckle up buckaroo, it's quiz time</h1>
            <form action = "quiz_result.php" method = "GET" id = "quiz">
                <!-- question 1 -->
                <!-- radio type -->
                <or>
                    <h2>1. What organization are Jessie and James part of? </h2>
                    
                    <div>
                        <input type = "radio" name = "question-1-answers" id = "q1" value ="A" required>
                        <label for = "question-1">A. Team Magma</label>
                    </div>
                    
                    <div>
                        <input type= "radio" name = "question-1-answers" id = "q1" value="B" required>
                        <label for = "question-1">B. Team Rocket</label>
                    </div>
                    
                    <div>
                        <input type = "radio" name= "question-1-answers" id = "q1" value ="C" required>
                        <label for ="question-1">C. Team Aqua</label>
                    </div>
                    
                    <div>
                        <input type = "radio" name = "question-1-answers" id = "q1" value = "D" required>
                        <label for ="question-1">D. Team Skull</label>
                    </div>
                </or>
                
                <!-- Question 2 -->
                <or>
                    <h2>2. Are you a: </h2>
                    <div>
                        <input type ="radio" name = "question-2-answers" value="guy" required>
                        <label for ="question-2-answers-guy">Boy</label>
                    </div>
                    <div>
                        <input type="radio" name = "question-2-answers" value ="chick" required>
                        <label for="question-2-answers-chick">Girl</label>
                    </div>
                </or>    
                <!-- Question 3 -->
                <or>
                    <h2>3. Who is Ash's main pokemon?</h2>
                    <div>
                        <input type = "text" name = "question-3-answers" value = "" placeholder="Type here" required>
                    </div>
                </or>
                <!-- Question 4 -->
                <or>
                    <h2>4. Which is a starter pokemon from the Kanto region</h2>
                    <div>
                        <input type ="checkbox" name = "question-4-answers" value ="ony" >
                        <label for = "question-4-answers-char">Onyx</label>
                    </div>
                    <div>
                        <input type = "checkbox" name = "question-4-answers" value = "none" >
                        <label for="question-4-answers-psy">none of the above</label>
                    </div>
                </or>
                <!-- Question 5--> 
                <or>
                    <h2>5.What's Professor Oak's grandson's name?</h2>
                    <div>
                        <input type="radio" name = "question-5-answers" value = "A" required>
                        <label for="question-5-answers">Loser</label>
                    </div>
                    <div>
                        <input type="radio" name = "question-5-answers" value = "B" required>
                        <label for="question-5-answers">Smell ya later</label>
                    </div>
                    <div>
                        <input type="radio" name = "question-5-answers" value = "C" required>
                        <label for="question-5-answers">Gary</label>
                    </div>
                </or>
                
                <!-- Question 6 -->
                <or>
                    <h2>6. Bye, bye </h2>
                    <div>
                        <select name = "question-6-answers" required>
                            <option value = "a">Pikachu!</option>
                            <option value ="b">life!</option>
                            <option value ="c">Butterfree!</option>
                            <option value ="d">Misty!</option>
                        </select>
                    </div>
                </or>
                <br />
                <center><input type= "submit" name = "submit" value = "Submit quiz!"></center>
            </form>
            <div class="check">
                <?php
                    if(!valid()){
                        echo "<h2><center>Make sure to answer all questions!</h2></center>";
                    }
                ?>
            </div>
        </div>
    </body>
    <br />

    <footer>
        <hr width ='30%'>
        CST 336. 2018&copy; Chavez
        <br />
        <img src="../../img/logo.png" alt="The CSUMB logo." title="OTTTERR!" class ="center"/>
       
        <img src="../../img/buddy_verified.png"  alt ="buddy badge" />
    </footer>
</html>