<?php
  session_start();
    if(empty($_SESSION['curname']) ){
      header("location:index.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Doctor List</title>
    <link rel="icon" type="image/png" href="img/arogya.png" />
	  <link href="css/doclist.css" rel="stylesheet" type="text/css">
	  <script type="text/javascript" src="js/doclist.js"></script>
    <link href="css/button.css" rel="stylesheet" type="text/css">
    <link href="css/button1.css" rel="stylesheet" type="text/css">
</head>
<body>
  <section>
  <div class="title">
		<a href ="afterlogin1.php"><button class="button"><span>Back to main page</span></button></a>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href ="hospital.php"><button class="button"><span>Hospital List</span></button></a>
 </div>

  <?php
    include("dbcon.php"); 

    $result = mysql_query("SELECT * FROM tbl where type='doctor' ");
    echo "<h1>All the Doctors List</h1>";
    
    echo "<div class='tbl-header'>
      <table cellpadding='0' cellspacing='0' border='0'>
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Hospital</th>
            <th>Place</th>
            <th>Contact</th>
          </tr>
        </thead>
      </table>
    </div>";
    echo "<div class='tbl-content'>
        <table cellpadding='0' cellspacing='0' border='0'>
          <tbody>";
    while($row = mysql_fetch_array($result))
    {
        
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['company'] . "</td>";
        echo "<td>" . $row['city'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
    echo "</div>";
  ?>
</section>


</body>
</html>
