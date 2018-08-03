<?php
include 'dbconnect.php';
$conn = OpenCon();

if (isset($_POST['add'])) {
    $Name = $_POST['Name'];
    $ContactInfo = $_POST['ContactInfo'];

    $query = "INSERT INTO constructionmanagment.supplier (Name, ContactInfo) VALUES ('$Name', '$ContactInfo')";
    $qry = mysqli_query($conn, $query);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Supplier</title>
    </head>
    <body>
        <h1>Suppliers</h1>
        <a href="index.php">Home</a>
        <form method="post">
            <p>Name: <select name="Name" />

                </select></p>

            <input type="submit" name="submit" value="Search" />
        </form>

        <p>Add new supplier</p>

        <form name="add" method="post">
            <p>Name: <input type="text" name="Name" /></p>
            <p>Contact information: <input type="text" name="ContactInfo" /></p>

            <input type="submit" name="add" value="Add" />
        </form>


    </body>
</html>
