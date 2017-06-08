<?php

	function afterrun(){
		$codestring=$_POST["entered_code"];
		
		$myfile = fopen("embededpage.html", "w") or die("Unable to open file!");
				//echo fread($myfile,filesize("test.txt"));
				fwrite($myfile, $codestring);
				fclose($myfile);
		
		
	}
?>