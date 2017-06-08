
<?php 
	define ("TITLE","PHP Arrays");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo TITLE; ?></title>
		<!--<link href="/var/www/bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<h1><?php echo TITLE; ?> </h1>
		 	

			
<?php
	//rename("/var/www/html/prac1/testtxt.txt", "/var/www/html/prac1/test5.html");
// Outputs all the result of shellcommand "ls", and returns
// the last output line into $last_line. Stores the return value
// of the shell command in $retval.
		 
// Printing additional info
			echo shell_exec("ls  /var/www/html");
			echo shell_exec("chmod 777 testtxt.txt");
?>



	
		</div>
		<!--<script type="text/javascript" src="var/www/bootstrap/bootstrap/js/bootstrap.min.js"></script>-->
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
		


</html>
