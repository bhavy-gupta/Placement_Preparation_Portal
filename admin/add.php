<?php
include "db.php";
session_start();
if (isset($_POST['submit'])) {
    if (
        !empty($_POST["name"]) and !empty($_POST["company"]) and !empty($_POST["package"]) and !empty($_POST["designation"]) and !empty($_POST["contact"])
    ) {
        $un = $_SESSION['username'];
        $comp = $_POST["company"];
        $name = $_POST["name"];
        $package = $_POST["package"];
        $des = $_POST["designation"];
        $contact = $_POST["contact"];

        $sql = "INSERT INTO `alumni` (`name`, `company`, `package`, `designation`, `contact`) VALUES ('$name', '$comp', '$package', '$des', '$contact');";
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
