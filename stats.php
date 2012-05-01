<!DOCTYPE html>
<?php
include 'globals.php';
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css" />          <!-- Overall styling !-->
        <link rel="stylesheet" type="text/css" href="slide_style.css" />    <!-- Image slider styling !-->
        <title></title>
    </head>
    <body>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="functions.js"></script>                      

        <img src="imgs/big_bkgd.png" id="bg" alt="">

        <div id="wrapper">
            <div id="head">
                <div id="title">
                    <h1><a href="index.php">Page of Simpler</a></h1>
                </div>

                <div id="head_menu">
                    <a href ="index.php" class="menu_item">Home</a>
                    <a href ="projects.php" class="menu_item">Projects</a>
                    <a href ="news.php" class="menu_item">News</a>
                    <a href ="about.php" class="menu_item">About</a>
                    <a href ="bugs.php" class="menu_item">Bugs</a>
                    <a href ="stats.php" class="menu_item">Stats</a>
                    <a href ="login_screen.php" class="menu_item">Admin</a>
                </div>
            </div>

            <div id="main">
                <div id="top">
                    <h2>Stats</h2>
                    <div id="content_box">
                        <div id="stats_table"">
                            <div id="row_header">
                                <div id="rank_cell">Rank</div><div id="name_cell">Name</div> <div id="win_cell">Wins</div> <div id="loss_cell">Losses</div>
                            </div>
                            &nbsp;todo..
                        </div>

                        <?php
                        // connect to server and select database
                        /* $con = mysql_connect("$host", "$username", "$password");
                          mysql_select_db("$db_name", $con);

                          $sql = "SELECT * FROM Users ORDER BY Wins DESC";
                          $result = mysql_query($sql);

                          $i = 0;
                          while($row = mysql_fetch_array($result))
                          {
                          if($i % 2 == 0)
                          {
                          echo "<div id=row1>";
                          echo "<div id=rank_cell>".($i+1)."</div>";
                          echo "<div id=name_cell>".$row['Name']."</div>";
                          echo "<div id=win_cell>".$row['Wins']."</div>";
                          echo "<div id=loss_cell>".$row['Losses']."</div>";
                          echo "</div>";
                          }
                          else
                          {
                          echo "<div id=row2>";
                          echo "<div id=rank_cell>".($i+1)."</div>";
                          echo "<div id=name_cell>".$row['Name']."</div>";
                          echo "<div id=win_cell>".$row['Wins']."</div>";
                          echo "<div id=loss_cell>".$row['Losses']."</div>";
                          echo "</div>";
                          }

                          $i++;
                          } */
                        ?>
                        <div id="about_stats">
                            To the left you can see the rankings for Banzai.<br>
                            You need to play on an registered account to be on this list.<br><br>
                            Registering is done in-game and you can download the game <br>
                            from the <a class="read_more" href="projects.php">download section</a>.<br><br>

                            If you quickly want to find out how many wins and losses your opponent<br> have
                            just write /stats in the chat.<br><br>


                            Good luck playing!
                            </br>
                        </div>
                    </div>
                </div> 

                <div id="middle">

                </div>
            </div>
            <div id="footer">
                <p>Copyright © 2011 Axel Blackert</p>
            </div>
        </div>
    </body>
</html>
