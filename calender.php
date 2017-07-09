<?php
	session_start();
  	if(empty($_SESSION['curname']) ){
    	header("location:index.php");
  	}
?>
<?php
	mysql_connect("localhost", "root", "") or die (mysql_error());
	//echo "Connected to Mysql<br/><hr/>";
	mysql_select_db("mydata4") or die (mysql_error());
	//echo "Connected to Database<br/><hr>";
?>
<html>
	<head>
	<title>Calender</title>
	<link rel="icon" type="image/png" href="img/arogya.png" />
	<link href="css/button1.css" rel="stylesheet" type="text/css">
	<link href="css/style3.css" rel="stylesheet" type="text/css">
	<script>
		function goLastMonth(month, year){
		if(month == 1) {
		--year;
		month = 13;
		}
		--month
		var monthstring= ""+month+"";
		var monthlength = monthstring.length;
		if(monthlength <=1){
		monthstring = "0" + monthstring;
		}
		document.location.href ="<?php $_SERVER['PHP_SELF'];?>?month="+monthstring+"&year="+year;
		}
		function goNextMonth(month, year){
		if(month == 12) {
		++year;
		month = 0;
		}
		++month
		var monthstring= ""+month+"";
		var monthlength = monthstring.length;
		if(monthlength <=1){
		monthstring = "0" + monthstring;
		}
		document.location.href ="<?php $_SERVER['PHP_SELF'];?>?month="+monthstring+"&year="+year;
		}
</script>
<style>
	.today{
			padding: 5px;
	    	background: #1abc9c;
	    	color: white !important
	}
	.event{
			padding: 5px;
	    	background: #00FFFF;
	    	color: white !important
	}
	.color{
		background-color: #6960EC;
	}
</style>
<style>
  	.a{
  		height: 25px;
  		color: red;
  	}
</style>
<style>
a {
    text-decoration: none;
}
a:link, a:visited {
    color: blue;
}
a:hover {
    color: red;
}
</style>
<style>
	* {box-sizing:border-box;}
	ul {list-style-type: none;}
	body {font-family: Verdana,sans-serif;}

	.month {
	    padding: 70px 25px;
	    width: 100%;
	    background: #1abc9c;
	}

	.month ul {
	    margin: 0;
	    padding: 0;
	}

	.month ul li {
	    color: white;
	    font-size: 20px;
	    text-transform: uppercase;
	    letter-spacing: 3px;
	}

	.month .prev {
	    float: left;
	    padding-top: 10px;
	}

	.month .next {
	    float: right;
	    padding-top: 10px;
	}

	.weekdays {
	    margin: 0;
	    padding: 10px 0;
	    background-color: #ddd;
	}

	.weekdays li {
	    display: inline-block;
	    width: 13.6%;
	    color: #666;
	    text-align: center;
	}

	.days {
	    padding: 10px 0;
	    background: red;
	    margin: 0;
	}

	.days li {
	    list-style-type: none;
	    display: inline-block;
	    width: 13.6%;
	    text-align: center;
	    margin-bottom: 5px;
	    font-size:12px;
	    color: #777;
	}

	.days li .active {
	    padding: 5px;
	    background: #1abc9c;
	    color: white !important
	}

	/* Add media queries for smaller screens */
	@media screen and (max-width:720px) {
	    .weekdays li, .days li {width: 13.1%;}
	}

	@media screen and (max-width: 420px) {
	    .weekdays li, .days li {width: 12.5%;}
	    .days li .active {padding: 2px;}
	}

	@media screen and (max-width: 290px) {
	    .weekdays li, .days li {width: 12.2%;}
	}
</style>


</head>
<body bgcolor="#EDC9AF">

	<div class="title" style="padding-left: 30em;padding-top: 1em;">
		<a href ="afterlogin1.php"><button class="button1"><span>Back to main page</span></button></a>
    </div>

	<?php
		if (isset($_GET['day'])){
		$day = $_GET['day'];
		} else {
		$day = date("j");
		}
		if(isset($_GET['month'])){
		$month = $_GET['month'];
		} else {
		$month = date("n");
		}
		if(isset($_GET['year'])){
		$year = $_GET['year'];
		}else{
		$year = date("Y");
		}
		$currentTimeStamp = strtotime( "$day-$month-$year");
		$monthName = date("F", $currentTimeStamp);
		$numDays = date("t", $currentTimeStamp);
		$counter = 0;
	?>
	<?php
		if(isset($_GET['add']))
		{
			$cname = $_SESSION ['curname'];
			$title =$_POST['txttitle'];
			$detail =$_POST['txtdetail'];
			$eventdate = $month."/".$day."/".$year;
			$sqlinsert = "INSERT into tbl3(name,Title,Detail,eventDate,dateAdded) values ('".$cname."','".$title."','".$detail."','".$eventdate."',now())";
			$resultinginsert = mysql_query($sqlinsert);
			/*if($resultinginsert )
			{
				echo "Event was successfully Added...<br>";
			}*/
		}
	?>

	<table background="img/index1.jpg" bordercolor="#43C6DB" border="10" width="100%" align="center">
		<tr>
			<div class="month">      
			  <ul>
			    <li class="prev" onclick ="goLastMonth(<?php echo $month.",".$year?>)">&#10094;</li>
			    <li class="next" onclick ="goNextMonth(<?php echo $month.",".$year?>)">&#10095;</li>
			    <li style="text-align:center">
			      <?php echo $monthName; ?><br>
			      <span style="font-size:18px"><?php echo $year; ?></span>
			    </li>
			  </ul>
			</div>
		</tr>
		<tr>
			<ul class="weekdays">
			  <li>Su</li>
			  <li>Mo</li>
			  <li>Tu</li>
			  <li>We</li>
			  <li>Th</li>
			  <li>Fr</li>
			  <li>Sa</li>
			</ul>
		</tr>
		<?php
			$cnam1 = $_COOKIE['$email'];
			$cname = $_SESSION ['curname'];
			//echo "<h1>".$cnam1."</h1>";
			//echo "<h1>".$cname."</h1>";
			//echo "<h1>".$_SESSION['curname']."</h1>";
			echo "<tr>";
			for($i = 1; $i < $numDays+1; $i++, $counter++)
			{
				$timeStamp = strtotime("$year-$month-$i");
				if($i == 1) 
				{
					$firstDay = date("w", $timeStamp);
					for($j = 0; $j < $firstDay; $j++, $counter++) 
					{
						echo "<td>&nbsp;</td>";
					}
				}
				if($counter % 7 == 0) 
				{
					echo"</tr><tr>";
				}
				$monthstring = $month;
				$monthlength = strlen($monthstring);
				$daystring = $i;
				$daylength = strlen($daystring);
				if($monthlength <= 1)
				{
					$monthstring = "0".$monthstring;
				}
				if($daylength <=1){
					$daystring = "0".$daystring;
				}
				$todaysDate = date("m/d/Y");
				$dateToCompare = $monthstring. '/' . $daystring. '/' . $year;
				echo "<td align='center' ";
				if ($todaysDate == $dateToCompare)
				{
					echo "class ='today'";
				}	 
				else
				{
					$sqlCount = "select * from tbl3 where eventDate='".$dateToCompare."' and ( name = '".$cname."' or name = '".$cnam1."' )";
					$noOfEvent = mysql_num_rows(mysql_query($sqlCount));
					if($noOfEvent >= 1)
					{
						echo "class='event'";
					}
				}
				echo "><a href='".$_SERVER['PHP_SELF']."?month=".$monthstring."&day=".$daystring."&year=".$year."&v=true'>".$i."</a></td>";
			}
			echo "</tr>";
		?>
	</table>
<?php
	if(isset($_GET['v']))
	{
		$cnam1 = $_COOKIE['$email'];
		$cname = $_SESSION ['curname'];
		//echo "<h1>".$cname."</h1>";
		//echo "<h1>".$_SESSION['curname']."</h1>";
		//echo "<h1>".$cnam1."</h1>";
		echo "<hr>";
		echo "<center><button class = 'button1'><a href='".$_SERVER['PHP_SELF']."?month=".$month."&day=".$day."&year=".$year."&v=true&f=true'>Add Event</a></button></center>";
		if(isset($_GET['f']))
		{
			include("eventcalender.php");
		}
		$sqlEvent = "select * FROM tbl3 where eventDate='".$month."/".$day."/".$year."' and name = '".$cname."' or name = '".$cnam1."' ";
		$resultEvents = mysql_query($sqlEvent);
		echo "<hr>";
		echo "<div class = 'color' >";
		echo "<br><br>";
		while ($events = mysql_fetch_array($resultEvents))
		{
			echo "<center><div class='comment-box' >";
			echo "Title: ".$events['title']."<br>DATE : ".$day."/".$month."/".$year."<br>";
			echo "Detail: ".$events['Detail']."<br><br>";
			echo "</div></center><br>";
		}
		echo "<br><br></div>";
	}
?>
</body>
</html>