<?php
    $db_host = "localhost";
    $db_name = "BD_RYSLATINA";
    $db_user = "root";
    $db_pass = "1q2w3e4r";

    try{

        $db_con = new PDO("mysql:host=$db_host;dbname=$db_name",$db_user,$db_pass);
        $db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
