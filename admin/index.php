<?php
include 'db.php';
session_start();
?>
<html>

<body>
    <link href="style.css" rel="stylesheet" type="text/css">
    <div class="container">
        <div class="top-menu">
            Placement Preparation Portal
        </div>
        <form method="post">
            <div class="loginblock">
                <center>
                    <font style="font-size:20px; font-weight:bold;"> Admin Login</font><br><br><br><br>
                    User Name:<input type="string" name="uname"><br><br>
                    Password:<input type="password" name="pwd"><br><br>
                    <input type="submit" name="submit" name="submit"><br><br><br>
                </center>
            </div>
        </form>
    </div>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $usname = $_POST['uname'];
    $pwd = $_POST['pwd'];
    $sql = "SELECT sno from adlogin where ad_usname='$usname' and ad_pwd='$pwd'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $_SESSION['user'] = $usname;

        header("location: home.php");
    } else {
        echo '<script>
            alert("Your Login Name or Password is invalid")
        </script>';
    }
}
?>