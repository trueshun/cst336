<?php
    session_start();
    
    include 'dbConnection.php';
    $dbConn = startConnection($dbname="witchmart");
    
    //get userna,e and password
    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    
    $sql = "SELECT * FROM wm_admin
            WHERE username = '$username'
            AND password = '$password'";
            
    $stmt = $dbConn ->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch(PDO::FETCH_ASSOC);//we're expecting just one password.
    
    if(empty($record)){
        echo "Wrong username or password!";
    }else{
       $_SESSION['adminFullName'] = $record['firstName'] .  "   "  . $record['lastName'];
       header('Location: admin.php'); //redirects to another program
    }
    //print_r($record);
?>