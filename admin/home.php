<?php
session_start();
$usname = $_SESSION['user'];
?>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#newJob").click(function() {
                $("#contents").load("CreateJob.php");
            });
            $("#viewJob").click(function() {
                $("#contents").load("showJob.php");
            });
            $("#addCompany").click(function() {
                $("#contents").load("addCompany.php");
            });
            $("#viewCompany").click(function() {
                $("#contents").load("viewCompany.php");
            });
            $("#addAlumni").click(function() {
                $("#contents").load("addAlumni.php");
            });
            $("#viewAlumni").click(function() {
                $("#contents").load("viewAlumni.php");
            });
            $("#addQuestions").click(function() {
                $("#contents").load("addQuestions.php");
            });
            $("#viewQuestions").click(function() {
                $("#contents").load("viewQuestions.php");
            });

            $("#ChangePwd").click(function() {
                $("#contents").load("chngpwd.php");
            });
        });
    </script>
</head>

<body>
    <link href="style.css" rel="stylesheet" type="text/css">
    <div class="container">
        <div class="top-menu">
            Placement Preparation Portal
        </div>

        <div class="clearfix">
            <div class="left-menu">
                <div class="listItem">Welcome <?php echo $usname; ?></div>
                <div class="listItem"><a id="newJob" href="#"> Create a New Job</a></div>
                <div class="listItem"><a id="viewJob" href="#"> View Jobs</a></div>
                <div class="listItem"><a id="addCompany" href="#"> Add Company Details</a></div>
                <div class="listItem"><a id="viewCompany" href="#">View Company Details</a></div>
                <div class="listItem"><a id="addAlumni" href="#"> Add a New Alumni</a></div>
                <div class="listItem"><a id="viewAlumni" href="#"> View Alumnis</a></div>
                <div class="listItem"><a id="addQuestions" href="#"> Add Questions</a></div>
                <div class="listItem"><a id="viewQuestions" href="#"> View Questions</a></div>
                <div class="listItem"><a id="ChangePwd" href="#">Change password</div>
                <div class="listItem"><button onclick="clickMe()"> Logout </button></div>
            </div>

            <div class="dataform">
                <div class="form-data" id="contents">

                </div>
            </div>
        </div>
    </div>
    <script>
        function clickMe() {
            <?php
            //session_destroy(); 
            ?>
            alert('Logout successful');
            window.location.replace("http://localhost/Projects/MiniProject/Placement_Preparation_Portal/admin/");
        }
    </script>
</body>

</html>