<?php session_start(); 
include "globals.php"?>

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
                    <h2>Login</h2>
                    <div id="login_box">
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <?php
                                            // Redirect to the admin page if already logged in.
                                            if($_SESSION["logged_in"])
                                            {
                                                echo "<meta http-equiv='refresh' content='0;url=admin.php'>";
                                            }
                                            else
                                            {
                                                if($_GET['status'] == "bad")
                                                    echo "<p class='red'>Bad login, try again.</p>";
                                                else if($_GET['status'] == "logged_out")
                                                    echo "<p class='green'>You were successfully logged out.</p>";

                                                echo '<form action="login.php" method="post">
                                                <p id="center_para">
                                                Username <br><input size =50 type="text" name="username" /><br>
                                                Password <br><input size =50 type="password" name="password" /><br>
                                                <input type="submit" value="Login"/>
                                                </p>
                                                </form>';
                                            }
                                        ?>
                                    <td>
                                </tr>
                            </tbody>
                        </table>  
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
