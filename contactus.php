<!DOCTYPE html>
<html>
<head>
	<title>CareerRide</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/styling.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">

 
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="about.php">CareerRide</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Field
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="engineering.php">Engineering</a>
          <a class="dropdown-item" href="medical.php">Medical</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="contactus.php">Contact Us</a>
        </div>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>







	






<section class="my-5">
		<div class="container p-3 my-3 bg-dark text-white">
			<h1 class="text-center">Contact Us</h1>
		</div>

		<div class="w-50 m-auto">
			<form action="userinfo.php" method="post">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="uname" autocomplete="off" class="form-control">
				</div>
				<div class="form-group">
					<label>Email-Id</label>
					<input type="text" name="email" autocomplete="off" class="form-control">
				</div>
				<div class="form-group">
					<label>Phone No</label>
					<input type="text" name="phone" autocomplete="off" class="form-control">
				</div>
				<div class="form-group">
					<label>Comment</label>
				<textarea class="form-control" name="comment"></textarea>
				</div>

				<button type="submit" class="btn btn-success">
  <span class="spinner-border spinner-border-sm"></span>
 Submit
</button>
					
					

			</form>
		</div>
</section>

<footer>
<div class="container p-3 my-3 bg-dark text-white">
                <div class="copyright">&copy: CareerRide</div>
                <div class="contact">
                   
                 <a href="about.php">AboutUs</a>
                  
                   <a href="contactus.php">CareerWithUs/ContactUs</a>
                </div>
                <div class="clearfix"></div>
				</div>
            </footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>