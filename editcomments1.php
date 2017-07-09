<?php
  session_start();
    if(empty($_SESSION['curname']) ){
      header("location:index.php");
    }
?>
<?php
	  date_default_timezone_set('Asia/Dhaka');
	  include 'comment1.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
          <title>Edit Comment</title>
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
		            $con=mysql_connect("localhost","root","");
		            mysql_query("create database mydata4",$con);
		            mysql_select_db('mydata4');
		            $tbl21="create table comments1(
		                    cid int(20) not null AUTO_INCREMENT PRIMARY KEY,
		                    date datetime not null,
		                    message text not null
		                    )";
		            mysql_query($tbl21,$con);
		        ?>
        				
            <?php
                $cid = $_POST['cid'];
                $date = $_POST['date'];
                $message = $_POST['message'];

                echo "<center><a href ='afterlogin11.php'><button class='button1'>Back to main page</button></a></center>";
                echo "<br><br>";
 
        				echo "<center><form method='POST' action='".editComments($con)."'> 
                     <input type='hidden' name='cid' value='".$cid."'>
        				     <input type='hidden' name='date' value=' ".$date."'>
        				     <textarea name='message'>".$message."</textarea><br>
        				     <input class='button2' type='submit' name='edit' value='edit'>
      				  </form></center>";

        				echo "<br><br>";
                getComments($con);
        		?>
      </section>
</body>
</html>
