<?php
include 'dbconnect.php';
$conn = OpenCon();

if (isset($_POST['submit'])) {
    $Name = $_POST['Name'];
    $Description = $_POST['Description'];
    $Status = $_POST['Status'];
    $StartDate = $_POST['StartDate'];
    $EndDate = $_POST['EndDate'];
    $AmountAllocated = $_POST['AmountAllocated'];
    $EstimatedCost = $_POST['EstimatedCost'];
    $ActualCost = $_POST['ActualCost'];

    $query = "INSERT INTO constructionmanagment.project (Name, Description, Status, StartDate, EndDate, AmountAllocated, EstimatedCost, ActualCost)  "
            . "VALUES ('$Name', '$Description', '$Status', '$StartDate', '$EndDate', '$AmountAllocated', '$EstimatedCost', '$ActualCost')";
    $qry = mysqli_query($conn, $query);
}
CloseCon($conn);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add new project</title>
    </head>
    <body>
        <h1>Add New Project</h1>
        <a href="index.php">Home</a>
        <form name="submit" method="post">
            <p>Name: <input type="text" name="Name" /></p>  
            <p>Description: <textarea name="Description" cols=60 rows=5></textarea></p>
            <p>Status: 
                <select name="Status" />
            <option value="not started">Not started</option>
            <option value="in progress">In progress</option>
            <option value="completed">Completed</option>
        </select>
    </p>
    <p>Start Date: <input type="date" name="StartDate" /></p>
    <p>End Date: <input type="date" name="EndDate" /></p>
    <p>Budget: <input type="text" name="AmountAllocated" /></p>
    <p>Estimated Cost: <input type="text" name="EstimatedCost" /></p>
    <p>Actual Cost: <input type="text" name="ActualCost" /></p>
    <input type="submit" name="submit" value="Submit" />
</form>
</body> 



</html>
