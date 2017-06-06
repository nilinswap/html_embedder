<?php

	function afterclick(){
		$clickBait=strtolower($_POST["clickbait_headline"]);
		$a=array(
			"scientists",
			"doctors",
			"hate",
			"stupid",
			"weird",
			"simple",
			"trick",
			"shocked me",
			"you'll never believe",
			"hack",
			"epic",
			"unbelievable"
			);
		$b=array(
			"so-called scientitists",
			"so-called doctors",
			"aren't threatened by",
			"average",
			"completely normal",
			"ineffective",
			"method",
			"is no different that the others",
			"you won't really be surprised by",
			"slightly imporve",
			"boring",
			"normal"
		);	
		$honestHeadline=str_replace($a,$b,$clickBait);
		return array($clickBait,$honestHeadline);
	}

	function display($clickBait,$honestHeadline){
		
		echo "<strong class='text-danger'>Original Headline</strong><h4>".ucwords($clickBait)."</h4><hr>";
		echo "<strong class='text-success'>Honest Headline</strong><h4>".ucwords($honestHeadline)."</h4><hr>";
	}
?>