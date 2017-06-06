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
				
				$user=array(
					"username"=>"naamh",
					"anything"=>"naamhnaamh"
						   );
				echo $user[username]."<br>";	
				echo $user[anything]."<br>";	
				$userer
			?>


	
		</div>
		<!--<script type="text/javascript" src="var/www/bootstrap/bootstrap/js/bootstrap.min.js"></script>-->
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
		


</html>
