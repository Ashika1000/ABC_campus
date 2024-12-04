<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!--Boostrap Icons-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

	<!--My Style-->
	<link rel="stylesheet" href="css/login-style.css">

	<!--Favicon-->
	<link rel="apple-touch-icon" sizes="180x180" href="image/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="image/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="image/favicon/favicon-16x16.png">
	<link rel="manifest" href="image/favicon/site.webmanifest">

    <title>Register</title>
  </head>
  <body>
    
	<!--Navigation-->
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color:white;">
		<div class="container-fluid">
			<table width="100%">
				<tr>
					<td width="100px"><a class="navbar-brand" href="#"><img src="image/logo.png" width="70px"></a></td>
					<td width="auto" align="center">
					</td>
					<td width="50px">
					</td>
					<td width="50px"></i></td>
					<td width="50px"></td>
				</tr>
			</table>
		</div>
	</nav>
	
	<div class="container">
		<div class="row mt-4">
			<div class="col-md-3">
			</div>		
			<div class="col-md-6">
				<!--Empty card-->
				<div class="card">
					<div class="card-body p-5">
						<center><img src="image/logo.png" width="70px" height="70px"></center>

						<!--error message-->
						<br>
						<center>
						<?php
							if (isset($_GET['msg']) && trim($_GET['msg']) !== '') {
						?>
						<div class="alert alert-danger" role="alert">
							<?php echo htmlspecialchars($_GET['msg']); ?>
						</div>
						<?php
							}
						?>
						</center>
			
						<!--Form tag-->
						<form action="register_process.php" method="POST">
						
							<!--First name-->
							<div class="mb-3">
							<label for="FirstName" class="form-label">First Name</label>
							<input type="text" name="FirstName" class="form-control" id="FirstName" required>
							</div>
							
							<!--Last name-->
							<div class="mb-3">
							<label for="LastName" class="form-label">Last Name</label>
							<input type="text" name="LastName" class="form-control" id="LastName" required>
							</div>
							
							<!--Email-->
							<div class="mb-3">
							<label for="Email" class="form-label">E-mail</label>
							<input type="email" name="Email" class="form-control" id="Email" placeholder="name@example.com" required>
							</div>
							
							<!--Password-->
							<div class="mb-3">
							<label for="Password" class="form-label">Password</label>
							<input type="Password" name="Password" class="form-control" id="Password" required>
							</div>
							
							<!--Confirm password-->
							<div class="mb-3">
							<label for="ConfirmPassword" class="form-label">Confirm Password</label>
							<input type="password" name="ConfirmPassword" class="form-control" id="ConfirmPassword" required>
							</div>
							
							<!--submit button-->
							<input type="submit" name="Submit" class="btn btn-success" value="Register">
							
						</form>
					
						<br>
					
						<a href="login.php"> <p>Login here</p> </a>
						<a href="index.php"> <i class="bi bi-arrow-left back-icon"></i> </a>
						
				 	 </div>
				</div>
			</div>
		</div>
	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
  </body>
</html>