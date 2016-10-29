<?php
if(!empty($_GET['exit'])){
  $sure = $_GET['exit'];
  if($sure == 1){
        echo 'Session Destroyed!';
      header ("Location: index.php");
  }else if($sure != 1){
    echo 'That value is incorrect. What are you doing over there?';
  }
}else{
  echo 'That value is incorrect. What are you doing over there?';
}
