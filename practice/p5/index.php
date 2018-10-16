<?php 
    session_start();    
    
    function passWord(){
                    
        $aplhabet = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $result = "";
        $counter = 0;
        
        for($ii = 0;$ii< $_GET["numPasswords"]; $ii++){
            $pass .= rand(0,count($aplhabet)-1);
            $result = $aplhabet[$pass];
        }
        
        return $result;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <style>
        	main, #output {
        		text-align:center;
        		width:800px;
        		border-radius:20px;
        		margin: 0 auto;
        	}
        	main {
        		 background-color: lightpink;
        	}
        </style>
    </head>
    <body>
      <main>
      	<h1> Custom Password Generator </h1>
        <form method = "GET">
            
            How many passwords? <input = "number" name="numPasswords"  size="2"> (No more than 8)
            <br/>  <br/>
            <strong>Password Length</strong>
            <br />
            <input type = "radio" name="length" value="6" id="six"><label for ="six"> 6 characters</label>
            <input type = "radio" name="length" value="8" id="eight"><label for ="eight"> 8 characters</label>
            <input type = "radio" name="length" value="10" id="ten"><label for ="ten"> 10 characters</label>
            <br /> <br />
            <input type="checkbox" name="includeDigits"/> Include digits (up to 3 digits will be part of the password)
               <br /> <br />      
            <input type="submit" value ="Create Passwords!" name="submitForm" ><br><br>
            <br />       
        </form>
        <?php
            if($_GET["numPasswords"] > 8){
                echo "Error! The number of passwords to generate should not exceed 8";
            }
            
            echo passWord();
        ?>
        <form action="displayPasswordHistory.php">
        	   <input type="submit" value ="Display Password History" name="passwordHistory" >
        </form>
        <br />
        </main>
         <br /><br />
        <div id="output">
                   </div>
        
    </body>
</html>