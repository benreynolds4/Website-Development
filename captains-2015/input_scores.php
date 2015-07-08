<!DOCTYPE html>
<html lang="en">
<head>

    <title>Input Day Two</title>
    <style>
        .clear {
            width: 100%;
            height: 15px;
        }
        .color1 {
            background-color: red;
        }

        .color2 {
            background-color: blue;
        }

        .color3 {
            background-color: green;
        }

        .color4 {
            background-color: yellow;
        }

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
            <li><a href="dayone.php">Enter Day 1  Results</a></li>
        </ul>
<section id="contact" class="home-section text-center bg-gray">

    <h3>Instructions</h3>
        <ol>
            <li>Select the holes your entering scores for, e.g 1-9.</li>
            <li>Select name of person your entering scores for from dropdown.</li>
            <li>Only enter scores for the holes your entering for e.g. if entering for 10-12 only enter scores in 10, 11, 12. </li>
            <li>Scroll to bottom and hit input day two scores. </li>
        </ol>
        <p> The form is color coded to make this process easier: Blue (1-9), red(10-12), green(13-15), yellow(16-18)</p>
        <p> If you make a <b>mistake</b>, go threw the process above again for the series of holes the mistake was made. </p>
        <p> E.g. if you enter wrong score on the 11th, the select holes 10-12 again, select name and enter scores for 10, 11 and 12 again. </p>


					<h2>Input Scores</h2>
                    <form action="input_scores.php" method="POST">
                        <div class="form-group">
                            <label for="Holes">
                                Holes</label>
                            <select id="Holes" name="Holes" class="form-control" >
                                <option value="na" selected="">Select Score:</option>
                                <option value="1">1  - 9</option>
                                <option value="2">10 - 12</option>
                                <option value="3">13 - 15</option>
                                <option value="4">16 - 18</option>
                            </select>
                        </div>

                         <div class="clear">
                        </div>
					
                         <div class="form-group">
                            <label for="name">
                                Name</label>
                                  <?php
                            
                                $result = mysqli_query($con, "SELECT * FROM results ORDER BY total asc ") or die('Unable to run query:' . mysqli_error($con));
                                ?><select id="name" name="name" class="form-control" >
                                <option value="na">Select Person: </option> 
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<option value="."\"". $row['name'] ."\"" .">" . $row['name'] ."</option>";
                                  
                                }
                                ?>
                                 </select>
                            
                        </div>


                         <div class="clear">
                        </div>
<div class="color2">
<h1> Holes 1 - 9 </h1>

                         <div class="form-group">
                            <label for="HoleOne">
                                Hole One</label>
                            <select id="HoleOne" name="HoleOne" class="form-control" >
                                <option value="na" selected="">Select Score:</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="clear">
                        </div>

                        <div class="form-group">
                            <label for="HoleTwo">
                                Hole Two</label>
                            <select id="HoleTwo" name="HoleTwo" class="form-control" >
                                <option value="na" selected="">Select Score:</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
 <div class="clear">
                        </div>
                        <div class="form-group">
                            <label for="HoleThree">
                                Hole Three</label>
                            <select id="HoleThree" name="HoleThree" class="form-control" >
                                <option value="na" selected="">Select Score:</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
 <div class="clear">
                        </div>
                        <div class="form-group">
                            <label for="HoleFour">
                                Hole Four</label>
                            <select id="HoleFour" name="HoleFour" class="form-control" >
                                <option value="na" selected="">Select Score:</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
 <div class="clear">
                        </div>
                        <div class="form-group">
                            <label for="HoleFive">
                                Hole Fix</label>
                            <select id="HoleFive" name="HoleFive" class="form-control" >
                                <option value="na" selected="">Select Score:</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
 <div class="clear">
                        </div>
                        <div class="form-group">
                            <label for="HoleSix">
                                Hole Six</label>
                            <select id="HoleSix" name="HoleSix" class="form-control" >
                                <option value="na" selected="">Select Score:</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
 <div class="clear">
                        </div>
                        <div class="form-group">
                            <label for="HoleSeven">
                                Hole Seven</label>
                            <select id="HoleSeven" name="HoleSeven" class="form-control" >
                                <option value="na" selected="">Select Score:</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
 <div class="clear">
                        </div>
                        <div class="form-group">
                            <label for="HoleEight">
                                Hole Eight</label>
                            <select id="HoleEight" name="HoleEight" class="form-control" >
                                <option value="na" selected="">Select Score:</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
 <div class="clear">
                        </div>
                        <div class="form-group">
                            <label for="HoleNine">
                                Hole Nine</label>
                            <select id="HoleNine" name="HoleNine" class="form-control" >
                                <option value="na" selected="">Select Score:</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>
 <div class="clear">
                        </div>
                    
                    <div class="color1">
                        <h1> Holes 10 - 12 </h1>
                         <div class="form-group">
                            <label for="HoleTen">
                                Hole Ten</label>
                            <select id="HoleTen" name="HoleTen" class="form-control" >
                                <option value="na" selected="">Select Score:</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
 <div class="clear">
                        </div>
                        <div class="form-group">
                            <label for="HoleEleven">
                                Hole Eleven</label>
                            <select id="HoleEleven" name="HoleEleven" class="form-control" >
                                <option value="na" selected="">Select Score:</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
 <div class="clear">
                        </div>
                        <div class="form-group">
                            <label for="HoleTwelve">
                                Hole Twelve</label>
                            <select id="HoleTwelve" name="HoleTwelve" class="form-control" >
                                <option value="na" selected="">Select Score:</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>
 <div class="clear">
                        </div>
                        <div class="color3">
                        <h1> Holes 13 - 15 </h1>
                        <div class="form-group">
                            <label for="HoleThirteen">
                                Hole Thirteen</label>
                            <select id="HoleThirteen" name="HoleThirteen" class="form-control" >
                                <option value="na" selected="">Select Score:</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
 <div class="clear">
                        </div>
                        <div class="form-group">
                            <label for="HoleFourteen">
                                Hole Fourteen</label>
                            <select id="HoleFourteen" name="HoleFourteen" class="form-control" >
                                <option value="na" selected="">Select Score:</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
 <div class="clear">
                        </div>
                        <div class="form-group">
                            <label for="HoleFifteen">
                                Hole Fifteen</label>
                            <select id="HoleFifteen" name="HoleFifteen" class="form-control" >
                                <option value="na" selected="">Select Score:</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>
 <div class="clear">
                        </div>
                        <div class="color4">
                        <h1> Holes 16 - 18 </h1>
                        <div class="form-group">
                            <label for="HoleSixteen">
                                Hole Sixteen</label>
                            <select id="HoleSixteen" name="HoleSixteen" class="form-control" >
                                <option value="na" selected="">Select Score:</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
 <div class="clear">
                        </div>
                        <div class="form-group">
                            <label for="HoleSeventeen">
                                Hole Seventeen</label>
                            <select id="HoleSeventeen" name="HoleSeventeen" class="form-control" >
                                <option value="na" selected="">Select Score:</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
 <div class="clear">
                        </div>
                        <div class="form-group">
                            <label for="HoleEighteen">
                                Hole Eighteen</label>
                            <select id="HoleEighteen" name="HoleEighteen" class="form-control" >
                                <option value="na" selected="">Select Score:</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>
                        
 <div class="clear">
                        </div>
                     
                    
                    
                        <button type="submit" value="input_scores" name="input_scores" class="btn btn-skin pull-right" id="btnContactUs">Input Day Two Scores</button>
                
                </form>
            
        <?php
			
		if(isset($_POST['input_scores']))
		{
            $holes = $_POST['Holes'];
            $id =  $_POST['name'];
			$one =  $_POST['HoleOne'];
			$two =	$_POST['HoleTwo'];
			$three = $_POST['HoleThree'];
			$four =	$_POST['HoleFour'];
			$five =	$_POST['HoleFive'];
			$six =	$_POST['HoleSix'];
			$seven =	$_POST['HoleSeven'];
			$eight =	$_POST['HoleEight'];
			$nine =	$_POST['HoleNine'];
			$ten = 	$_POST['HoleTen'];
			$eleven =	$_POST['HoleEleven'];
			$twelve =	$_POST['HoleTwelve'];
			$thirteen = 	$_POST['HoleThirteen'];
			$fourteen =	$_POST['HoleFourteen'];
			$fifteen = $_POST['HoleFifteen'];
			$sixteen = $_POST['HoleSixteen'];
			$seventeen = $_POST['HoleSeventeen'];
			$eighteen = $_POST['HoleEighteen'];
			
            echo $HoleEighteen;




            if($holes == 1) {
                 $result = mysqli_query($con, "SELECT total, handicap, dayonenett FROM results WHERE name = '$id'");
                   $row = mysqli_fetch_array($result);
                        $total = $row['total'] + $one + $two + $three + $four + $five + $six + $seven + $eight + $nine;
                        $daytwo = $one + $two + $three + $four + $five + $six + $seven + $eight + $nine;
                        $daytwonett = $daytwo - ($row['handicap']* (1/2));
                        $totalnett = $row['dayonenett'] + $daytwonett;
             $sql = "UPDATE results SET one = '$one', two = '$two', three = '$three', four = '$four', five = '$five', six = '$six', seven = '$seven', eight = '$eight', nine = '$nine',daytwo = '$daytwo', total = '$total', daytwonett = '$daytwonett', totalnett = '$totalnett'
                    WHERE name = '$id' ";

                    if (mysqli_query($con, $sql)) {
                    echo "Holes One to Nine Added ";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($con);
                }

            }

            if($holes == 2) {
                $result = mysqli_query($con, "SELECT total, daytwo, handicap, dayonenett, daytwonett FROM results WHERE name = '$id'");
                   $row = mysqli_fetch_array($result);
                        $total = $row['total'] + $ten + $eleven + $twelve;
                        $daytwo = $row['daytwo'] + $ten + $eleven + $twelve;
                        $daytwonett = $row['daytwonett'] + $ten + $eleven + $twelve - ($row['handicap'] * (1/6));
                        $totalnett = $row['dayonenett'] + $daytwonett;
               $sql = "UPDATE results SET ten = '$ten', eleven = '$eleven', twelve= '$twelve', daytwo = '$daytwo', total = '$total', daytwonett = '$daytwonett', totalnett = '$totalnett'
                    WHERE name = '$id' ";

                    if (mysqli_query($con, $sql)) {
                    echo "Holes Ten to twelve set";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($con);
                }
            }

            if($holes == 3) {

                 $result = mysqli_query($con, "SELECT total, daytwo, handicap, dayonenett, daytwonett FROM results WHERE name = '$id' ");
                        $row = mysqli_fetch_array($result);
                        $total = $row['total'] + $thirteen + $fourteen + $fifteen;  // total gross
                         $daytwo = $row['daytwo'] + $thirteen + $fourteen + $fifteen; // total day two
                         $daytwonett = $row['daytwonett'] + $thirteen + $fourteen + $fifteen- ($row['handicap'] * (1/6));
                         $totalnett = $row['dayonenett'] + $daytwonett;
                $sql = "UPDATE results SET thirteen = '$thirteen', fourteen = '$fourteen', fifteen = '$fifteen', daytwo = '$daytwo', total = '$total', daytwonett = '$daytwonett', totalnett = '$totalnett'
                    WHERE name = '$id' ";

                    if (mysqli_query($con, $sql)) {
                    echo "Holes thirteen to fifteen updated ";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($con);
                    }
            }

            if($holes == 4) {
                echo "inside";
                $result = mysqli_query($con, "SELECT total, daytwo, handicap, daytwonett, dayonenett FROM results WHERE name = '$id'  ");
                         $row = mysqli_fetch_array($result) ;
                        $total = $row['total'] + $sixteen + $seventeen + $eighteen;
                        $daytwo = $row['daytwo'] + $sixteen + $seventeen + $eighteen;
                        $daytwonett = $row['daytwonett'] + $sixteen + $seventeen + $eighteen- ($row['handicap'] * (1/6));
                        $totalnett = $row['dayonenett'] + $daytwonett;
                $sql = "UPDATE results SET sixteen = '$sixteen', seventeen = '$seventeen', eighteen = '$eighteen', daytwo = '$daytwo', total = '$total', daytwonett = '$daytwonett', totalnett = '$totalnett'
                    WHERE name = '$id' ";

                if (mysqli_query($con, $sql)) {
                    echo "holes sixteen to eighteen added";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($con);
                }
            }

			
	
		
		
		}
		
		?>			
			
	
		
	</section>


 
</body>
</html>