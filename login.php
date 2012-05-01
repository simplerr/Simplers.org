<?php
include "globals.php";
session_start();
?>

<?php
    // connect
    $con = mysql_connect($host, $username, $password);
    if(!$con)
        echo "<p class = test>Couldn't connect to server<br></p>";
    else
        // echo "<p class = test>Connected to server<br></p>";
?>  

<?php
    mysql_select_db($db_name,$con);

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql ="SELECT *FROM Users WHERE Username = '$username' AND Password = '$password'";

    $result = mysql_query($sql,$con);
    $count = mysql_num_rows($result);

    if($count > 0)  {
        $_SESSION["logged_in"] = true;
        $_SESSION["name"] = $username;
        echo "<meta http-equiv='refresh' content='0;url=admin.php'> ";
    }
    else {                              
        $_SESSION["logged_in"] = false;
        echo "<meta http-equiv='refresh' content='0;url=login_screen.php?status=bad'>";
   }  
?>

      