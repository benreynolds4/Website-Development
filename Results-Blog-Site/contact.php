<!-- Contact -->

	<!Doctype html>
	<html>
		<head>
			
			<title>
			Contact | IrishGolf.com
			</title>
			
			<?php  include('favicon.php'); ?>
			<link rel="stylesheet" type="text/css" href="styles/style.css">
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
			<script src="includes/javascript.js" type="text/javascript"></script>


		</head>

			<body>
				<nav>
						<?php  include('includes/navigation.php'); ?>
				</nav>
				
				
	<?php
		
		// if form not submited display form
		if (!isset($_POST['Submit'])){}
	?>

			<section class = "formwrap" >
					
					<section class="contactleft">
					<h1> Contact Us: </h1>
						<div class="formbox">
							<form action="mailto:benreynolds28@gmail.com" method="GET" id="usrform">
							<label class="label" for= "name"> Name: </label><br />
								<input class="tb" type="text" name="name" /><br />
							<label class="label"  for= "email"> Email: </label><br />
								<input class="tb" type="text" name="email" />
								<br />
							<label class="label"  for= "comment"> Comments: </label><br />
							
							<textarea name="textarea2" id="textarea2" cols="30" rows="5"></textarea>
					    <br />
								<input type="submit" value="Send"/><br />
							</form>

						</div>
					</section>
					
					<section class="contactright">
						
						<section class="left">
			
						
						<img src="img/social.png" border="0" usemap="#Map" style="margin-left: -30px; margin-top: 20px;" />
                        <map name="Map">
                          <area shape="rect" coords="13,33,153,98" href="http://www.youtube.com" target="blank">
                          <area shape="rect" coords="4,152,160,204" href="https://twitter.com" target="blank">
                          <area shape="rect" coords="180,157,347,198" href="https://facebook.com" target="blank">
                          <area shape="rect" coords="215,13,314,114" href="https://google.com" target="blank">
                        </map>
						
						</section>
			
					</section>

			
			</section>
			
			
			
				<footer>
							<?php  include('includes/footer.php'); ?>
				</footer>

			</body>

	</html>