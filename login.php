<?php
  header("Access-Control-Allow-Origin:*");
  header('Content-type:text/html;charset=utf-8');
  
  @$username = $_GET['username'];
  @$password = $_GET['password'];
  
  if($username == "zz1703" && $password == "123"){
    echo "1";
  }else{
     echo "0";
  }
  
  
?>