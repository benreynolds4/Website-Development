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
                width: 20%;
                height: 50px;
                float: right;
                margin-top: 10px;
                margin-right: 15px;
                color: black;
            }

            .buttonLeft {
              width: 40%;
              height: 50px;
              border: 1px black solid;
              float: left;
              border-radius: 5px;
              text-align: center;
            }

            .buttonRight {
              width: 40%;
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
        <h1> David Geoghans Captains Prize 2015 | Day One </h1>

    </div>

    <div class="buttons">
            <a href="dayone.php"><div class="buttonLeft">
              <br>Day 1 Input
            </div></a>
            <a href="results.php"> <div class="buttonRight">
              <br>Day 2 Scores 
            </div> </a>
    </div>
</section>

<p>powered by 3Bit Designs</p>





        <?php
                            
                                    $result = mysqli_query($con, "SELECT * FROM results ORDER BY total asc ") or die('Unable to run query:' . mysqli_error($con));
                                    echo "<table>";
                                    
                                     echo "<tr>";
                                       echo "<td class=\"one\"><b> NAME ( HANDICAP )</b></td>";
                                       echo "<td class=\"two\"> Gross </td>"; 
                                       echo "<td  class=\"one\"> Nett</td>";  
                                      echo "</tr>";                                    





                                    while ($row = mysqli_fetch_array($result)) {
                                  

                                       echo "<tr>";
                                       echo "<td  class=\"one\"><b>". $row['name'] . " (" . $row['handicap'] . ")" . "</b></td>";
                                       echo  "<td  class=\"two\">".$row['total']."</td>";
                                       echo "<td  class=\"one\">".$row['totalnett']."</td>"; 
 
                                      echo "</tr>";


                                        }
                                    echo "</table>";
                            ?>

    
    
    

  
 


	</section>


 
</body>
</html>