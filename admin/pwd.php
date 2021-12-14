<?php
include 'db.php';
session_start();
$sid = $_SESSION['user'];

if (isset($_POST['submit'])) {
    echo "fds";
    $opwd = $_POST['oldpwd'];
    $npwd = $_POST['newpwd'];
    $cnpwd = $_POST['cnewpwd'];
    if ($npwd != $cnpwd) {
        echo "<script>alert('password do not match');</script>";
        header('refresh:0;url=http://localhost/Projects/MiniProject/Placement_Preparation_Portal/admin/');
    } else {
        $qry = "update adlogin set ad_pwd='$npwd' where ad_usname='$sid'";

        if (mysqli_query($conn, $qry) == true) {

            echo "<script>alert('password updated');</script>";
            header('refresh:0;url=http://localhost/Projects/MiniProject/Placement_Preparation_Portal/admin/');
        } else {
            echo $qry;
            echo "<script>alert('could not update password');</script>";
            header('refresh:0;url=http://localhost/Projects/MiniProject/Placement_Preparation_Portal/admin/');
        }
    }
}
