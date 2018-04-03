<html> 
	<head>
		<link rel="stylesheet" type="text/css" href="style1.css" media="all" />
	 
	 
</head>
       <form action="view.php" method="GET" name="searchbus">
					<label for="1">From</label>
					<select type="text" name="from" id="1"> 
						<option value="-1" selected>Select here</option> 
						<option value="dhaka">Dhaka</option>
						<option value="rajshahi">Rajshahi</option>
						<option value="khulna">khulna</option>
						<option value="barisal">Barishal</option>
						<option value="shylet">shylet</option>
						<option value="chittagong">chittagong</option>
					</select>
					<label for="2">To</label>
					<select type="text" name="to" id="2"> 
						<option value="-1" selected>Select here</option>  
						<option value="dhaka">Dhaka</option>
						<option value="rajshahi">Rajshahi</option>
						<option value="khulna">khulna</option>
						<option value="barisal">Barishal</option>
						<option value="shylet">shylet</option>
						<option value="chittagong">chittagong</option>
					</select>
		<br>
			<label for="3">Date</label>
			<input type="date" name="jdate" id="3" style="width:400px;display:block;"></input> 
		    <label for="4">Class</label>
		    <select type="text" name="class" id="4"> 
			<option value="-1" selected>select here</option>
			<option value="ac">Ac</option>
			<option value="non ac">Non Ac</option>
		</select>
		<input type="submit" text-align:"center"; name="submit" value="Search Bus">
		</form>
</html>