<!DOCTYPE html>
<html lang="en">
<head>

    <title>Day 1 Input</title>
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>


<body>

<?php
include 'connection.php';
?>
 <ul>
            <li><a href="results.php">Display Day 2 Results</a></li>
            <li><a href="dayonescores.php">Display Day 1 Results</a></li>
            <li><a href="input_scores.php">Enter Day 2  Results</a></li>
</ul>
<section id="contact" class="home-section text-center bg-gray">

					<h2>Day One</h2>
                    <form action="dayone.php" method="POST">
                        <div class="form-group">
                           
					
                         <div class="form-group">
                            <label for="name">
                                Add Player</label>
                            <input type="text" name="name">
                        </div>

                         <div class="form-group">
                            <label for="handicap">
                                Handicap</label>
                            <input type="text" name="handicap">
                        </div>

                        <div class="form-group">
                            <label for="dayone">
                                Day One Score</label>
                            <input type="text" name="dayone">
                        </div>

                        <button type="submit" value="input_scores" name="input_scores" class="btn btn-skin pull-right" id="btnContactUs">Input Day One Scores</button>
                
                </form>
            
        <?php
			
		if(isset($_POST['input_scores']))
		{
            
            $name =  $_POST['name'];
			$dayone = $_POST['dayone'];
            $total = $_POST['dayone'];
            $handicap = $_POST['handicap'];
            $nett = $dayone - $handicap;


             $sql = "INSERT INTO results(name, handicap, dayone, total, dayonenett, totalnett) values ('$name', '$handicap', '$dayone', '$dayone', '$nett', '$nett') ";

                    if (mysqli_query($con, $sql)) {
                    echo "Player Added with day one score ";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($con);
                }

            }

           
		
		
		
		
		?>			
			
	
		
	</section>


 
</body>
</html>