<?php
include "admin/db.php";
?>
<table border="1">
    <tr>
        <th>Sno</th>
        <th>Company Name</th>
        <th>Approx Working Employees</th>
        <th>Batch</th>
        <th>Venue</th>
        <th>Reporting date</th>
        <th>Criteria</th>
        <th>Designation</th>
        <th>Profile</th>
        <th>Location</th>
        <th>Salary</th>
        <th>Bond</th>
        <th>Terms & Conditions</th>
        <th>Key Skills</th>
        <th>Procedure</th>
    </tr>
    <?php
    $qry = "SELECT * FROM `recruitment`;";
    $i = 1;
    $recset = mysqli_query($conn, $qry);
    while ($row = mysqli_fetch_array($recset)) {
        if ($i % 2 == 0) {
            echo "<tr bgcolor='#ffccff'><td>";
        } else {
            echo "<tr bgcolor='#ff99ff'><td>";
        }
        $i++;
        echo $row["sno"];
        echo "</td>";
        echo "<td>";
        echo $row["company_name"];
        echo "</td>";
        echo "<td>";
        echo $row["app_emp"];
        echo "</td>";
        echo "<td>";
        echo $row["batch"];
        echo "</td>";
        echo "<td>";
        echo $row["venue"];
        echo "</td>";
        echo "<td>";
        echo $row["report_time_date"];
        echo "</td>";
        echo "<td>";
        echo $row["criteria"];
        echo "</td>";
        echo "<td>";
        echo $row["designation"];
        echo "</td>";
        echo "<td>";
        echo $row["profile"];
        echo "</td>";
        echo "<td>";
        echo $row["location"];
        echo "</td>";
        echo "<td>";
        echo $row["salary"];
        echo "</td>";
        echo "<td>";
        echo $row["bond"];
        echo "</td>";
        echo "<td>";
        echo $row["tnc"];
        echo "</td>";
        echo "<td>";
        echo $row["key_skills"];
        echo "</td>";
        echo "<td>";
        echo $row["procedure"];
        echo "</td>";


        echo "</tr>";
    }
    ?>
    </th>
</table>
</form>