<?php
include 'dbconnect.php';
$conn = OpenCon();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];


    $query = "INSERT INTO constructionmanagment.user (name, password) VALUES ('$name', '$password')";
    $qry = mysqli_query($conn, $query);
}
CloseCon($conn);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign Up User</title>
    </head>
    <body>
        <h1>Sign Up User</h1>
        <a href="index.php">Home</a>
        <form name="submit" method="post">
            <p>User name: <input type="text" name="name" /></p>  
            <p>Password: <input type="password" name="password" /></p> 
            <input type="submit" name="submit" value="Register" />
        </form>
    </body>
</html>
