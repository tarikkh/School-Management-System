<?php

    require __DIR__ . '/vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $sName = $_ENV["Server_Name"];
    $uName = $_ENV["UserName"];
    $pass = $_ENV["Password"];
    $db_name = $_ENV["DataBase"];

    try{
        $conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "Connection fialed: ". $e->getMessage();
        exit;
    }

?>