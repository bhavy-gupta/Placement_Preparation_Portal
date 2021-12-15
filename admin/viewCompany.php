<?php
include "db.php";
?>
<table border="1" align="center">
    <tr>
        <th>Sno.</th>
        <th>Company Name</th>
        <th>Approx Working Employees</th>
        <th>Headquater</th>
        <th>Client</th>
        <th>Record</th>
        <th>Branch</th>
        <th>alumni's</th>
        <th>Contact Person</th>
        <th>terms & conditions</th>
        <th>Skills</th>
        <th>Rounds</th>
    </tr>
    <?php
    $sql = "SELECT * FROM `company` WHERE 1;";
    $i = 1;
    $res = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($res)) {
        if ($i % 2 == 0) {
            echo "<tr bgcolor='#ffccff'><td>";
        } else {
            echo "<tr bgcolor='#ff99ff'><td>";
        }
        $i++;
        echo $row["sno"];
        echo "</td>";
        echo "<td>";
        echo $row["name"];
        echo "</td>";
        echo "<td>";
        echo $row["app_emp"];
        echo "</td>";
        echo "<td>";
        echo $row["hq"];
        echo "</td>";
        echo "<td>";
        echo $row["client"];
        echo "</td>";
        echo "<td>";
        echo $row["record"];
        echo "</td>";
        echo "<td>";
        echo $row["branch"];
        echo "</td>";
        echo "<td>";
        echo $row["alum"];
        echo "</td>";
        echo "<td>";
        echo $row["cperson"];
        echo "</td>";
        echo "<td>";
        echo $row["tnc"];
        echo "</td>";
        echo "<td>";
        echo $row["skills"];
        echo "</td>";
        echo "<td>";
        echo $row["procedure"];
        echo "</td>";
    }
    ?> </th>
</table>
</form>