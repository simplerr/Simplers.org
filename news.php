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
        include "globals.php";  
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
                    <h2>News</h2>

                    <?php
                    // Selected the database and send the query.
                    mysql_select_db($db_name, $con);
                    $sql = "SELECT * FROM News ORDER BY Id DESC";
                    $result = mysql_query($sql);

                    // Loop through all rows.
                    while ($row = mysql_fetch_array($result)) {
                        echo "<div id='content_box'>";
                        echo "<h3>" . $row['Title'] . "</h3>";
                        echo $row['Content'];
                        echo "<p class='author'>Posted by " . $row['Author'] . " " . $row['Date'] . "</p>";
                        echo "</div>";
                    }
                    ?>
                </div>
                <div id="middle">

                </div>
            </div>
            <div id="footer">
                <p>Copyright © 2011 Axel Blackert</p>
            </div>
    </body>
</html>
