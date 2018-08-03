<?php
include 'dbconnect.php';
$conn = OpenCon();

if (isset($_POST['submit'])) {
    $userName = $_POST['userName'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO constructionmanagment.clients (userName, firstName, lastName, email, password)  "
            . "VALUES ('$userName', '$firstName', '$lastName', '$email', '$password')";
    $qry = mysqli_query($conn, $query);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign Up Client</title>
    </head>
    <body>
        <h1>Sign Up Client</h1>
        <a href="index.php">Home</a>

        <form name="submit" method="post">
            <p>User name: <input type="text" name="userName" /></p>  
            <p>First name: <input type="text" name="firstName" /></p>  
            <p>Last name: <input type="text" name="lastName" /></p> 
            <p>Email: <input type="text" name="email" /></p> 
            <p>Password: <input type="password" name="password" /></p> 
            <input type="submit" name="submit" value="Register" />
        </form>
    </body>
</html>
