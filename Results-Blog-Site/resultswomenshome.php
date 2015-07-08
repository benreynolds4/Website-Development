<!-- Results Womens Home -->

	<!Doctype html>
	<html>
		<head>
			
			<title>
			Results | IrishGolf.com
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
				<h2> Latest Results: </h2>
				<h3> Section: Womens </h3>
				</div>
				
				<h2 style="padding: 4px;"> List Of All Womens Results: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Latest Event: </h2>
				
				<?php
$con = mysqli_connect( 'iprotectorsnet.fatcowmysql.com', 'breynolds', 'ireland1234'); 
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


 mysqli_select_db($con,'wdproject_mensresults') or die(mysql_error());
$result = mysqli_query($con, "show tables") or die(mysql_error());
    
echo "<section class='resultsholder'>";
$i = 0;
									while($res=mysqli_fetch_row($result)) {
										echo "<section class='displatres' >";
										echo "<a href='resultsmen.php' ><h3>" . strtoupper($res[0]). "</h3> </a>";
										
										echo "</section>";
										
										$i++;
										}
?>

		</section>
		
		<section class='displayright'>
		
		<?php	$con = mysqli_connect( 'iprotectorsnet.fatcowmysql.com', 'breynolds', 'ireland1234');
													// Check connection
													if (mysqli_connect_errno()) {
													echo "Failed to connect to MySQL: " . mysqli_connect_error();
													}
													
														$result = mysqli_query($con, "SELECT `Name`,  `RoundOne`, `RoundTwo`, `RoundThree`, `RoundFour`, `RoundOne` + `RoundTwo` + `RoundThree`+ `RoundFour` `Total`, `Par` FROM wdproject_test.results ");
														$par = 72;
														$j = 0;
														while ($row = mysqli_fetch_array($result)) {
															
															if ($row['RoundOne'] && $row['RoundTwo'] && $row['RoundThree'] && $row['RoundFour'] == 0)
															{ $round = 0; }
															if ($row['RoundTwo'] && $row['RoundThree'] && $row['RoundFour'] == 0)
															{ $round = 1; }
															if ($row['RoundThree'] && $row['RoundFour'] == 0)
															{ $round = 2; }
															if ($row['RoundFour'] == 0)
															{ $round = 3; }
															else
															{ $round = 4; }
	
																
																$over =  $row['Total'] - $par * $round  ;
																
																$query = mysql_query("UPDATE wdproject_test.results SET Par = $over WHERE id = $j");
																$j++;
															}
														
													
														$result = mysqli_query($con, "SELECT `Name`,  `RoundOne`, `RoundTwo`, `RoundThree`, `RoundFour`, `RoundOne` + `RoundTwo` + `RoundThree`+ `RoundFour` `Total`, `Par` FROM wdproject_test.results ORDER BY Par asc") or die('Unable to run query:' . mysqli_error($con));
														$i = 1;
														
														echo "<table class='tablesmall'>";
														echo  "<tr class='header'><td class='id'> No. </td><td class='namesmall'> Name: </td><td class='roundsmall'> Total: </td><td class='roundsmall'>Par: </td></tr>";
														while ($row = mysqli_fetch_array($result)) {
															
															echo "<tr>";
															echo "<td class='id'>" . $i . "</td>";
															echo  "<td class='namesmall'><h3>" . $row['Name'] . "</h3>" . "</td>";
								
															echo  "<td class='roundsmall'>" .  $row['Total'] . "</td>";
															echo "<td class='roundsmall' id='over'>"  . $row['Par'] . "</td>";

															$i++;
															}
															echo "</tr></table>";
?>
			
				</section>
			</section>
			
		
				
					
			
			
			
			
				<footer>
							<?php  include('includes/footer.php'); ?>
				</footer>

			</body>

	</html>