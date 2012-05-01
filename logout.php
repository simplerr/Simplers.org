<?php session_start(); 
    $_SESSION["logged_in"] = false;
    echo "<meta http-equiv='refresh' content='0;url=login_screen.php?status=logged_out'>";
?>
