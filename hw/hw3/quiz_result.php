<?php
    
    function result(){
        $answer1 = $_GET['question-1-answers'];
        $answer2 = $_GET['question-2-answers'];
        $answer3 = $_GET['question-3-answers'];
        $answer4 = $_GET['question-4-answers'];
        $answer5 = $_GET['question-5-answers'];
        $answer6 = $_GET['question-6-answers'];
        
        $totalCorrect = 0;
        
        if($answer1 == "B") {$totalCorrect++;}
        if($answer2 == "guy") {$totalCorrect++;}else{$totalCorrect++;}
        if($answer3 == "pikachu" || $answer3 == "Pikachu") {$totalCorrect++;}
        if($answer4 == "none") {$totalCorrect++;}
        if($answer5 == "C") {$totalCorrect++;}
        if($answer6 == "c"){$totalCorrect++;}
        
        
        return $totalCorrect;  
    }
    
    function congrat(){
        $num = result();
        $congrats = "";
        
        if($num == 6){
            $congrats = "Yay, ya got them all! Doing way better than Ash!";
        }
        else{
            $congrats = "You didn't get them all, but that's alright 'cause neither did Ash.";
        }
        echo $congrats;
    }
    
    function qu1(){
        $answer1 = $_GET['question-1-answers'];

        if($answer1 == "A"){
           
            echo "<h2>&#9785 1. What organization are Jessie and James part of? </h2>";
            echo "<div>";
            echo "<input type = 'radio' name = 'question-1-answers' id = 'q1' value ='A' disabled selected checked>";
            echo "<label for = 'question-1'>A. Team Magma</label>";
            echo "</div>";
            echo "<div>";
            echo "<input type= 'radio' name = 'question-1-answers' id= 'q1' value='B' disabled selected>";
            echo "<label for = 'question-1'>B. Team Rocket</label>";
            echo "</div>";
            echo "<div>";
            echo "<input type = 'radio' name= 'question-1-answers' id = 'q1' value ='C' disabled selected>";
            echo "<label for ='question-1'>C. Team Aqua</label>";
            echo "<div>";
            echo "<input type = 'radio' name = 'question-1-answers' id = 'q1' value = 'D' disabled selected>";
            echo "<label for ='question-1'>D. Team Skull</label>";
            echo "</div>";
            
        }else if($answer1 == "B"){
            echo "<or>";
            echo "<h2>&#9733 1. What organization are Jessie and James part of? </h2>";
            echo "<div>";
            echo "<input type = 'radio' name = 'question-1-answers' id = 'q1' value ='A' disabled selected >";
            echo "<label for = 'question-1'>A. Team Magma</label>";
            echo "</div>";
            echo "<div>";
            echo "<input type= 'radio' name = 'question-1-answers' id= 'q1' value='B' disabled selected checked>";
            echo "<label for = 'question-1'>B. Team Rocket</label>";
            echo "</div>";
            echo "<div>";
            echo "<input type = 'radio' name= 'question-1-answers' id = 'q1' value ='C' disabled selected>";
            echo "<label for ='question-1'>C. Team Aqua</label>";
            echo "</div>";
            echo "<div>";
            echo "<input type = 'radio' name = 'question-1-answers' id = 'q1' value = 'D' disabled selected>";
            echo "<label for ='question-1'>D. Team Skull</label>";
            echo "</div>";
            echo "</or>";
        }else if($answer1 == "C"){
            echo "<or>";
            echo "<h2>&#9785 1. What organization are Jessie and James part of? </h2>";
            echo "<div>";
            echo "<input type = 'radio' name = 'question-1-answers' id = 'q1' value ='A' disabled selected >";
            echo "<label for = 'question-1'>A. Team Magma</label>";
            echo "</div>";
            echo "<div>";
            echo "<input type= 'radio' name = 'question-1-answers' id= 'q1' value='B' disabled selected>";
            echo "<label for = 'question-1'>B. Team Rocket</label>";
            echo "</div>";
            echo "<div>";
            echo "<input type = 'radio' name= 'question-1-answers' id = 'q1' value ='C' disabled selected checked>";
            echo "<label for ='question-1'>C. Team Aqua</label>";
            echo "</div>";
            echo "<div>";
            echo "<input type = 'radio' name = 'question-1-answers' id = 'q1' value = 'D' disabled selected>";
            echo "<label for ='question-1'>D. Team Skull</label>";
            echo "</div>";
            echo "</or>";
        }else if($answer1 == "D"){
            echo "<or>";
            echo "<h2>&#9785 1. What organization are Jessie and James part of? </h2>";
            echo "<div>";
            echo "<input type = 'radio' name = 'question-1-answers' id = 'q1' value ='A' disabled selected>";
            echo "<label for = 'question-1'>A. Team Magma</label>";
            echo "</div>";
            echo "<div>";
            echo "<input type= 'radio' name = 'question-1-answers' id= 'q1' value='B' disabled selected>";
            echo "<label for = 'question-1'>B. Team Rocket</label>";
            echo "</div>";
            echo "<div>";
            echo "<input type = 'radio' name= 'question-1-answers' id = 'q1' value ='C' disabled selected>";
            echo "<label for ='question-1'>C. Team Aqua</label>";
            echo "</div>";
            echo "<div>";
            echo "<input type = 'radio' name = 'question-1-answers' id = 'q1' value = 'D' disabled selected checked>";
            echo "<label for ='question-1'>D. Team Skull</label>";
            echo "</div>";
            echo "</or>";
        }
    }
    
    function qu2(){
        $answer2 = $_GET['question-2-answers'];
        
        if($answer2 == "guy"){
            echo "<or>";
            echo "<label for question-1-answers-A><h2>&#9733 2. Are you a: </h2></label>";//star
        }
        else{
            echo "<or>";
            echo "<label for question-1-answers-A><h2>&#9733 2. Are you a: </h2></label>";//star
        }
        
        if($answer2 == "guy"){
            echo "<div>";
            echo "<input type ='radio' name = \"question-2-answers\" value=\"guy\" disabled selected checked>";
            echo "<label for =\"question-2-answers-guy\" disabled selected\">Boy</label>";
            echo "</div>";
            echo "<div>";
            echo "<input type=\"radio\" name = \"question-2-answers\" value =\"chick\" disabled selected>";
            echo "<label for=\"question-2-answers-chick\">Girl</label>";
            echo "</div>";
            echo "</or>"; 
        }else if($answer2 == "chick"){
            echo "<div>";
            echo "<input type ='radio' name = \"question-2-answers\" value=\"guy\" disabled selected>";
            echo "<label for =\"question-2-answers-guy\" disabled selected\">Boy</label>";
            echo "</div>";
            echo "<div>";
            echo "<input type=\"radio\" name = \"question-2-answers\" value =\"chick\" disabled selected checked>";
            echo "<label for=\"question-2-answers-chick\">Girl</label>";
            echo "</div>";
            echo "</or>"; 
        }
    }

    function qu3(){
        $answer3 = $_GET['question-3-answers'];
        
        if($answer3 == "pikachu" || $answer3 == "Pikachu"){
            echo "<or>";
            echo "<label for question-3><h2>&#9733 3. Who is Ash's main pokemon?</h2></label>";//star
        }
        else{
            echo "<or>";
            echo "<label for question-3><h2>&#9785 3. Who is Ash's main pokemon?</h2></label>";//frown
        }
        echo "<div>";
        echo "<input type = \"text\" name = \"question-3-answers\" value = \"$answer3\" placeholder=\"Type here\" disabled selected>";
        echo "</div>";
        echo "</or>";
    }

    function qu4(){
        $answer4 = $_GET['question-4-answers'];
        
        if($answer4 == "ony"){
            echo "<or>";
            echo "<label for question-4> <h2>&#9785 4. Which is a starter pokemon from the Kanto region</h2></label>";//frown
        }
        else if($answer4 == "none"){
            echo "<or>";
            echo "<label for question-4> <h2>&#9733 4. Which is a starter pokemon from the Kanto region</h2></label>";//star
        }
        
        if($answer4 == "ony"){
        echo "<div>";
        echo "<input type =\"checkbox\" name = \"question-4-answers\" value =\"ony\" disabled selected checked>";
        echo "<label for = \"question-4-answers-char\">Onyx</label>";
        echo "</div>";
        echo "<div>";
        echo "<input type = \"checkbox\" name = \"question-4-answers\" value = \"none\" disabled selected >";
        echo "<label for=\"question-4-answers-psy\">none of the above</label>";
        echo "</div>";
        echo "</or>";
        }else if($answer4 == "none"){
        echo "<div>";
        echo "<input type =\"checkbox\" name = \"question-4-answers\" value =\"ony\" disabled selected>";
        echo "<label for = \"question-4-answers-char\">Onyx</label>";
        echo "</div>";
        echo "<div>";
        echo "<input type = \"checkbox\" name = \"question-4-answers\" value = \"none\" disabled selected checked>";
        echo "<label for=\"question-4-answers-psy\">none of the above</label>";
        echo "</div>";
        echo "</or>";
        }
    }

    function qu5(){
        $answer5 = $_GET['question-5-answers'];
        
        if($answer5 == "C"){
            echo "<or>";
            echo "<label for question-5-answers-A> <h2>&#9733 5.What's Professor Oak's grandson's name?</h2></label>";//star
        }
        else{
            echo "<or>";
            echo "<label for question-5-answers-A> <h2>&#9785 5.What's Professor Oak's grandson's name?</h2></label>";//frown
        }
        
        if($answer5 == "A"){
        echo "<div>";
        echo "<input type=\"radio\" name = \"question-5-answers\" value = \"A\" disabled selected checked>";
        echo "<label for=\"question-5-answers\">Loser</label>";
        echo "</div>";
        echo "<div>";
        echo "<input type=\"radio\" name = \"question-5-answers\" value = \"B\" disabled selected>";
        echo "<label for=\"question-5-answers\">Smell ya later</label>";
        echo "</div>";
        echo "<div>";
        echo "<input type=\"radio\" name = \"question-5-answers\" value = \"C\" disabled selected>";
        echo "<label for=\"question-5-answers\">Gary</label>";
        echo "</div>";
        echo "</or>";
        }else if($answer5 == "B"){
        echo "<div>";
        echo "<input type=\"radio\" name = \"question-5-answers\" value = \"A\" disabled selected>";
        echo "<label for=\"question-5-answers\">Loser</label>";
        echo "</div>";
        echo "<div>";
        echo "<input type=\"radio\" name = \"question-5-answers\" value = \"B\" disabled selected checked>";
        echo "<label for=\"question-5-answers\">Smell ya later</label>";
        echo "</div>";
        echo "<div>";
        echo "<input type=\"radio\" name = \"question-5-answers\" value = \"C\" disabled selected>";
        echo "<label for=\"question-5-answers\">Gary</label>";
        echo "</div>";
        echo "</or>";     
        }else if($answer5 == "C"){
        echo "<div>";
        echo "<input type=\"radio\" name = \"question-5-answers\" value = \"A\" disabled selected>";
        echo "<label for=\"question-5-answers\">Loser</label>";
        echo "</div>";
        echo "<div>";
        echo "<input type=\"radio\" name = \"question-5-answers\" value = \"B\" disabled selected>";
        echo "<label for=\"question-5-answers\">Smell ya later</label>";
        echo "</div>";
        echo "<div>";
        echo "<input type=\"radio\" name = \"question-5-answers\" value = \"C\" disabled selected checked>";
        echo "<label for=\"question-5-answers\">Gary</label>";
        echo "</div>";
        echo "</or>";
        }
    }

    function qu6(){
        $answer6 = $_GET['question-6-answers'];
        
        if($answer6 == "c"){
            echo "<or>";
            echo "<label for question-6-answers-A> <h2>&#9733 6. Bye, bye </h2></label>";//star
        }
        else{
            echo "<label for question-6-answers-A> <h2>&#9785 6. Bye, bye </h2></label>";//frown
        }
        
        echo "<div>";
        echo "<select name = \"question-6-answers\" disabled selected>";
        
        if($answer6 == "a"){
        echo "<option value = \"a\">Pikachu!</option>";
        }else if($answer6 == "b"){
            echo "<option value =\"b\">life!</option>";
        }else if($answer6 == "c"){
            echo "<option value =\"c\">Butterfree!</option>";
        }else if($answer6 == "d"){
            echo "<option value =\"d\">Misty!</option>";
        }
        echo "</select>";
        echo "</div>";
        echo "</or>";
    }

    //echo "<div id='results'>$totalCorrect / 5 correct, and $gender. $congrats </div>";
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
            <form action = "index.php">
                <!-- question 1 -->
                
                <?php
                    qu1();
                ?>
                
                <!-- Question 2 -->
                <?php
                    qu2();
                ?>
                <!-- Question 3 -->
                <?php 
                    qu3();
                ?>
                <!-- Question 4 -->
                <?php
                    qu4();
                ?>
                <!-- Question 5--> 
                <?php
                    qu5();
                ?>
                <!-- Question 6 -->
                <?php
                    qu6();
                ?>
                <br />
                <center><input type= "submit" name = "submit" value = "Redo the quiz!"></center>
            </form>

        </div>
        <center>
            <?php
                echo "<h2>You got ".result()." / 6. ";
                echo "<br />";
                echo "<h2> ". congrat()."</h2>";
            ?>
        </center>
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