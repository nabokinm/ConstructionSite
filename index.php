<?php
include 'dbconnect.php';
$conn = OpenCon();
echo "Connected Successfully";
//CloseCon($conn);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Main page</title>
    </head>
    <body>
    
        <h1>Welcome</h1>
        <p>
            <a href="aboutUs.php">About Us</a>
            <a href="loginClient.php">Client</a>
            <a href="loginUser.php">Company user</a>
        </p>
    </body>
</html>
