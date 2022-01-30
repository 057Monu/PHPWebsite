<?php

$server = "localhost";
$username = "database username";
$password = "database password";
$dbname = "database name";

try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch (PDOException $e){
    echo $e->getMessage();
}

require_once 'CRUD.php';
require_once 'User.php';
require_once 'View.php';

$crud =  new CRUD($conn);
$user = new User($conn);
$view = new View($conn);

$view->allView();

?>