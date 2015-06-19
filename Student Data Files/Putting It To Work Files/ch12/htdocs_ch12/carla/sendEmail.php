<?php include ('assets/insert.php'); ?>
<html>
<head>
<title>Carla's Classroom | Send Student Reports</title>
<link href="css/carla.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
	<img src="images/owl_reading.jpg" class="floatleft" />  
	<h1 id="logo"><em>Carla's Students</em></h1>
	<p>&nbsp; </p><p>&nbsp; </p>

	<div id="content">
		<img src="images/carla_pic.jpg" class="floatleft" />
		<div style="float: right; width: 400px; border: 1px solid black; background-color: #FFEAA3; padding: 5px; margin-right: 50px;">
				<p>Send report by email</p><hr />
				<form action="assets/getStudent.php" method="post">
					<table>
						<tr>
							<td>Last Name: </td>
							<td><input type="text" name="get_lastName" /></td>
						</tr>
						<tr>
							<td>First Name: </td>
							<td><input type="text" name="get_firstName" /></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:center;"><input type="submit" /></td>
						</tr>
					</table>
				</form><!-- close getStudent form -->
			</div>
		</div>
	</div>
</div>
</body>
</html>
