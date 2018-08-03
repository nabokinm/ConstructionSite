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
        <title>Search Order</title>
    </head>
    <body>
        <h1>Search for an Order</h1>
        <a href="index.php">Home</a>
        <form method="post" action="searchOrderResult.php">
            
            <p>&nbsp;</p>
            <p>Search by Project ID </p>
            <p>ProjectID: <select name="ProjectID" />
                <?php
                $query_projectID = "SELECT ProjectID from project";
                $sql_projectID = mysqli_query($conn, $query_projectID);

                while ($rs_projectID = mysqli_fetch_array($sql_projectID)) {
                    $projectID = $rs_projectID["ProjectID"];
                    echo "<option> $projectID </option>";
                }
                ?>
                </select></p> 

            <input type="submit" name="search_projectID" value="Search" />
            
            
            
            <p>&nbsp;</p>
            <p>Search by Date of Order </p>
            <p>Date ordered: <input type="date" name="DateOrdered" /></p>
            <input type="submit" name="search_dateOrdered" value="Search" />
             
           
            
            
            <p>&nbsp;</p>
            <p>Search by Date of Delivery </p>
            <p>Date of delivery: <input type="date" name="DateArrival" /></p>
            <input type="submit" name="search_dateArrival" value="Search" />
            
            
            
            
            <p>&nbsp;</p>
            <p>Search by Supplier </p>
            <p>Supplier: <select name="supplierName" />
                <?php
                $query_supplierName = "SELECT Name from supplier";
                $sql_supplierName = mysqli_query($conn, $query_supplierName);

                while ($rs_supplierName = mysqli_fetch_array($sql_supplierName)) {
                    $supplierName = $rs_supplierName["Name"];
                    echo "<option> $supplierName </option>";
                }
                ?>
                </select></p> 

            <input type="submit" name="search_supplier" value="Search" />
            
            <input type="submit" name="viewAll" value="View All" />
        </form>
    </body>
</html>
