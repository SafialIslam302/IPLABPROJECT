<?php
  session_start();
  session_destroy();
  session_unset();
  if( isset($_COOKIE['$email']) and isset($_COOKIE['$pass'])){
      $nam=$_COOKIE['$email'];
      $pas=$_COOKIE['$pass'];
      setcookie('$email',' ',time()-5000);
      setcookie('$pass',' ',time()-5000);
      header("location: index.php");
      exit;
  }
  else
  {
    header("location: index.php");
    exit;
  }
  if( isset($_COOKIE['$hos']) and isset($_COOKIE['$hpass'])){
      $nam=$_COOKIE['$hos'];
      $pas=$_COOKIE['$hpass'];
      setcookie('$$hos',' ',time()-5000);
      setcookie('$hpass',' ',time()-5000);
      header("location: index.php");
      exit;
  }
  else
  {
    header("location: index.php");
    exit;
  }
?>