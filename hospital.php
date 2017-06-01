<!DOCTYPE html>
<html>
<head>
	<title>Doctor list</title>
	<link href="css/doclist.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/doclist.js"></script>
    <link href="css/button.css" rel="stylesheet" type="text/css">
    <link href="css/button1.css" rel="stylesheet" type="text/css">
</head>
<body>
  <section>
  <div class="title">
		<a href ="afterlogin1.php"><button class="button"><span>Back to main page</span></button></a>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href ="doctors.php"><button class="button"><span>Doctors List</span></button></a>
 </div>
  <!--for demo wrap-->

  <?php
    include("dbcon.php"); 

    $result = mysql_query("SELECT * FROM tbl1");
    echo "<h1>All the Doctors List</h1>";
    
    echo "<div class='tbl-header'>
      <table cellpadding='0' cellspacing='0' border='0'>
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Department</th>
            <th>Department</th>
            <th>Department</th>
            <th>Department</th>  
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
        echo "<td>" . $row['hospital'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['address'] . "</td>";
        echo "<td>" . $row['department1'] . "</td>";
        echo "<td>" . $row['department2'] . "</td>";
        echo "<td>" . $row['department3'] . "</td>";
        echo "<td>" . $row['department4'] . "</td>";
        echo "<td>" . $row['contact'] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
    echo "</div>";
  ?>
</section>


</body>
</html>
