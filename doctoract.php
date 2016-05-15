<!DOCTYPE html>
<html>
<head>	
	<title></title>
</head>
<body>
	
	<form id="input" action="php/todoctor.php" method="get">	
		<label for="alpha">Name</label><br/>
		<input type="text" name="Name" placeholder="Name" required> <br/>
		<label for="alpha">Specialization</label><br/>
		<input type="text" name="Spec" placeholder="Specialization" > <br/>				
		<input type="submit" name="submit" value="submit">	<br/>	
	</form>	
	
	<form>
		<p><button formaction="php/showdoctors.php">Show All Masters</button></p>
	</form>	
	<form>
		<p><button formaction="php/showlastdoctor.php">Show Last Added Master</button></p>
	</form>
</body>
</html>