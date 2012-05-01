<?php

session_start();
include "globals.php";

if ($_SESSION["logged_in"]) {
    // Connect.
    $con = mysql_connect($host, $username, $password);
    mysql_select_db($db_name, $con);

    // update eller delete?
    if ($_POST['delete']) {
        echo "Game: " . $_POST[game];
        $sql = "DELETE FROM News WHERE Id = '$_GET[id]'";
        mysql_query($sql, $con);
    } else if ($_POST['update']) {
        $sql = "UPDATE News SET Title='$_POST[title]', Content='$_POST[content]' WHERE Id ='$_GET[id]'";

        mysql_query($sql, $con);
    }
    echo "<meta http-equiv='refresh' content='0;url=news.php'> ";
}
else
    echo "You have no permisssion to be here.";
?>
