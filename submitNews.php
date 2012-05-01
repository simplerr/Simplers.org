<?php

session_start();
include "globals.php";

if ($_SESSION["logged_in"]) {
    // Connect.
    $con = mysql_connect($host, $username, $password);

    mysql_select_db($db_name, $con);

    // get the data
    $author = $_SESSION["name"];
    $content = $_POST["content"];
    $title = $_POST["title"];
    $date = date("j/m/y - H:i:s");

    $sql = "INSERT INTO News (Title, Content, Date, Author)
    VALUES('$title','$content','$date','$author')";

    if (!mysql_query($sql, $con)) {
        die('Error: ' . mysql_error());
    }

    mysql_close($con);

    echo "<meta http-equiv='refresh' content='0;url=news.php'> ";
}
else
    echo "You have no permisssion to be here.";
?>