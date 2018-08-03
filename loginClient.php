<?php
include 'dbconnect.php';
$conn = OpenCon();
if (isset($_POST['login'])) {
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $query = "SELECT * FROM clients WHERE userName='$userName' AND password='$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['client'] = true;
        header('location:UserMainPage.php');
    } else {
        echo "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Client Login Page</title>
    </head>
    <body>

        <h1>Welcome client</h1>
        <a href="index.php">Home</a>
        <a href="registerClient.php">Register</a>

        <form name="login" method="post">
            <p>Username <input name="userName" type="text"></p>
            <p>Password <input name="password" type="password"></p>
            <p><input type="submit" name="login" value="Submit"></p>
        </form>

    </body>
</html>
