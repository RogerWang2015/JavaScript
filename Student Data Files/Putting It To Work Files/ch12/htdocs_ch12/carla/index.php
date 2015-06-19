<?php include ('assets/insert.php'); ?>

<html>
<head>
<title>Carla's Classroom | Add Students</title>
<link href="css/carla.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
	<img src="images/owl_reading.jpg" class="floatleft" />  
	<h1 id="logo"><em>Carla's Students</em></h1>
	
	<div id="content">
		<img src="images/carla_pic.jpg" class="floatleft" />
		<div style="width: 400px; float: right;">
			<div style="float: right; width: 400px; border: 1px solid black; background-color: #FFEAA3; padding: 5px; margin-right: 50px;">
				<p>Add Students Form </p><hr />
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<table>
						<tr>
							<td><p>Last name: </td>
							<td><input type="text" size = "30" name="lastName" /></p></td>
						</tr>
						<tr>
							<td><p>First name: </td>
							<td><input type="text" size = "30" name="firstName" /></p></td>
						</tr>
						<tr>
							<td><p>Parent's email: </td>
							<td><input type="text" size = "30" name="contactEmail" /></p></td>
						</tr>
						<tr>
							<td><p>Math grade: </td>
							<td><input type="text" size = "30" name="gradeMath" /></p></td>
						</tr>
						<tr>
							<td><p>Reading grade: </td>
							<td><input type="text" size = "30" name="gradeRead" /></p></td>
						</tr>
						<tr>
							<td><p>Writing grade: </td>
							<td><input type="text" size = "30" name="gradeWrite" /></p></td>
						</tr>
						<tr>
							<td><p>My comments: </td>
							<td><textarea rows="6" cols="23" name = "comment"> </textarea></p></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:center;"><input type="submit" name="frmAddStudent" /></td>
						</tr>
					</table>
				</form><!-- close insert form -->
				<hr />
				<p><a href = "sendEmail.php">Send a report by email</a></p>
			</div>
		</div>
	</div>
	</div>
</body>
</html>
