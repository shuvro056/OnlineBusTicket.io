 
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Print Ticket</title>
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
		<h1 style="text-align:center">Seat information</h1>
		
	</div>
	<!--<div class="slider">
		<div class="mid">
			<div class="slider_cont">
				<img src="images/1.jpg" alt="" />
				<img src="images/2.jpg" alt="" />
				<img src="images/3.jpg" alt="" />
				<img src="images/4.jpg" alt="" />
			</div>
		</div>
	</div>!-->
	
	<div class="form">
		<div class="mid">
				<div class="form_left">
				<form action="final.php" method="GET">
<?php
	include "db.php";
	if (isset($_GET['submit'])) {
		$fname = $_GET['fname'];
		$lname = $_GET['lname'];
		$contact = $_GET['contact'];
		$seat =$_GET['seat'];
		$sid=$_GET['sid'];
		?>
		<?php
			$sql = "SELECT total_seat,available_seat,bk FROM schedule WHERE schedule_id = '".$sid."'";
			$dave=mysqli_query($con,$sql) or die(mysqli_error());
		    while($row=mysqli_fetch_assoc($dave)){
			$bk=$row['bk'];
			//echo $row['total_seat'];
			$k = $row['total_seat'];
			echo '<br>';
			$m= $row['available_seat'];	 
	 }
	   ?>
		 <?php
		  echo "<table border='3' height=40px style='width:300px; text-align:center;'>";
		  echo "<h4>Your seat number is :</h4>"; 
		  echo"<br>";
			for($i=$bk+1;$i<=$bk+$seat;$i++)
		{
			    echo "<tr> \n";
				for($i=$bk+1;$i<=$bk+$seat;$i++){	
					$p=$i;
					 echo "<td>$p</td> \n";  
				}
					echo "</tr>"; 
		}
		echo "</table>";
		$up = "UPDATE schedule SET available_seat='".$m."'-'".$seat."',bk='".$bk."' + '".$seat."' WHERE schedule_id='".$sid."'" ;
	if ($con->query($up) === TRUE) {
		//echo "Record updated successfully";
		//var_dump($up);
		//die();
		} 
	else {
		echo "Error updating record: " . $con->error;
	  }
 ?>
		 <?php
			$sq = "SELECT price FROM schedule WHERE schedule_id = '".$sid."'";
			$da=mysqli_query($con,$sq) or die(mysqli_error());	
		    while($row=mysqli_fetch_assoc($da)){
		    $prc=$row['price'];
		    // echo $row['price'];
			//$bk=$row['bk'];
			//echo $row['total_seat'];
			//$k = $row['total_seat'];
			echo '<br>';
			//$m= $row['available_seat'];	
			$fp=$prc*$seat;
	 }
	       $con->close();
	   ?>
	  <?php
		    echo"<h4>Your Information :</h4><br>";
			//we will print table head one time
			echo   "<table border='3' height=100px style='width:1000px; text-align:center;'>
						<tr>
							<th >
							First name
							</th>
							<th>
							 Last Name
							</th>
							<th>
							Contact
							</th>
							<th>
							Seat Quantity
							</th>
							<th>
							Coach Number
							</th>
							 <th>
							 Total Payble
							 </th>
							 
						</tr>";
						
		//bus data will be iterated 
			 
				echo	"<tr>
						<td>".$fname."</td>
						<td>".$lname."</td>
						<td>".$contact."</td>
						<td>".$seat."</td>
						<td>".$sid."</td>
						<td>".$fp."</td>
						
						</tr>
			 
				
				";
			   echo "</table>";
	}
		?>
		<br>
		<input type="submit" name="submit" value="confirm" style='margin-left:50%; margin-top:80px;'>
		<br>
		<br>
		<input type='hidden' name='fname' value='<?php echo $fname;?>'>
		<input type='hidden' name='lname' value='<?php echo $lname;?>'>
		<input type='hidden' name='contact' value='<?php echo $contact;?>'>
		<input type='hidden' name='seat' value='<?php echo $seat;?>'>
		<input type='hidden' name='sid' value='<?php echo $sid;?>'>
		<input type='hidden' name='jdate' value='<?php echo $jdate;?>'>
		<input type='hidden' name='prc' value='<?php echo $prc;?>'>	
		</form>	 
	</div>
	</div>
	</div>
	<div class="comment_purpose">
	</div>
	<div class="company">
		<div class="mid">
			<div class="bus_operator">
				<h3>Available Bus Operators</h3>
		<hr />
			<div class="box">
				<p>.R Travels,
					Agomony Express,
					Akota Transport,
					Ena Transport (Pvt) Ltd,
					Green Line Paribahan,
					S.R Travels (Pvt) Ltd.
				</p>
			</div>
			<div class="box">
				<p>
					Hanif Enterprise,
					HIMACHOL EXPRESS,
					Manik Express,
					Nabil Paribahan,
					Relax Transport Ltd.
					S A Travels (Pvt) Ltd.
					S.B Super Deluxe,
				</p>
			</div>
			<div class="box">
				<p>
					Sheba Green Line,
					Shohagh Paribahan,
					Shyamoli Paribahan,
					Soudia Air Con,
					Star Line Special Ltd.
					Tisha Group,
					
				</p>
			</div>
		</ul>
			</div>
		</div>
	</div>
	
	<div class="social">
		<div class="mid">
			<hr />
			<div class="icon">
			<h3>Connect with Us</h3>
				<ul>
					<li>
						<a target="" href="#">
							<i class="fa fa-facebook-square" style=""></i>
						</a>
					</li>
					<li>
						<a target="" href="#">
							<i class="fa fa-twitter"></i>
						</a>		
					</li>
					<li>
						<a rel="publisher" target="" href="#">
						<i class="fa fa-google-plus-square"></i>
						</a>
					</li>
				</ul>
			</div>
			<div class="footer">
			<p>Copyright @Own idea,©W3Schools,@Google etc</p>
		</div>
		</div>	
	</div>
</body>
</html>