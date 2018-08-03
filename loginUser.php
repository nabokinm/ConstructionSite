<?php
include 'dbconnect.php';
$conn = OpenCon();
if (isset($_POST['login'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $query = "SELECT * FROM User WHERE UserName='$name' AND Password='$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['constructionmanagment'] = true;
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
        <title>User Login Page</title>
    </head>
    <body>

        <h1>Welcome user</h1>
        <a href="index.php">Home</a>
        <a href="registerUser.php">Register</a>

        <form name="login" method="post">
            <p>Username <input name="name" type="text"></p>
            <p>Password <input name="password" type="password"></p>
            <p><input type="submit" name="login" value="Submit"></p>
        </form>

    </body>
</html>
