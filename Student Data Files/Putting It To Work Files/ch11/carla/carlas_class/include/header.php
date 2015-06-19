<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Carla's Classroom | Find Students With PHP Hints</title>
		<link href="css/carla.css" rel="stylesheet" type="text/css" />
		<script language="JavaScript" type="text/javascript">
		//str is passed to the function by the onkeyup event 
			function showHint(str)
			{
		//if nothing is typed, nothing is returned
				if (str.length==0)
				{
					document.getElementById("txtHint").innerHTML="";
					return;
				}
		//the if-else construct checks to see if the browser is older. Most modern browsers use the syntax shown in the if clause to create an XMLHttpRequest() object. But if the browser is much older, the syntax in the else clause will be used. The XMLHttpRequest object allows communication with the server. This object establishes an independent connection channel between our client-side web page and the server-side php script.	
				if (window.XMLHttpRequest) //for most modern browsers
				{
					var xmlhttp = new XMLHttpRequest();
				}
				else // code for older browsers
				{
					var xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
		//The onreadystatechange event is triggered every time the readyState changes.
				xmlhttp.onreadystatechange = function()
				{
		//This checks if readyState is 4 (means request is finished and response is ready) and status is 200 (the page is found). If TRUE then response is ready.
					if (xmlhttp.readyState==4 && xmlhttp.status==200)
					{
		// Now we can access the server's response to the request. The 'responseText' property is used to retrieve the server's response as a string
						document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
					}
				}
		// open(method,url,async) has 3 arguments. Here the method = GET. The second argument is the location of server-side processing - gethint.php with an appended parameter, q, equal to str which holds whatever was typed into the input box. The asynch argument is set to TRUE sp that server-side script processing continues after the send() method, without waiting for a response.
				xmlhttp.open("GET","gethint.php?q="+str,true);
		//the send() method executes the request
				xmlhttp.send();
			}
	</script>
	</head>
	<body>
	<!-- html to be inserted into calling page -->
		<div id = "header">
			<img src="images/owl_reading.jpg" class="floatleft" />  
			<h1><em>Carla's Classroom</em></h1>
			<h2 align="center">Making Learning Fun!</h2>
			<div align="left">
				<blockquote>
					<p><a href="index.html"><img src ="images/owl_button.jpg" />Home</a>
					<a href="carla.html"><img src="images/carla_button.jpg" />Meet Carla </a>
					<a href="reading.html"><img src="images/read_button.jpg" />Reading</a>
					<a href="writing.html"><img src="images/write_button.jpg" />Writing</a>
					<a href="math.html"><img src="images/arith_button.jpg" />Arithmetic</a>
					<br /></p>
				</blockquote>
			</div>
		</div> 
	

	