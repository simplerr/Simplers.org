<?php session_start();
    
    include 'globals.php';
    // connect to server and select databse.
    $con = mysql_connect("$host", "$username", "$password");

    mysql_select_db("$db_name", $con);

    $user = $_POST["username"];
    $pass = $_POST["password"];
    $mail = $_POST["mail"];
    
    if($user == '' || $pass == '' || $mail == '')   {
        echo "<meta http-equiv='refresh' content='0;url=register.php?status=bad'> ";
    }
    else    {
        $sql = "INSERT INTO Users (Name, Password, Mail) VALUES ('$user', '$pass', '$mail')";
        mysql_query($sql, $con);
        echo "<meta http-equiv='refresh' content='0;url=register.php?status=ok'> ";
    }

  
?>