<?php include ('assets/insert.php'); ?>
<html>
<head>
<title>Greg's Gambits | Send Player Email</title>
<link href="css/greg.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
	<img src="images/superhero.jpg" class="floatleft" />  
	<h1 id="logo"><em>Greg's gambits players</em></h1>
	<p>&nbsp; </p><p>&nbsp; </p>

	<div id="content">
		<img src="images/superhero.jpg" class="floatleft" />
		<div style="float: right; width: 400px; border: 1px solid black; background-color: #FFEAA3; padding: 5px; margin-right: 50px;">
				<p>Send email to player</p><hr />
				<form action="assets/getPlayer.php" method="post">
					<table>
						<tr>
							<td>Player's username: </td>
							<td><input type="text" name="get_username" /></td>
						</tr>
						
						<tr>
							<td colspan="2" style="text-align:center;"><input type="submit" /></td>
						</tr>
					</table>
				</form><!-- close getStudent form -->
			</div>
		</div>
	</div>

</body>
</html>
