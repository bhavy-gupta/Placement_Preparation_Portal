<?php
include "db.php";
?>
</form>
<table border="1" align="center">
    <tr>
        <th>Sno.</th>
        <th>Difficulty Level</th>
        <th>Question</th>
        <th>Option-1</th>
        <th>Option-2</th>
        <th>Option-3</th>
        <th>Option-4</th>
        <th>Correct Answer</th>
        <th>Companies</th>
    </tr>
    <?php
    $sql = "SELECT * FROM `qna` WHERE 1;";
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
        echo $row["difficulty"];
        echo "</td>";
        echo "<td>";
        echo $row["ques"];
        echo "</td>";
        echo "<td>";
        echo $row["opt1"];
        echo "</td>";
        echo "<td>";
        echo $row["opt2"];
        echo "</td>";
        echo "<td>";
        echo $row["opt3"];
        echo "</td>";
        echo "<td>";
        echo $row["opt4"];
        echo "</td>";
        echo "<td>";
        echo $row["rans"];
        echo "</td>";
        echo "<td>";
        echo $row["cname"];
        echo "</td>";
    }
    ?>

    </th>
</table>
</form>