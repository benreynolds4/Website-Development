<!-- Index -->

	<!Doctype html>
	<html>
		<head>
			
			<title>
			Home | IrishGolf.com
			</title>
	
			<?php  include('favicon.php'); ?>
			<link rel="stylesheet" type="text/css" href="styles/style.css">
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
			<script src="includes/javascript.js" type="text/javascript"></script>
			
	


		</head>

			<body onLoad="insertText()">
		
			<?php
$con = mysqli_connect( 'iprotectorsnet.fatcowmysql.com', 'breynolds', 'ireland1234'); 
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}




?>
			

				<nav >
						<?php  include('includes/navigation.php'); ?>
				</nav>
				
				<section class="intro">
				<div id="title">
				<h1 class="latesth" id="test"> Latest News: </h1>
				</div>
					<section class="latest">
					
							
							<section class="title" onclick="changeImagea()">
							<?php
							
									$result = mysqli_query($con, "SELECT * FROM wdproject_wdproject.men ORDER BY Date desc, Time desc  ") or die('Unable to run query:' . mysqli_error($con));

									if ($row = mysqli_fetch_array($result)) {
										echo  "<a href='article.php?ID=" . $row['ID']. "'>" . "<h3>". $row['Title'] . "</h3>" . "</a>";
										echo   $row['Sumary'];
										}
							?>

							</section>
							
							<section class="title" onclick="changeImageb()">
								<?php
							
									$result = mysqli_query($con, "SELECT * FROM wdproject_wdproject.women ORDER BY Date desc, Time desc ") or die('Unable to run query:' . mysqli_error($con));

									if ($row = mysqli_fetch_array($result)) {
										echo  "<a href='article2.php?ID=" . $row['ID'] . "'>" . "<h3>". $row['Title'] . "</h3>" . "</a>";
										echo   $row['Sumary'];
										}
							?>
							</section>
							
						
		
							
							<section class="titlebottom" onclick="changeImagec()">
								<?php
							
									$result = mysqli_query($con, "SELECT * FROM wdproject_wdproject.junior ORDER BY Date desc, Time desc") or die('Unable to run query:' . mysqli_error($con));

									if ($row = mysqli_fetch_array($result)) {
										echo  "<a href='article3.php?ID=" . $row['ID']. "'>" . "<h3>". $row['Title'] . "</h3>" . "</a>";
										echo   $row['Sumary'];
										}
							?>
							</section>
					</section>
					
					<section class="latestpic">
						<img id ="imgClickAndChange" src="img/latest1.png" />
					</section>
					
				</section>
				
				
				<section class="holder">
					<section class="logo">
					<img src="img/logos.png" border="0" usemap="#Map" />
                    <map name="Map">
                      <area shape="poly" coords="78,78,54,62,48,46,49,35,52,23,59,15,68,8,79,7,90,9,102,14,113,23,118,34,118,53,112,64,100,74,79,77" href="http://www.ilgu.ie" target="blank" alt="ilgu website">
                      <area shape="poly" coords="80,92,92,92,104,100,117,108,122,122,122,133,116,144,112,153,107,159,94,162,86,164,69,159,57,149,50,137,47,125,49,113,58,103,71,97" href="http://www.gui.ie" target="blank" alt="gui ">
                    </map>
               
					</section>
					
					<section class="about">
					<h1> Welcome to IrishGolf.com</h1>
					<p> 
					<br>
					This is a website for both the top level ameteur golfers in Ireland themselves and those who are interested in keeping up to date with the latest scores and the latest news on the irish circuit. </p>
					<br>
					<p> The website has three particular sections, mens golf, womens golf and junior golf.</p>
					<br>
					<p> The quality of golf is ever increasing on the ameteur circuit around Ireland and we feel that this quality should be reported on and those with an interest with the game be informed with live scores and news as soon as they happen </p>
					<br>
					<p> If you've any suggestions on how we can improve the site or would like to get on board with the team please don't hesitate to contact us via the <a href="contact.php" style="color: white; text-decoration: underline;">Contact Page</a>.
					</section>
					<section class="adds">
					<a href="http://golfsocks.com" ><img src="img/adds.png" /> </a>
					</section>
				</section>

			
			
			
			
				<footer>
							<?php  include('includes/footer.php'); ?>
			</footer>

			</body>

	</html>