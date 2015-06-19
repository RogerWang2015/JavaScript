<!-- This include() statement places the contents of the header.php file, located in the include folder, into this page --> 
<?php include ('include/header.php'); ?>
		<div id = "content">	
			<p class="phpH2">Find Your Username</p>
            <h3>Forgot your username?<br/>
            Start typing a name in the input box below: </h3>
            <form>
            	<h3>Username: <input type="text" onKeyUp="showHint(this.value)" size="20" /></h3>
             </form> 
             <h3>Suggestion: <span id="txtHint" ></span></h3>
				
			</div>
			
			
<?php include ('include/footer.php'); ?>

