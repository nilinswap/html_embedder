<?php 
	define ("TITLE","CLICK BAIT");
	include("function.php");

	if(isset($_POST["fix_submit"])){
		afterclick();
		
	}
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
			<p class="lead"> Hate click bait? Turn those annoying headlines into  realistic and honest ones using this simple program.</p>
			<div class="row">
				<form class="col-sm-8 col-sm-ofset-2" action="" method="post">
					<textarea placeholder="Paste click bait headline here" class="form-control input-lg" name="clickbait_headline"></textarea><br>
					<button type="submit" class="btn btn-primary btn-lg pull-right" name="fix_submit">Make honest!</button>
				</form>
			</div>
			<?php
				if(isset($_POST["fix_submit"])){

					$clickBait=afterclick()[0];
					$honestHeadline=afterclick()[1];
					display($clickBait,$honestHeadline);
				}
			?>		

	
		</div>
		<!--<script type="text/javascript" src="var/www/bootstrap/bootstrap/js/bootstrap.min.js"></script>-->
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
		
	</body>

</html>
