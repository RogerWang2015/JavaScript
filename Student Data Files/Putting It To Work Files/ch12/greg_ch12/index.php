<?php include ('assets/insert.php'); ?>
<?php include ('include/header.php'); ?>

<html>
<head>
<title>Greg's Gambits | Add Players</title>
<link href="css/greg.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
	 
	<h1 id="logo"><em>Greg's Players</em></h1>
	
	<div id="content">
		
		<div style="width: 400px; float: right;">
			<div style="float: right; width: 400px; border: 1px solid black; background-color: #FFEAA3; padding: 5px; margin-right: 50px;">
				<p>Add Players Form </p><hr />
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<table>
                    	<tr>
							<td><p>User Name: </td>
							<td><input type="text" size = "30" name="username" /></p></td>
						</tr>
						<tr>
							<td><p>Last name: </td>
							<td><input type="text" size = "30" name="lastName" /></p></td>
						</tr>
						<tr>
							<td><p>First name: </td>
							<td><input type="text" size = "30" name="firstName" /></p></td>
						</tr>
						<tr>
							<td><p>Player's email: </td>
							<td><input type="text" size = "30" name="email" /></p></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:center;"><input type="submit" name="frmAddPlayer" /></td>
						</tr>
					</table>
				</form><!-- close insert form -->
				<hr />
				<p><a href = "send_mail.php">Send a report by email</a></p>
			</div>
		</div>
	</div>
	</div>
</body>
</html>
<?php include ('include/footer.php'); ?>
