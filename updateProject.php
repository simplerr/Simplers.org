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
        $sql = "DELETE FROM Projects WHERE Id = '$_GET[id]'";
        mysql_query($sql, $con);
    } else if ($_POST['update']) {
        $sql = "UPDATE Projects SET Title='$_POST[title]', Description='$_POST[description]', Image='$_POST[image]', Link='$_POST[link]' WHERE Id ='$_GET[id]'";

        if(!mysql_query($sql, $con))
                echo "asdasd";
        echo "<br>";
        echo $_POST[title];
        echo "<br>";
        echo "id: ".$_GET[id];
    }
    echo "<meta http-equiv='refresh' content='0;url=projects.php'> ";
}
else
    echo "You have no permisssion to be here.";
?>
