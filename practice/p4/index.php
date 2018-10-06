<?php
    session_start();
    
    if(isset ($_POST['submit'])){
        $_SESSION['rows'] = $_POST['input_rows'];
        $_SESSION['cols'] = $_POST['input_col'];
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <link rel = "stylesheet" type="text/css" href = "styles.css" />
    </head>
    <body>
        <div class ="container">
            <h1>Aces vs Kings</h1>
            
            
            <form>
                Number of rows:<input type ="text" name="input_rows"> <br /> <br />
                Number of columns:<input type = "text" name = "input_col"> </br> <br />
                Suit to ommit:<select>
                                <option value="hearts">Hearts</option>
                                <option value="diamons">Diamonds</option>
                                <option value="spades">Spades</option>
                                <option value="clubs">Clubs</option>
                            </select>
                            <input type= "submit" value = "sumbit">
            </form>
            
        </div>
    </body>
</html>