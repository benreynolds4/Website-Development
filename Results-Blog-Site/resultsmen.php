<!-- Results -->

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
				
				<section class="resultswrap" >
					<section class="resultsheaderleft">
					<h1> Irish Mens Close </h1>
					<h5> Location: Seapoint Golf Club </h5>
					<h5> Date: 12th - 14th June 2014 </h5>
					</section>
					
					<section class="resultsheaderright">
					<h5> Past Champion: XXXXXXX </h5>
					<h5> Winning Score: 297 </h5>
					
					</section>
					
					<section class="resultstable">
											<?php
													$con = mysqli_connect( 'iprotectorsnet.fatcowmysql.com', 'breynolds', 'ireland1234');  
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
														
														echo "<table class='table'>";
														echo  "<tr class='header'><td> No. </td><td class='name'> Name: </td><td class='round'> R1 </td><td class='round'> R2 </td><td class='round'> R3 </td><td class='round'> R4 </td><td class='round'> Total: </td><td class='round'>Par: </td></tr>";
														while ($row = mysqli_fetch_array($result)) {
															
															echo "<tr>";
															echo "<td>" . $i . "</td>";
															echo  "<td class='name'><h3>" . $row['Name'] . "</h3>" . "</td>";
															echo  "<td class='round'>" .  $row['RoundOne'] . "</td>";
															echo  "<td class='round'>" .  $row['RoundTwo'] . "</td>";
															echo  "<td class='round'>" .  $row['RoundThree'] . "</td>";
															echo  "<td class='round'>" .  $row['RoundFour'] . "</td>";
															echo  "<td class='round'>" .  $row['Total'] . "</td>";
															echo "<td class='round' id='over'>"  . $row['Par'] . "</td>";

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