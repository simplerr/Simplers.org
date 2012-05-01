<?php
session_start();
include "globals.php"
?>
<!DOCTYPE html>


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

        <?php
        // Connect.
        $con = mysql_connect($host, $username, $password);
        ?>

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
                    <h2>Edit news</h2>
                    <div id="content_box">
                        <?php
                        // Logged in?
                        if ($_SESSION['logged_in']) {
                            // Show list of all news.
                            if ($_GET['status'] == "browsing") {
                                // Selected the database and send the query.
                                mysql_select_db("simplersnet", $con);
                                $sql = "SELECT * FROM News ORDER BY Id DESC";
                                $result = mysql_query($sql);

                                // Loop through all rows.
                                while ($row = mysql_fetch_array($result)) {
                                    echo "<h4><a href=editNews.php?status=editing&id=" . $row['Id'] . ">" . $row['Title'] . "</a></h4>";
                                }
                            } else if ($_GET['status'] == "editing") {
                                // Selected the database and send the query.
                                mysql_select_db("simplersnet", $con);
                                $sql = "SELECT * FROM News WHERE Id='$_GET[id]'";
                                $result = mysql_query($sql);

                                $row = mysql_fetch_array($result);

                                echo '<form action="updateNews.php?id=' . $_GET[id] . '" method="post">
                                <p id="center_para">
                                Title <br><input size=50 name="title" MAXLENGTH="30" value=' . '"' . $row['Title'] . '"' . '></input><br>
                                Content <br><textarea cols=80 rows=20 name="content">' . $row['Content'] . '</textarea><br>
                                <input type="submit" name=update value="Update"/>
                                <input type="submit" name=delete value="Delete"/>
                                </p>
                                </form>';
                            }
                        }
                        else
                            echo "<p class='red'>You are not an admin.</p>";
                        ?>
                    </div>
                </div>
                <div id="footer">
                    <p>Copyright © 2011 Axel Blackert</p>
                </div>
            </div>
    </body>
</html>

