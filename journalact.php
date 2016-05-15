<!DOCTYPE html>
<html>
<head>	
	<title></title>
</head>
<body>
	
	<form id="input" action="php/tojournal.php" method="get">	
		<input type="alpha" name="Doctor" placeholder="Doctor"> <br/>	
		<input type="alpha" name="Patient" placeholder="Patient"> <br/>	
		<input type="alpha" name="Comment" placeholder="Comment"> <br/><br/>	
		<input type="submit" name="submit" value="submit">	<br/>	
	</form>
	<form>
		<p><button formaction="php/showjournal.php">ShowJournal</button></p>
	</form>	
		
</body>
</html>