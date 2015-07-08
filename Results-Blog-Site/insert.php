<!-- Index -->

	<!Doctype html>
	<html>
		<head>
			
			<title>
			Admin | IrishGolf.com
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
				
				<section class="insertwrap" >
<h2> Form to add article to Mens database: </h2>
			<form action="insert.php" method="POST">
				<label>Title:</label> <br />
				<textarea  name="title" cols="60" rows="3" required ></textarea><br />
				<label>Summary:</label> <br />
				<textarea  name="summary" cols="60" rows="5"  required ></textarea><br />
				<label>Content:</label><br /> 
				<textarea  name="content"  cols="60" rows="5" required ></textarea><br />
				
			<input name="men" type="submit" value="Insert To Table" />
			</form>
	
					<?php
							$con = mysqli_connect( 'iprotectorsnet.fatcowmysql.com', 'breynolds', 'ireland1234', 'wdproject_wdproject');  
							// Check connection
							if (mysqli_connect_errno()) {
							echo "Failed to connect to MySQL: " . mysqli_connect_error();
							}
						if(isset($_POST['men']))
							{


							$title = $_POST['title'];
							$date = date("Y-m-d");
							$summary = $_POST['summary'];
							$content = $_POST['content'];
							$time = date("H:i:s");
							
							

								$SQL = "INSERT INTO men( Title, Date, Time, Sumary, Content) VALUES ( '$title', '$date', '$time', '$summary', '$content')";

								$result = mysqli_query($con, $SQL);
								echo"1 record added";
							} 

					?>
		
					
			<h2> Form to add article to Womans database: </h2>
			<form action="insert.php" method="POST">
				<textarea  name="title" cols="60" rows="3" required ></textarea><br />
				<label>Summary:</label> <br />
				<textarea  name="summary" cols="60" rows="5"  required ></textarea><br />
				<label>Content:</label><br /> 
				<textarea  name="content"  cols="60" rows="5" required ></textarea><br />
			<input name="women" type="submit" value="Insert To Table" />
			</form>
	
					<?php
							$con = mysqli_connect( 'iprotectorsnet.fatcowmysql.com', 'breynolds', 'ireland1234', 'wdproject_wdproject'); 
							// Check connection
							if (mysqli_connect_errno()) {
							echo "Failed to connect to MySQL: " . mysqli_connect_error();
							}
						if(isset($_POST['women']))
							{

							
							
							$title = $_POST['title'];
							$date = date("Y-m-d");
							$summary = $_POST['summary'];
							$content = $_POST['content'];
							$time = date("H:i:s");
							
							

								$SQL = "INSERT INTO women( Title, Date, Time, Sumary, Content) VALUES ( '$title', '$date', '$time', '$summary', '$content')";

								$result = mysqli_query($con, $SQL);
								echo" 1 record added";
							} 

					?>
					
			<h2> Form to add article to Juniors database: </h2>
			<form action="insert.php" method="POST">
				<textarea  name="title" cols="60" rows="3" required ></textarea><br />
				<label>Summary:</label> <br />
				<textarea  name="summary" cols="60" rows="5"  required ></textarea><br />
				<label>Content:</label><br /> 
				<textarea  name="content"  cols="60" rows="5" required ></textarea><br />
				
			<input name="junior" type="submit" value="Insert To Table" />
			</form>
	
					<?php
							$con = mysqli_connect( 'iprotectorsnet.fatcowmysql.com', 'breynolds', 'ireland1234', 'wdproject_wdproject'); 
							// Check connection
							if (mysqli_connect_errno()) {
							echo "Failed to connect to MySQL: " . mysqli_connect_error();
							}
						if(isset($_POST['junior']))
							{

							
							
							$title = $_POST['title'];
							$date = date("Y-m-d");
							$summary = $_POST['summary'];
							$content = $_POST['content'];
							$time = date("H:i:s");
						
							
							

								$SQL = "INSERT INTO junior( Title, Date, Time, Sumary, Content) VALUES ( '$title', '$date', '$time', '$summary', '$content')";

								$result = mysqli_query($con, $SQL);
								echo"1 record added";
							} 

					?>
					
		<h2> Form to add player to results table in test database: </h2>
			<form action="insert.php" method="POST">
				<label>Name:</label> <input type="text" name="name" required /><br />
				<label>Round One:</label> <input type="text" name="roundone"  /><br />
				<label>Round Two:</label> <input type="text" name="roundtwo" /><br />
				<label>Round Three </label> <input type="text" name="roundthree" /><br />
				<label>Round Four </label> <input type="text" name="roundfour" /><br />
			<input name="results" type="submit" value="Insert To Table" />
			</form>
	
					<?php
							$con = mysqli_connect( 'iprotectorsnet.fatcowmysql.com', 'breynolds', 'ireland1234'); 
							// Check connection
							if (mysqli_connect_errno()) {
							echo "Failed to connect to MySQL: " . mysqli_connect_error();
							}
						if(isset($_POST['results']))
							{

							
							$name = $_POST['name'];
							$roundone = $_POST['roundone'];
							$roundtwo = $_POST['roundtwo'];
							$roundthree = $_POST['roundthree'];
							$roundfour = $_POST['roundfour'];
							
							

								$SQL = "INSERT INTO wdproject_test.results(Name, RoundOne, RoundTwo, RoundThree, RoundFour) VALUES ('$name', '$roundone', '$roundtwo', '$roundthree', '$roundfour')";

								$result = mysqli_query($con, $SQL);
								echo "1 record added";
							}

							
							 

					?>
					
					
					
		
			
			</section>
				<footer>
							<?php  include('includes/footer.php'); 

					?>
				</footer>

			</body>

	</html>