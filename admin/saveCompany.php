<?php
include "db.php";
session_start();
if (isset($_POST['submit'])) {
    if (
        !empty($_POST["company"]) and !empty($_POST["app_emp"]) and !empty($_POST["hq"]) and !empty($_POST["client"]) and !empty($_POST["record"]) and !empty($_POST["branch"]) and !empty($_POST["alum"]) and !empty($_POST["cperson"]) and !empty($_POST["tnc"]) and !empty($_POST["skills"]) and !empty($_POST["procedure"])
    ) {
        $comp = $_POST["company"];
        $app_emp = $_POST["app_emp"];
        $hq = $_POST["hq"];
        $client = $_POST["client"];
        $record = $_POST["record"];
        $branch = $_POST["branch"];
        $alum = $_POST["alum"];
        $cperson = $_POST["cperson"];
        $tnc = $_POST["tnc"];
        $skills = $_POST["skills"];
        $procedure = $_POST["procedure"];

        $sql = "INSERT INTO `company` (`name`, `app_emp`, `hq`, `client`, `record`, `branch`, `alum`, `cperson`, `tnc`, `skills`, `procedure`) VALUES ('$comp', '$app_emp', '$hq', '$client', '$record', '$branch', '$alum', '$cperson', '$tnc', '$skills', '$procedure');";
        $res = mysqli_query($conn, $sql);
        echo mysqli_error($conn);
        if ($res == true) {
            //echo $qry;
            echo "<script>alert('Data saved');</script>";
            header('refresh:0;url=http://localhost/Projects/MiniProject/Placement_Preparation_Portal/admin/home.php');
        } else {
            //echo $qry;
            echo "<script>alert('could not save data');</script>";
            header('refresh:0;url=http://localhost/Projects/MiniProject/Placement_Preparation_Portal/admin/home.php');
        }
    } else {
        echo "<script>alert('fields cannot be left empty');</script>";
        header('refresh:0;url=http://localhost/Projects/MiniProject/Placement_Preparation_Portal/admin/home.php');
    }
}
