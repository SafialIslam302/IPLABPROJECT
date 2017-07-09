<?php
  session_start();
  /*header("location: index.php");
  exit;*/
  session_unset();
  
  if( isset($_COOKIE['$hos']) and isset($_COOKIE['$hpass'])){
      setcookie('$hos','',time()-10);
      setcookie('$hpass','',time()-10);
      $nam1=$_COOKIE['$hos'];
      $pas1=$_COOKIE['$hpass'];
      $_SESSION['nam1'] = $nam1;
      $_SESSION['pas1'] = $pas1;
      header("location: index.php");
      exit;
  }
  if( isset($_COOKIE['$email']) and isset($_COOKIE['$pass'])){
      setcookie('$email',' ',time()-10);
      setcookie('$pass',' ',time()-10);
      $nam=$_COOKIE['$email'];
      $pas=$_COOKIE['$pass'];
      $_SESSION['nam'] = $nam;
      $_SESSION['pas'] = $pas;
      header("location: index.php");
      exit;
  }
  else
  {
    header("location: index.php");
    exit;
  }
?>