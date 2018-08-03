
<?php

include 'dbconnect.php';
$conn = OpenCon();


$name = $_POST['Name'];
$Status = $_POST['Status'];
$higherThan = $_POST['higherThan'];
$lowerThan = $_POST['lowerThan'];
$StartDate = $_POST['StartDate'];

if (isset($_POST['search'])) {


    if (strlen($name) > 0) {
        if (strlen($Status) > 0) {
            $sql_projectID = "SELECT * FROM project WHERE Name LIKE '%" . $_POST['Name'] . "%' AND Status = '" . $Status . "'";
        } else if (strlen($higherThan) > 0 && strlen($lowerThan) > 0) {
            $sql_projectID = "SELECT * FROM project WHERE Name LIKE '%" . $_POST['Name'] . "%' AND AmountAllocated >= '" . $higherThan . "' AND AmountAllocated <= '" . $lowerThan . "' ";
        } else if (strlen($StartDate) > 0) {
            $sql_projectID = "SELECT * FROM project WHERE Name LIKE '%" . $_POST['Name'] . "%' AND StartDate > '" . $StartDate . "'";
        } else if ((strlen($Status) > 0) && (strlen($higherThan) > 0) && (strlen($lowerThan) > 0)) {
            $sql_projectID = "SELECT * FROM project WHERE Name LIKE '%" . $_POST['Name'] . "%' AND AmountAllocated >= '" . $higherThan . "' AND AmountAllocated <= '" . $lowerThan . "' AND Status = '" . $Status . "'";
        } else if ((strlen($Status) > 0) && (strlen($StartDate) > 0)) {
            $sql_projectID = "SELECT * FROM project WHERE Name LIKE '%" . $_POST['Name'] . "%' AND StartDate > '" . $StartDate . "' AND Status = '" . $Status . "'";
        } else if ((strlen($StartDate) > 0) && (strlen($higherThan) > 0) && (strlen($lowerThan) > 0)) {
            $sql_projectID = "SELECT * FROM project WHERE Name LIKE '%" . $_POST['Name'] . "%' AND AmountAllocated >= '" . $higherThan . "' AND AmountAllocated <= '" . $lowerThan . "' AND StartDate > '" . $StartDate . "'";
        } else if ((strlen($Status) > 0) && (strlen($higherThan) > 0) && (strlen($lowerThan) > 0) && (strlen($StartDate) > 0)) {
            $sql_projectID = "SELECT * FROM project WHERE Name LIKE '%" . $_POST['Name'] . "%' AND AmountAllocated >= '" . $higherThan . "' AND AmountAllocated <= '" . $lowerThan . "' AND StartDate > '" . $StartDate . "' AND Status = '" . $Status . "'";
        } else {
            $sql_projectID = "SELECT * FROM project WHERE Name LIKE '%" . $_POST['Name'] . "%' LIMIT 0 , 1";
        }


        if ($result_name = mysqli_query($conn, $sql_projectID)) {
            if (mysqli_num_rows($result_name) > 0) {
                echo "<table>";
                echo "<tr>";
                echo "<th>Project ID</th>";
                echo "<th>Name</th>";
                echo "<th>Description</th>";
                echo "<th>Status</th>";
                echo "<th>Start Date</th>";
                echo "<th>End Date</th>";
                echo "<th>Amount Allocated</th>";
                echo "<th>Estimated Cost</th>";
                echo "<th>Actual Cost</th>";

                echo "</tr>";
                while ($row = mysqli_fetch_array($result_name)) {
                    echo "<tr>";
                    echo "<td>" . $row['ProjectID'] . "</td>";
                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<td>" . $row['Description'] . "</td>";
                    echo "<td>" . $row['Status'] . "</td>";
                    echo "<td>" . $row['StartDate'] . "</td>";
                    echo "<td>" . $row['EndDate'] . "</td>";
                    echo "<td>" . $row['AmountAllocated'] . "</td>";
                    echo "<td>" . $row['EstimatedCost'] . "</td>";
                    echo "<td>" . $row['ActualCost'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                // Free result set
                mysqli_free_result($result_name);
            } else {
                echo "No records matching your query were found.";
            }
        }
    } else if ((strlen($name) == 0) && (strlen($Status) > 0)) {

        if (strlen($higherThan) > 0 && strlen($lowerThan) > 0) {
            $sql_status = "SELECT * FROM project WHERE Status = '" . $Status . "' AND AmountAllocated >= '" . $higherThan . "' AND AmountAllocated <= '" . $lowerThan . "' ";
        } else if (strlen($StartDate) > 0) {
            $sql_status = "SELECT * FROM project WHERE Status = '" . $Status . "' AND StartDate > '" . $StartDate . "' ";
        } else if ((strlen($higherThan) > 0) && (strlen($lowerThan) > 0) && (strlen($StartDate) > 0)) {
            $sql_status = "SELECT * FROM project WHERE Status = '" . $Status . "' AND AmountAllocated >= '" . $higherThan . "' AND AmountAllocated <= '" . $lowerThan . "' AND StartDate > '" . $StartDate . "' ";
        } else {
            $sql_status = "SELECT * FROM project WHERE Status = '" . $Status . "'";
        }

        if ($result_status = mysqli_query($conn, $sql_status)) {
            if (mysqli_num_rows($result_status) > 0) {
                echo "<table>";
                echo "<tr>";
                echo "<th>Project ID</th>";
                echo "<th>Name</th>";
                echo "<th>Description</th>";
                echo "<th>Status</th>";
                echo "<th>Start Date</th>";
                echo "<th>End Date</th>";
                echo "<th>Amount Allocated</th>";
                echo "<th>Estimated Cost</th>";
                echo "<th>Actual Cost</th>";
                echo "</tr>";
                while ($row = mysqli_fetch_array($result_status)) {
                    echo "<tr>";
                    echo "<td>" . $row['ProjectID'] . "</td>";
                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<td>" . $row['Description'] . "</td>";
                    echo "<td>" . $row['Status'] . "</td>";
                    echo "<td>" . $row['StartDate'] . "</td>";
                    echo "<td>" . $row['EndDate'] . "</td>";
                    echo "<td>" . $row['AmountAllocated'] . "</td>";
                    echo "<td>" . $row['EstimatedCost'] . "</td>";
                    echo "<td>" . $row['ActualCost'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                // Free result set
                mysqli_free_result($result_status);
            } else {
                echo "No records matching your query were found.";
            }
        }
    } else if ((strlen($name) == 0) && (strlen($Status) == 0) && (strlen($higherThan) > 0) && (strlen($lowerThan) > 0)) {

        if (strlen($StartDate) > 0) {
            $sql_budget = "SELECT * FROM project WHERE AmountAllocated >= '" . $higherThan . "' AND AmountAllocated <= '" . $lowerThan . "' AND StartDate > '" . $StartDate . "' ";
        } else {
            $sql_budget = "SELECT * FROM project WHERE AmountAllocated >= '" . $higherThan . "' AND AmountAllocated <= '" . $lowerThan . "' ";
        }


        if ($result_budget = mysqli_query($conn, $sql_budget)) {
            if (mysqli_num_rows($result_budget) > 0) {
                echo "<table>";
                echo "<tr>";
                echo "<th>Project ID</th>";
                echo "<th>Name</th>";
                echo "<th>Description</th>";
                echo "<th>Status</th>";
                echo "<th>Start Date</th>";
                echo "<th>End Date</th>";
                echo "<th>Amount Allocated</th>";
                echo "<th>Estimated Cost</th>";
                echo "<th>Actual Cost</th>";
                echo "</tr>";
                while ($row = mysqli_fetch_array($result_budget)) {
                    echo "<tr>";
                    echo "<td>" . $row['ProjectID'] . "</td>";
                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<td>" . $row['Description'] . "</td>";
                    echo "<td>" . $row['Status'] . "</td>";
                    echo "<td>" . $row['StartDate'] . "</td>";
                    echo "<td>" . $row['EndDate'] . "</td>";
                    echo "<td>" . $row['AmountAllocated'] . "</td>";
                    echo "<td>" . $row['EstimatedCost'] . "</td>";
                    echo "<td>" . $row['ActualCost'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                // Free result set
                mysqli_free_result($result_budget);
            } else {
                echo "No records matching your query were found.";
            }
        }
    } else if ((strlen($name) == 0) && (strlen($Status) == 0) && (strlen($higherThan) == 0) && (strlen($lowerThan) == 0) && (strlen($StartDate) > 0)) {
        $sql_date = "SELECT * FROM project WHERE StartDate > '" . $StartDate . "'";
        if ($result_date = mysqli_query($conn, $sql_date)) {
            if (mysqli_num_rows($result_date) > 0) {
                echo "<table>";
                echo "<tr>";
                echo "<th>Project ID</th>";
                echo "<th>Name</th>";
                echo "<th>Description</th>";
                echo "<th>Status</th>";
                echo "<th>Start Date</th>";
                echo "<th>End Date</th>";
                echo "<th>Amount Allocated</th>";
                echo "<th>Estimated Cost</th>";
                echo "<th>Actual Cost</th>";
                echo "</tr>";
                while ($row = mysqli_fetch_array($result_date)) {
                    echo "<tr>";
                    echo "<td>" . $row['ProjectID'] . "</td>";
                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<td>" . $row['Description'] . "</td>";
                    echo "<td>" . $row['Status'] . "</td>";
                    echo "<td>" . $row['StartDate'] . "</td>";
                    echo "<td>" . $row['EndDate'] . "</td>";
                    echo "<td>" . $row['AmountAllocated'] . "</td>";
                    echo "<td>" . $row['EstimatedCost'] . "</td>";
                    echo "<td>" . $row['ActualCost'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                // Free result set
                mysqli_free_result($result_date);
            } else {
                echo "No records matching your query were found.";
            }
        }
    }
}
if (isset($_POST['viewAll'])) {
    $sql_all = "SELECT * FROM project";
    if ($result_all = mysqli_query($conn, $sql_all)) {
        if (mysqli_num_rows($result_all) > 0) {
            echo "<table>";
            echo "<tr>";
            echo "<th>Project ID</th>";
            echo "<th>Name</th>";
            echo "<th>Description</th>";
            echo "<th>Status</th>";
            echo "<th>Start Date</th>";
            echo "<th>End Date</th>";
            echo "<th>Amount Allocated</th>";
            echo "<th>Estimated Cost</th>";
            echo "<th>Actual Cost</th>";
            echo "</tr>";
            while ($row = mysqli_fetch_array($result_all)) {
                echo "<tr>";
                echo "<td>" . $row['ProjectID'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Description'] . "</td>";
                echo "<td>" . $row['Status'] . "</td>";
                echo "<td>" . $row['StartDate'] . "</td>";
                echo "<td>" . $row['EndDate'] . "</td>";
                echo "<td>" . $row['AmountAllocated'] . "</td>";
                echo "<td>" . $row['EstimatedCost'] . "</td>";
                echo "<td>" . $row['ActualCost'] . "</td>";
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


