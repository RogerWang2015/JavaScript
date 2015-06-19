<?php include ('include/header.php'); ?>
	<div id="content">
		<p>
			<img src="images/carla_pic.jpg" class="floatleft" />
		</p>
		<h3>Forgot your student's full name? <br />
		Want to see other family members?<br />
		Start typing a name in the input box below:</h3>
		<form>
			<h3>First name: <input type="text" onkeyup="showHint(this.value)" size="20" /></h3>
		</form>
		<h3>Suggestions: <span id="txtHint"></span></h3>
	</div>
<?php include ('include/footer.php'); ?>
