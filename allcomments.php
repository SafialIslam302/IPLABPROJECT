<?php
  session_start();
    if(empty($_SESSION['curname']) ){
      header("location:index.php");
    }
?>
<?php
      include 'comment.php';
      include 'dbcon.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
          <title>Comments list</title>
          <link rel="icon" type="image/png" href="img/arogya.png" />
          <link href="css/doclist.css" rel="stylesheet" type="text/css">
          <script type="text/javascript" src="js/doclist.js"></script>
          <link href="css/button.css" rel="stylesheet" type="text/css">
          <link href="css/button1.css" rel="stylesheet" type="text/css">
          <link href="css/button2.css" rel="stylesheet" type="text/css">
          <link rel="stylesheet" type="text/css" href="css/style2.css" />
    </head>
    <body>
        <section>		
            <?php
                echo "<center><a href ='afterlogin1.php'><button class='button1'>Back to main page</button></a></center>";
                echo "<br><br>";
 
                allComments($con);

        		?>
      </section>
</body>
</html>
