<?php 
	define ("TITLE","SeeItinHtml");
	include("embedfunction.php");
 
						
						if(isset($_POST["run_iframe"])){
							afterrun();
							
						}
						
				
	
?>
<!DOCTYPE HTML>
<html lang = "en">
  <head>
    <title><?php echo TITLE ?></title>
    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo TITLE; ?></title>
		<!--<link href="/var/www/bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <style>
  		#container {
		  background-color:#f1f1f1;
		  width:100%;
		  overflow:auto;
		  position:absolute;
		  top:128px;
		  bottom:0;
		  height:auto;
		}
		#textareacontainer, #iframecontainer {
		  float:left;
		  
		  height:80%;
		  /*height:100%;*/
		  width:50%;
		}
		
		#textarea, #iframe {
		  height:100%;
		  width:100%;
		  padding-bottom:10px;
		  padding-top:1px;
		}
		#textarea {
		  padding-left:10px;
		  padding-right:5px;  
		}
		#iframe {
		  padding-left:5px;
		  padding-right:10px;  
		}
		#textareawrapper {
		  width:100%;
		  height:100%;
		  background-color: #ffffff;
		  position:relative;
		  box-shadow:0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
		}
		#iframewrapper {
		  width:100%;
		  height:100%;
		  -webkit-overflow-scrolling: touch;
		  background-color: #ffffff;
		  box-shadow:0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
		}
		#textareaCode {
		  background-color: #ffffff;
		  font-family: consolas,"courier new",monospace;
		  font-size:15px;
		  height:90%;
		  width:97%;
		  padding:8px;
		  resize: none;
		  border:none;
		  line-height:normal;    
		}
		#textareacontainer.horizontal,#iframecontainer.horizontal{
		  height:50%;
		  float:none;
		  width:100%;
		}
		#textarea.horizontal{
		  height:100%;
		  padding-left:10px;
		  padding-right:10px;
		}
		#iframe.horizontal{
		  height:100%;
		  padding-right:10px;
		  padding-bottom:10px;
		  padding-left:10px;  
		}
		#container.horizontal{
		  min-height:200px;
		  margin-left:0;
		}
  </style>

  <body>
    <h1>html tester</h1>
	
	    <div id="container">
	      
	        <div id="textareacontainer">
	          	<h3>here you write</h3>
	        	<div id="textarea">
					<div id="textareawrapper">
					        
							
					        <form id="codeForm" autocomplete="off"  action="",    method="post", style="height: 110%;">
					        	<textarea autocomplete="off" id="textareaCode" wrap="logical" name="entered_code" spellcheck="false"><?php 
					        	if(isset($_POST["run_iframe"])){
					        		print( $_POST["entered_code"]);
					        	}
					        ?>
								</textarea>
								
					          <button type="submit"  name="run_iframe">Run</button>
					        </form>
					        

					    	

					       
					</div>
				</div>
			        <!--<p>
			          <label>Text Area</label>
			          <br>
			          <textarea id = "myTextArea"
			                  rows = "40"
			                  cols = "80">Your text here</textarea>
			        </p>-->


		
	

			</div>
			<div id="iframecontainer">
				<h3>here you behold</h3>
			    <div id="iframe">
			      <div id="iframewrapper">
			      	<?php
			      		$st='<iframe src="embededpage.html" style="height:100%; width:100%;">
							  <p>Your browser does not support iframes.</p>
						</iframe>';
			      		if(isset($_POST["run_iframe"])){
					        		echo($st );
					        	}
					 ?>
			      		
			      </div>
			    </div>
			</div>
  
	    </div>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>