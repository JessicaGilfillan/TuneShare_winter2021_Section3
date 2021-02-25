<?php
try {
    $dsn = 'mysql:host=172.31.22.43;dbname=Jessica100'; 
    $username = 'Jessica100'; 
    $password = 'W54pmddcpU'; //mamp users 
    //$password = ''; wamp users  

    $db = new PDO($dsn, $username, $password); 
    //echo "<p> Successfully connected!!! Whoo hoo! </p>";
}
catch(PDOException $e){
    echo "<p> Something went wrong :( </p>"; 
    $error_message = $e->getMessage(); 
    echo $error_message; 
}
?>