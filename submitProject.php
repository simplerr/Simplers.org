<?php

session_start();
include "globals.php";
if ($_SESSION["logged_in"]) {
    // Connect.
    $con = mysql_connect($host, $username, $password);

    mysql_select_db($db_name, $con);

    // Get the data.
    $title = $_POST["title"];
    $description = $_POST["description"];
    $date = $_POST["date"];
    $image = $_POST["image"];
    $link = $_POST["link"];

    $sql = "INSERT INTO Projects (Title, Image, Description, Link, Date)
    VALUES('$title','$image','$description','$link', '$date')";

    if (!mysql_query($sql, $con)) {
        die('Error: ' . mysql_error());
    }

    mysql_close($con);

    echo "<meta http-equiv='refresh' content='0;url=projects.php'> ";
}
else
    echo "You have no permisssion to be here.";
?>