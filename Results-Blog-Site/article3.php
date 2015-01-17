<!-- Article -->

	<!Doctype html>
	<html>
		<head>
			
			<title>
			Juniors | IrishGolf.com
			</title>
					
			<link rel="stylesheet" type="text/css" href="styles/style.css">
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
			<script src="includes/javascript.js" type="text/javascript"></script>
		

		</head>

			<body onload="insertText()">
				<nav>
						<?php  include('includes/navigation.php'); ?>
				</nav>

						 <article class="general">

       
<header>
            <?php
$con = mysqli_connect( 'iprotectorsnet.fatcowmysql.com', 'breynolds', 'ireland1234');
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$the_id = $_GET['ID'] ;
$result = mysqli_query($con, "SELECT * FROM wdproject_wdproject.junior where ID = $the_id") or die('Unable to run query:' . mysqli_error($con));




while ($row = mysqli_fetch_array($result)) {
    echo  "<h2>". $row['Title'] . "</h2>";
    echo   $row['Date'] . "<br>";


echo "</header>";


//echo "<div class='image'>";
// "<h1> INSERT IMAGE HERE </h3>";
//echo "</div>";


echo "<section>";


    echo   nl2br($row['Content'] . '<br>');
	}


echo "</section>";




mysqli_close($con);
?>

			</article>
			
			
			
				<footer>
							<?php  include('includes/footer.php'); ?>
				</footer>