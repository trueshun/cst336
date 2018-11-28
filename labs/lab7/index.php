<?php
    session_start();
    include 'functions.php';
    // filters and displays the products
    
    if (isset($_POST['itemName'])) {
        $newItem = array();
        $newItem['name'] = $_POST['itemName'];
        $newItem['id'] = $_POST['itemId'];
        $newItem['price'] = $_POST['itemPrice'];
        $newItem['image'] = $_POST['itemImage'];
        
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login </title>
    </head>
    <body>
        <h1>Ottermart - Admin Login</h1>
        
        <form method="post" action="loginProcess.php">
          Username:  <input type="text" name="username"/> <br>
          Password:  <input type="password" name="password"/> <br>
          <input type="submit" value="Login">
        </form>
    </body>
</html>