<!-- Articles Womens Home -->

	<!Doctype html>
	<html>
		<head>
			
			<title>
			Womens | IrishGolf.com
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

				<section class="resultshomewrap">
				<div class="resultshomeheader">
				<h2> Latest Articles: </h2>
				<h3> Section: Womens </h3>
				</div>
				
				
				<?php
$con = mysqli_connect( 'iprotectorsnet.fatcowmysql.com', 'breynolds', 'ireland1234'); 
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



$result = mysqli_query($con, "SELECT * FROM wdproject_wdproject.women ORDER BY Date desc, Time desc  ") or die('Unable to run query:' . mysqli_error($con));

									while ($row = mysqli_fetch_array($result)) {
										echo "<section class='displatart' >";
										echo  "<a href='article2.php?ID=" . $row['ID']. "'>" . "<h3>". $row['Title'] . "</h3>" . "</a>";
										echo   $row['Sumary'];
										echo "</section>";
										}
?>
				</section>
				
					
			
			
			
			
				<footer>
							<?php  include('includes/footer.php'); ?>
				</footer>

			</body>

	</html>