<?php
include "db.php";
session_start();
if (isset($_POST['submit'])) {
    if (
        !empty($_POST["company"]) and !empty($_POST["app_emp"]) and !empty($_POST["batch"]) and !empty($_POST["date"]) and !empty($_POST["venue"]) and !empty($_POST["criteria"]) and !empty($_POST["designation"]) and !empty($_POST["profile"])
        and !empty($_POST["location"]) and !empty($_POST["salary"]) and !empty($_POST["bond"]) and !empty($_POST["tnc"])
        and !empty($_POST["skills"]) and !empty($_POST["procedure"])
    ) {
        $un = $_SESSION['username'];
        $comp = $_POST["company"];
        $emp = $_POST["app_emp"];
        $batch = $_POST["batch"];
        $originalDate = $_POST['date'];
        $newDate = date("YYYY-mm-dd", strtotime($originalDate));
        $venue = $_POST["venue"];
        $criteria = $_POST["criteria"];
        $des = $_POST["designation"];
        $profile = $_POST["profile"];
        $location = $_POST["location"];
        $salary = $_POST["salary"];
        $bond = $_POST["bond"];
        $tnc = $_POST["tnc"];
        $skills = $_POST["skills"];
        $procedure = $_POST["procedure"];

        $sql = "INSERT INTO `recruitment` (`company_name`, `app_emp`, `batch`, `venue`, `criteria`, `designation`, `profile`, `location`, `salary`, `bond`, `tnc`, `key_skills`, `procedure`) VALUES 
        ('$comp', '$emp', '$batch', '$venue', '$criteria', '$des', '$profile', '$location', '$salary', '$bond', '$tnc', '$skills', '$procedure');";

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
?>