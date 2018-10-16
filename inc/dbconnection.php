<?php

function startConnection($dbname="ottermart"){
    //Creating database connection
    $host = "localhost";
    //$dbname = "ottermart"; //won't 
    $username = "root";
    $password = "";
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);//creates database connection
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//creates the database connection
    
    return $dbConn;
}

?>