<?php
include "admin/db.php";
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title> P3 - Placement Preparation Portal </title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">P3</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#About">About</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Company Details
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="https://en.wikipedia.org/wiki/Wipro">Wipro</a></li>
							<li><a class="dropdown-item" href="https://en.wikipedia.org/wiki/Infosys">Infosys</a></li>
							<li><a class="dropdown-item" href="https://en.wikipedia.org/wiki/TCS">TCS </a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Sample Papers
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="">Wipro</a></li>
							<li><a class="dropdown-item" href="">Infosys</a></li>
							<li><a class="dropdown-item" href="#">TCS </a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="drives.php">Ongoing / UpComing Drives </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#Contact Us">Contact Us</a>
					</li>

				</ul>
				<!--
				<div class="mx-2">
					<button type="button" class="btn btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#Login_Modal">Login</button>
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Sign_Up_Modal">Sign Up</button>
				</div>
-->
			</div>
		</div>
	</nav>
	<!--Login Modal -->
	<!--
	<div class="modal fade" id="Login_Modal" tabindex="-1" aria-labelledby="Login_ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="Login ModalLabel">Login to your P3 Portal</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<label for="exampleFormControlInput1" class="form-label">UserName</label>
					<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Username"><br>
					<label for="exampleFormControlInput1" class="form-label">Password</label>
					<input type="Password" class="form-control" id="exampleFormControlInput1" placeholder="Password"><br>


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</div>
	</div>
-->
	<!--Sign Up Modal -->
	<!--
	<div class="modal fade" id="Sign_Up_Modal" tabindex="-1" aria-labelledby="Sign_Up_ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="Sign Up ModalLabel">Sign Up</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">

					<label for="exampleFormControlInput1" class="form-label">Name</label>
					<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name"><br>
					<label for="exampleFormControlInput1" class="form-label">Enter Your Email</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Type your Email"><br>
					<label for="exampleFormControlInput1" class="form-label">Enter your University Roll</label>
					<input type="number" class="form-control" id="exampleFormControlInput1" placeholder="University Roll"><br>
					<label for="exampleFormControlInput1" class="form-label">Password</label>
					<input type="Password" class="form-control" id="exampleFormControlInput1" placeholder="Password"><br>
					<label for="cexampleFormControlInput1" class="form-label"> Confirm Password</label>
					<input type="Password" class="form-control" id="cexampleFormControlInput1" placeholder="Confirm Password"><br>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Sign Up </button>
				</div>
			</div>
		</div>
	</div>
-->
	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="assets/slide-1.jfif" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h2>Drives </h2>
					<p> Company names and Details, Bond & Interview</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="assets/slide-2.jfif" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h2> Previous Papers </h2>
					<p>Previous year question papers of companies, Interview Questions</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="assets/slide-3.jfif" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h2>Contact with Alumni's</h2>
					<p>Can contact with alumni's and clear their doubts </p>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<div class="container my-5">

		<div class="row featurette ">
			<div class="col-md-7 order-md-2">
				<div id="About"></div>
				<h2 class="featurette-heading">About <span class="text-muted"></span></h2>
				<p class="lead">
					We are here to provide complete details about company</p>
				<p> Here there you'll get :-</p>
				<p> -> Recuitment Process</p>
				<p> -> Eligibility Criteria</p>
				<p> -> Bond , Terms and Conditions</p>
				<p> -> No. of employees working in a company</p>


			</div>
			<div class="col-md-5 order-md-1">
				<img src="assets/about2.jpg" alt="">


			</div>
		</div>
		<div class="row featurette my-5">
			<div class="col-md-7 order-md-1">
				<div id="About"></div>
				<h2 class="featurette-heading"> Aptitude / Interview Questions <span class="text-muted"></span></h2>
				<p class="lead"> Here students can Practice from previous years question papers and they'll get all previously asked interview questions which will help them enhancing their communication skills and how to reply those answers. </p>
				<p> -> Placement Papers</p>
				<p> -> Group Discussion</p>
				<p> -> HR interview</p>
				<p> -> Technical Interview</p>
			</div>
			<div class="col-md-5 order-md-2">
				<img src="assets/about4.jpg" alt="">

			</div>
		</div>
		<div class="row featurette">
			<div class="col-md-7 order-md-2">
				<div id="About"></div>
				<h2 class="featurette-heading"> Drives Ongoing / Upcoming <span class="text-muted"></span></h2>
				<p class="lead"> Students can look which drive is ongoing and which companies were about to come </p>
				<p> -> Ongoing Drives</p>
				<p> -> Upcoming Drives</p>
				<p> -> Contact with Alumni's</p>
			</div>
			<div class="col-md-5 order-md-1">
				<img src="assets/about3.jpg" alt="">
			</div>
		</div>
	</div>
	<div class="mb-3">
		<div id="Contact Us">
			<h2>Contact Us!!!</h2>
		</div>
		<label for="exampleFormControlInput1" class="form-label">Name</label>
		<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name"><br>
		<label for="exampleFormControlInput1" class="form-label">Enter Your Email</label>
		<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Type your Email"><br>
	</div>
	<div>

		<label for="exampleFormControlInput1" class="form-label">Select from Menu </label>
		<select class="form-select" aria-label="Default select example">
			<option selected>Open this select menu</option>
			<option value="1">About Companies</option>
			<option value="2"> Aptitude / Interview Question </option>
			<option value="3">Drives Ongoing / Upcoming</option>
		</select><br>
	</div>
	<div class="mb-3">
		<label for="exampleFormControlTextarea1" class="form-label">Tell Us Your Problem</label>
		<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea><br>
		<button type="button" class="btn btn-primary">Submit </button>
	</div>

	<footer class="py-3 my-4">

		<p class="text-center text-muted">?? 2021 Made with ?????? by G17</p>
	</footer>







	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>