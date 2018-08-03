<?php
include 'dbconnect.php';
$conn = OpenCon();

if (isset($_POST['submit'])) {
    $ProjectID = $_POST['ProjectID'];
    $TaskName = $_POST['TaskName'];
    $ItemID = $_POST['ItemID'];
    $Quantity = $_POST['Quantity'];
    $DateOrdered = $_POST['DateOrdered'];
    $DateArrival = $_POST['DateArrival'];
    $SupplierID = $_POST['SupplierID'];
    $Cost = $_POST['Cost'];

    $query_insert = "INSERT INTO constructionmanagment.orderitem (ProjectID, TaskName, ItemID, Quantity, DateOrdered, DateArrival, Cost, Supplier)  "
            . "VALUES ('$ProjectID', '$TaskName', '$ItemID', '$Quantity', '$DateOrdered', '$DateArrival', '$Cost', '$SupplierID')";

    $qry = mysqli_query($conn, $query_insert);
}
//CloseCon($conn);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>New Order</title>
    </head>
    <body>
        <h1>Make New Order</h1>
        <form method="post">
            <a href="index.php">Home</a>
            <p>ProjectID: <select name="ProjectID" />
                <?php
                $query = "SELECT ProjectID from project";
                $sql = mysqli_query($conn, $query);

                while ($rs = mysqli_fetch_array($sql)) {
                    $id = $rs["ProjectID"];
                    echo "<option> $id </option>";
                }
                ?>
                </select></p>  

            <p>Task Name: <select name="TaskName" />
                <?php
                $query_task = "SELECT DISTINCT Name FROM task";
                $sql_task = mysqli_query($conn, $query_task);

                while ($rs_task = mysqli_fetch_array($sql_task)) {
                    $name_task = $rs_task["Name"];
                    echo "<option> $name_task </option>";
                }
                ?>
                </select></p>  

            <p>ItemID: <select name="ItemID" />
                <?php
                $query_item = "SELECT ItemID FROM item";
                $sql_item = mysqli_query($conn, $query_item);

                while ($rs_item = mysqli_fetch_array($sql_item)) {
                    $id_item = $rs_item["ItemID"];
                    echo "<option> $id_item </option>";
                }
                ?>
                </select></p>  


            <p>Quantity: <input type="text" name="Quantity" /></p>

            <p>Date ordered: <input type="date" name="DateOrdered" /></p>

            <p>Date of delivery: <input type="date" name="DateArrival" /></p>

            <p>Supplier: <select name="SupplierID" />
                <?php
                $query_supplier = "SELECT SupplierID FROM supplier";
                $sql_supplier = mysqli_query($conn, $query_supplier);

                while ($rs_supplier = mysqli_fetch_array($sql_supplier)) {
                    $id_supplier = $rs_supplier["SupplierID"];
                    echo "<option> $id_supplier </option>";
                }
                ?>
                </select></p> 

            <p>Cost <input type="text" name="Cost" /></p>

            <input type="submit" name="submit" value="Submit" />
        </form>
    </body>
</html>
