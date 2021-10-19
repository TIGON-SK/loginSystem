<?php
//Start Session
session_start();

//php errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Create Constants
define('BASEEURL', 'http://localhost:81/Web/loginSystem/');
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'loginSystem');

try {
    $conn = new PDO("mysql:host=".LOCALHOST.";dbname=".DB_NAME,
        DB_USERNAME, DB_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Connection failed : ". $e->getMessage();
}

?>