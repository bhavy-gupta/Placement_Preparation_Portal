<?php
include "db.php";
session_start();
if (isset($_POST['submit'])) {
    if (
        !empty($_POST["diff"]) and !empty($_POST["ques"]) and !empty($_POST["opt1"]) and !empty($_POST["opt2"]) and !empty($_POST["opt3"]) and !empty($_POST["opt4"]) and !empty($_POST["rans"]) and !empty($_POST["comp"])
    ) {
        $un = $_SESSION['username'];
        $comp = $_POST["company"];
        $diff = $_POST["diff"];
        $ques = $_POST["ques"];
        $opt1 = $_POST["opt1"];
        $opt2 = $_POST["opt2"];
        $opt3 = $_POST["opt3"];
        $opt4 = $_POST["opt4"];
        $rans = $_POST["rans"];

        $sql = "INSERT INTO `qna` (`difficulty`, `ques`, `opt1`, `opt2`, `opt3`, `opt4`, `rans`, `cname`) VALUES ('$diff', '$ques', '$opt1', '$opt2', '$opt3', '$opt4', '$rans', '$comp');";
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
