<?php
session_start();
require_once 'dbconfig.php';

if(isset($_POST['boton2'])) {


    $user = trim($_POST['user']);
    $user_password = trim($_POST['pass']);

    $password = md5($user_password);
    try
    {

        $stmt = $db_con->prepare("SELECT * FROM login WHERE usuario=:usr");
        $stmt->execute(array(":usr"=>$user));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $count = $stmt->rowCount();

        if($row['password']==$password){

            $_SESSION['user_session'] = $row['usuario'];
            header("Location: ../administrator.php");
        }
        else{

            echo "email or password does not exist."; // wrong details
        }

    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
}
