<?php
// Header ------------------------------------
$title = 'Add Project';
include './__header.php';
?>

<div class="form_a">
    <button class=" w3-input w3-button w3-light-grey" style="text-align: left" onclick="document.location.href='UserMainPage.php'"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</button>

    <div class="w3-container  w3-blue" >
        <h2><i class="fa fa-search" aria-hidden="true"></i>
            Add a Project</h2>
    </div>
    <div style="margin: 30px"></div>
    <form  class="w3-container" method="post" action="addProjectResult.php">
        <p><input  class="w3-input"  type="text" name="Name" placeholder="Name" /></p>  
        <p><input  class="w3-input"  type="text" name="Description" placeholder="Description" /></p> 
        <p><select  class="w3-input"  name="Status" />
        <option value="">Status</option>
        <option value="not started">Not started</option>
        <option value="in progress">In progress</option>
        <option value="completed">Completed</option>
        </select>
        </p>
        <p><input  class="w3-input"  type="text" name="AmountAllocated" placeholder="Amount Allocated" /></p>
        <p><input  class="w3-input"  type="text" name="EstimatedCost" placeholder="Estimated Cost" /></p>
        <p style="color: #bbb">Start Date<input  class="w3-input datetator"  type="date" name="StartDate" /></p>
        <p style="color: #bbb">End Date<input  class="w3-input datetator"  type="date" name="EndDate" /></p>
        <div style="margin: 70px"></div>


        <input  class="w3-input"  type="submit" name="add" value="Add" />
        <div style="margin: 10px"></div>

    </form>
    <div style="margin: 15px"></div>


</div>


<?php
// Footer ------------------------------------
include './__footer.php';
?>