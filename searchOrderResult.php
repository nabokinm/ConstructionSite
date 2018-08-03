<?php

include 'dbconnect.php';
$conn = OpenCon();

$ProjectID = $_POST['ProjectID'];
$DateOrdered = $_POST['DateOrdered'];
$DateArrival = $_POST['DateArrival'];
$supplierName = $_POST['supplierName'];

if (isset($_POST['search_projectID'])) {

    $sql_projectID = "SELECT * FROM orderitem WHERE ProjectID = '" . $ProjectID . "' ";

    if ($result_projectID = mysqli_query($conn, $sql_projectID)) {
        if (mysqli_num_rows($result_projectID) > 0) {
            echo "<table>";
            echo "<tr>";
            echo "<th>Project ID</th>";
            echo "<th>Task Name</th>";
            echo "<th>Order Number</th>";
            echo "<th>Item ID</th>";
            echo "<th>Quantity</th>";
            echo "<th>Date of order</th>";
            echo "<th>Date of arrival</th>";
            echo "<th>Cost</th>";
            echo "<th>Supplier</th>";

            echo "</tr>";
            while ($row = mysqli_fetch_array($result_projectID)) {
                echo "<tr>";
                echo "<td>" . $row['ProjectID'] . "</td>";
                echo "<td>" . $row['TaskName'] . "</td>";
                echo "<td>" . $row['OrderNumber'] . "</td>";
                echo "<td>" . $row['ItemID'] . "</td>";
                echo "<td>" . $row['Quantity'] . "</td>";
                echo "<td>" . $row['DateOrdered'] . "</td>";
                echo "<td>" . $row['DateArrival'] . "</td>";
                echo "<td>" . $row['Cost'] . "</td>";
                echo "<td>" . $row['Supplier'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            // Free result set
            mysqli_free_result($result_projectID);
        } else {
            echo "No records matching your query were found.";
        }
    }
}

if (isset($_POST['search_dateOrdered'])) {

    $sql_dateOrdered = "SELECT * FROM orderitem WHERE DateOrdered = '" . $DateOrdered . "' ";

    if ($result_dateOrdered = mysqli_query($conn, $sql_dateOrdered)) {
        if (mysqli_num_rows($result_dateOrdered) > 0) {
            echo "<table>";
            echo "<tr>";
            echo "<th>Project ID</th>";
            echo "<th>Task Name</th>";
            echo "<th>Order Number</th>";
            echo "<th>Item ID</th>";
            echo "<th>Quantity</th>";
            echo "<th>Date of order</th>";
            echo "<th>Date of arrival</th>";
            echo "<th>Cost</th>";
            echo "<th>Supplier</th>";

            echo "</tr>";
            while ($row = mysqli_fetch_array($result_dateOrdered)) {
                echo "<tr>";
                echo "<td>" . $row['ProjectID'] . "</td>";
                echo "<td>" . $row['TaskName'] . "</td>";
                echo "<td>" . $row['OrderNumber'] . "</td>";
                echo "<td>" . $row['ItemID'] . "</td>";
                echo "<td>" . $row['Quantity'] . "</td>";
                echo "<td>" . $row['DateOrdered'] . "</td>";
                echo "<td>" . $row['DateArrival'] . "</td>";
                echo "<td>" . $row['Cost'] . "</td>";
                echo "<td>" . $row['Supplier'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            // Free result set
            mysqli_free_result($result_dateOrdered);
        } else {
            echo "No records matching your query were found.";
        }
    }
}

if (isset($_POST['search_dateArrival'])) {

    $sql_dateArrival = "SELECT * FROM orderitem WHERE DateArrival = '" . $DateArrival . "' ";

    if ($result_dateArrival = mysqli_query($conn, $sql_dateArrival)) {
        if (mysqli_num_rows($result_dateArrival) > 0) {
            echo "<table>";
            echo "<tr>";
            echo "<th>Project ID</th>";
            echo "<th>Task Name</th>";
            echo "<th>Order Number</th>";
            echo "<th>Item ID</th>";
            echo "<th>Quantity</th>";
            echo "<th>Date of order</th>";
            echo "<th>Date of arrival</th>";
            echo "<th>Cost</th>";
            echo "<th>Supplier</th>";

            echo "</tr>";
            while ($row = mysqli_fetch_array($result_dateArrival)) {
                echo "<tr>";
                echo "<td>" . $row['ProjectID'] . "</td>";
                echo "<td>" . $row['TaskName'] . "</td>";
                echo "<td>" . $row['OrderNumber'] . "</td>";
                echo "<td>" . $row['ItemID'] . "</td>";
                echo "<td>" . $row['Quantity'] . "</td>";
                echo "<td>" . $row['DateOrdered'] . "</td>";
                echo "<td>" . $row['DateArrival'] . "</td>";
                echo "<td>" . $row['Cost'] . "</td>";
                echo "<td>" . $row['Supplier'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            // Free result set
            mysqli_free_result($result_dateArrival);
        } else {
            echo "No records matching your query were found.";
        }
    }
}

if (isset($_POST['search_supplier'])) {

    $sql_supplier = "SELECT * FROM orderitem, supplier WHERE supplier.Name = '" . $supplierName . "'  AND supplier.SupplierID = orderitem.Supplier";

    if ($result_supplier = mysqli_query($conn, $sql_supplier)) {
        if (mysqli_num_rows($result_supplier) > 0) {
            echo "<table>";
            echo "<tr>";
            echo "<th>Project ID</th>";
            echo "<th>Task Name</th>";
            echo "<th>Order Number</th>";
            echo "<th>Item ID</th>";
            echo "<th>Quantity</th>";
            echo "<th>Date of order</th>";
            echo "<th>Date of arrival</th>";
            echo "<th>Cost</th>";
            echo "<th>Supplier</th>";

            echo "</tr>";
            while ($row = mysqli_fetch_array($result_supplier)) {
                echo "<tr>";
                echo "<td>" . $row['ProjectID'] . "</td>";
                echo "<td>" . $row['TaskName'] . "</td>";
                echo "<td>" . $row['OrderNumber'] . "</td>";
                echo "<td>" . $row['ItemID'] . "</td>";
                echo "<td>" . $row['Quantity'] . "</td>";
                echo "<td>" . $row['DateOrdered'] . "</td>";
                echo "<td>" . $row['DateArrival'] . "</td>";
                echo "<td>" . $row['Cost'] . "</td>";
                echo "<td>" . $row['Supplier'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            // Free result set
            mysqli_free_result($result_supplier);
        } else {
            echo "No records matching your query were found.";
        }
    }
}

if (isset($_POST['viewAll'])) {
    $sql_all = "SELECT * FROM orderitem";
    if ($result_all = mysqli_query($conn, $sql_all)) {
        if (mysqli_num_rows($result_all) > 0) {
            echo "<table>";
            echo "<tr>";
            echo "<th>Project ID</th>";
            echo "<th>Task Name</th>";
            echo "<th>Order Number</th>";
            echo "<th>Item ID</th>";
            echo "<th>Quantity</th>";
            echo "<th>Date of order</th>";
            echo "<th>Date of arrival</th>";
            echo "<th>Cost</th>";
            echo "<th>Supplier</th>";

            echo "</tr>";
            while ($row_all = mysqli_fetch_array($result_all)) {
                echo "<tr>";
                echo "<td>" . $row_all['ProjectID'] . "</td>";
                echo "<td>" . $row_all['TaskName'] . "</td>";
                echo "<td>" . $row_all['OrderNumber'] . "</td>";
                echo "<td>" . $row_all['ItemID'] . "</td>";
                echo "<td>" . $row_all['Quantity'] . "</td>";
                echo "<td>" . $row_all['DateOrdered'] . "</td>";
                echo "<td>" . $row_all['DateArrival'] . "</td>";
                echo "<td>" . $row_all['Cost'] . "</td>";
                echo "<td>" . $row_all['Supplier'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            // Free result set
            mysqli_free_result($result_all);
        } else {
            echo "No records matching your query were found.";
        }
    }
}

CloseCon($conn);
?>


