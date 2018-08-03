<?php
session_start();
if (!$_SESSION['constructionmanagment']) {
    header('location:loginUser.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>User Main page</title>
    </head>
    <body>
        <h1>User Main Page</h1>
        <a href="index.php">Home</a>
        <p>
            <a href="searchProject.php">Search for a project</a>
            <a href="addNewProject.php">Add new project</a>
            <a href="makeNewOrder.php">Make a new order</a>
            <a href="searchOrder.php">Search for an order</a>
            <a href="supplier.php">Suppliers</a>
        </p>

    </body>
</html>
