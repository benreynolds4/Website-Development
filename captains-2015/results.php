<!DOCTYPE html>
<html lang="en">
<head>

    <title>Results</title>
    <style>

            body {
                background: url("banner.jpg") no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }

            table {
                width: 100%;
                border: 1px black solid;
            }

            .one {
                background-color:rgba(209, 203, 27, 0.5);
                color: black;
            }

            .two {
                
                background-color:rgba(255, 247, 0, 0.5);
                color: black;
            }

             tr {
                text-align: center;
            }

            td {
                text-align: center;
            }

            .header {
                width: 100%;
                height: 70px;
                background-color:rgba(209, 203, 27, 0.5);
                margin-bottom: 10px;
                margin-top: 0px;
                padding: 10px;
                border: 1px black solid;
            }

            .headerLeft {
                width: 40%;
                height: 50px;
                float: left;
            }

              .buttons {
                width: 30%;
                height: 50px;
                float: right;
                margin-top: 10px;
                margin-right: 15px;
                color: black;
            }

            .buttonLeft {
              width: 30%;
              height: 50px;
              border: 1px black solid;
              float: left;
              border-radius: 5px;
              text-align: center;
            }

            .buttonRight {
              width: 30%;
              height: 50px;
              border: 1px black solid;
              float: right;
              border-radius: 5px;
              text-align: center;
            }

            a {
              color: black;
            }
    </style>

</head>


<body>

<?php
include 'connection.php';
?>
<section class="header">
    <div class="headerLeft">
        <h1> David Geoghans Captains Prize 2015 | Day Two </h1>

    </div>

    <div class="buttons">
             <a href="dayonescores.php"> <div class="buttonLeft">
              <br>Day 1 Scores 
            </div> </a>
            <a href="input_scores.php"><div class="buttonRight">
              <br>Day 2 Input
            </div></a>
           <a href="dayone.php"> <div class="buttonRight">
              <br>Day 1 Input
            </div> </a>
           
    </div>
</section>
<h2> Please Note Scores May be inaccurate </h2>
<p>Powered by 3Bit Designs</p>


        <?php
                            
                                    $result = mysqli_query($con, "SELECT * FROM results ORDER BY totalnett asc ") or die('Unable to run query:' . mysqli_error($con));
                                    echo "<table>";
                                    
                                     echo "<tr>";
                                       echo "<td class=\"one\"><b> NAME ( HANDICAP )</b></td>";
                                       echo "<td  class=\"two\"> &nbsp1</td>"; 
                                       echo "<td  class=\"one\"> &nbsp2</td>"; 
                                       echo "<td class=\"two\"> &nbsp3</td>"; 
                                       echo "<td  class=\"one\"> &nbsp4</td>"; 
                                       echo "<td class=\"two\"> &nbsp5</td>"; 
                                       echo "<td  class=\"one\"> &nbsp6</td>"; 
                                       echo "<td class=\"two\"> &nbsp7</td>"; 
                                       echo "<td  class=\"one\"> &nbsp8</td>"; 
                                       echo "<td class=\"two\"> &nbsp9</td>"; 
                                       echo "<td  class=\"one\"> 10</td>"; 
                                       echo "<td class=\"two\"> 11</td>"; 
                                       echo "<td  class=\"one\"> 12</td>"; 
                                       echo "<td class=\"two\"> 13</td>"; 
                                       echo "<td  class=\"one\"> 14</td>"; 
                                       echo "<td class=\"two\"> 15</td>"; 
                                       echo "<td  class=\"one\"> 16</td>"; 
                                       echo "<td class=\"two\"> 17</td>"; 
                                       echo "<td  class=\"one\"> 18</td>"; 
                                       echo "<td class=\"two\"> Gross Day 1 </td>"; 
                                       echo "<td  class=\"one\"> Gross Day 2</td>"; 
                                       echo "<td class=\"two\"> Gross Total</td>"; 
                                       echo "<td class=\"one\"> Nett Day One </td>"; 
                                       echo "<td  class=\"two\"> Nett Day Two</td>"; 
                                       echo "<td class=\"one\"> Nett Total</td>"; 
                                      echo "</tr>";                                    





                                    while ($row = mysqli_fetch_array($result)) {
                                       
                                        

                                       echo "<tr>";
                                       echo "<td  class=\"one\"><b>". $row['name'] . " (" . $row['handicap'] . ")" . "</b></td>";
                                       echo "<td  class=\"two\">" . $row['one'] ."</td>"; 
                                       echo "<td  class=\"one\">".$row['two']."</td>"; 
                                       echo "<td  class=\"two\">" .$row['three']."</td>"; 
                                       echo "<td  class=\"one\">".$row['four']."</td>"; 
                                       echo "<td  class=\"two\">".$row['five']."</td>"; 
                                       echo "<td  class=\"one\">".$row['six']."</td>"; 
                                       echo "<td  class=\"two\">".$row['seven']."</td>"; 
                                       echo "<td  class=\"one\">".$row['eight']."</td>"; 
                                       echo "<td  class=\"two\">".$row['nine']."</td>"; 
                                       echo "<td  class=\"one\">".$row['ten']."</td>"; 
                                       echo "<td  class=\"two\">".$row['eleven']."</td>"; 
                                       echo "<td  class=\"one\">".$row['twelve']."</td>"; 
                                       echo "<td  class=\"two\">".$row['thirteen']."</td>"; 
                                       echo "<td  class=\"one\">".$row['fourteen']."</td>"; 
                                       echo "<td  class=\"two\">".$row['fifteen']."</td>"; 
                                       echo "<td  class=\"one\">".$row['sixteen']."</td>"; 
                                       echo "<td  class=\"two\">".$row['seventeen']."</td>"; 
                                       echo "<td  class=\"one\">".$row['eighteen']."</td>"; 
                                       echo "<td  class=\"two\">".$row['dayone']."</td>"; 
                                       echo "<td  class=\"one\">".$row['daytwo']."</td>"; 
                                       echo "<td  class=\"two\">".$row['total']."</td>"; 
                                       echo "<td  class=\"one\">".$row['dayonenett']."</td>"; 
                                       echo "<td  class=\"two\">".$row['daytwonett']."</td>"; 
                                       echo "<td  class=\"one\">".$row['totalnett']."</td>"; 
                                      echo "</tr>";


                                        }
                                    echo "</table>";
                            ?>

    
    
    

  
 


	</section>


 
</body>
</html>