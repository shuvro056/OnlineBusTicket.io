 
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
	
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>
<body>
	<div class="header">
	 
		<div class="mid">
		<hr> 
			<div class="logo">
				<img src="images/logo.png" alt="" />
			</div>
			<div class="menu">
				<ul>
					<li>
						<a href="index.php">
							<i class="fa fa-home" style="font-size:19px;margin-right:3px;"></i>Home
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-bus" style="font-size:19px;margin-right:3px;"></i>
							About Bus
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-phone" style="font-size:19px;margin-right:3px;"></i>
							Contact
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-hotel" style="font-size:19px;margin-right:3px;"></i>
							Hotel
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-commenting" style="font-size:19px;margin-right:3px;"></i>
							Complain Box
						</a>
					</li>
					<li><a href="user.php">
				        	<i class="fa fa-user" style="font-size:19px;margin-right:3px;"></i>
					Admin</a></li>
				</ul>
			</div>
			<hr>  
			<br>
			<br>
			<br>	 
		</div>
		<h1 style="text-align:center">Available buses</h1>
	</div>
	<div class="form">
		<div class="mid">
				<div class="form_left">	
				<form action="seat.php" type="GET">
 <?php
	include "db.php";
	if (isset($_GET['submit'])){
		$class = $_GET['class'];
		$sfrom  = $_GET['from'];
		$destin  = $_GET['to'];
		$jdate  = $_GET['jdate'];
		if($sfrom==$destin){
		}
		//var_dump($_GET); die();
		$sql =  'SELECT * FROM schedule WHERE class="'.$class.'" AND start_from="'.$sfrom.'" AND destination="'.$destin.'" AND journey_date="'.$jdate.'" AND price';
			$result = $con->query($sql);
			//we will print table head one time
			echo   "<table border='1' style='width:1000px; text-align:center;'>
						<tr>
							<th >
							Bus Name
							</th>
							<th>
							Departure Time
							</th>
							<th>
							Available seat
							</th>
							<th>
							Total seat
							</th>
							<th>
							Price
							</th>
							<th>
							Choose
							</th>	
						</tr>";
		//bus data will be iterated 
			while($row=mysqli_fetch_assoc($result)){
					echo	"<tr>
						<td>".$row["name"]."</td>
						<td>".$row["departure_time"]."</td>
						<td>".$row["available_seat"]."</td>
						<td>".$row["total_seat"]."</td>
						<td>".$row["price"]."</td>
						<td><input type='radio'  name='sid' value='".$row['schedule_id']."'></td> 
						</tr>
				";	
			}
		echo "</table>";
			}
	//	echo "<input type='hidden' name='jdate' value='".$jdate."'>";
	echo"<br>";
	echo"<br>";
	echo	"<br>";
		
		// echo '<pre>'; print_r($sql); print_r($result); die();	 	
?>
<input type='submit' name='buy' style='margin-left:50%; margin-top:80px;'>;
</form>		 
	</div>
	</div>
	<div class="comment_purpose">
	</div>
</body>
</html>