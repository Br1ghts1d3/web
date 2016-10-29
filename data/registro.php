<?php
session_start();
require_once 'dbconfig.php';

if(isset($_POST['commit'])) {


    foreach ($_POST['auto'] as $auto) {
        echo ($auto . " ");
    }
    /*
    try
    {

        $stmt = $db_con->prepare("SELECT * FROM login WHERE usuario=:usr");
        $stmt->execute(array(":usr"=>$user));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $count = $stmt->rowCount();

        if($row['password']==$password){

            echo "ok"; // log in
            $_SESSION['user_session'] = $row['usuario'];
            header("Location: ../registro_autos.php");
        }
        else{

            echo "email or password does not exist."; // wrong details
        }

    }
    catch(PDOException $e){
        echo $e->getMessage();
    }*/
}