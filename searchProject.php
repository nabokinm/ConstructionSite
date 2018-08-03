<?php
include 'dbconnect.php';
$conn = OpenCon();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Search page</title>
    </head>
    <body>
        <h1>Search Project</h1>
        <a href="index.php">Home</a>
        <form method="post" action="searchProjectResult.php">
            <p>Name: <input type="text" name="Name" /></p>  
            <p>Status: 
                <select name="Status" />
            <option value=""></option>
            <option value="not started">Not started</option>
            <option value="in progress">In progress</option>
            <option value="completed">Completed</option>
        </select>
    </p>
    <p>Budget:   higher than <input type="text" name="higherThan" /> and lower than <input type="text" name="lowerThan" /></p>
    <p>Started Date: <input type="date" name="StartDate" /></p>
    <input type="submit" name="search" value="Search" />
    <input type="submit" name="viewAll" value="View All" />
</form>
</body>
</html>
