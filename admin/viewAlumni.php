<?php
include "db.php";
?>
<table border="1" align="center">
    <tr>
        <th>Sno.</th>
        <th>Name</th>
        <th>Placed Company</th>
        <th>Package</th>
        <th>Designation</th>
        <th>contact</th>
    </tr>
    <?php
    $sql = "SELECT * FROM `alumni` WHERE 1;";
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
        echo $row["company"];
        echo "</td>";
        echo "<td>";
        echo $row["package"];
        echo "</td>";
        echo "<td>";
        echo $row["designation"];
        echo "</td>";
        echo "<td>";
        echo $row["contact"];
        echo "</td>";
    }
    ?>

    </th>
</table>
</form>