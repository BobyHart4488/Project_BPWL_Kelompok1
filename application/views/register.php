<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Create new account | El' Mio</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/favicon.ico">
	<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <!-- Template -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/graindashboard.css">
</head>

<body class="">

    <main class="main">

    	<div class="content">
		
			<div class="container-fluid pb-5">

				<div class="row justify-content-md-center">
					<div class="card-wrapper col-12 col-md-4 mt-5">
						<div class="brand text-center mb-3">
							<a href="#"><img src="<?php echo base_url() ?>assets/img/logo.png"></a>
						</div>
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Create new account</h4>
								<form action="<?php echo base_url() ?>Elmio/aksi_register" method="POST">
			
									<div class="form-group">
										<label for="name">Name</label>
										<input type="text" class="form-control" id="nama" name="nama" required="" autofocus="">
									</div>

									<div class="form-group">
										<label for="email">Buat ID</label>
										<input id="text" type="text" class="form-control" name="id" required="" placeholder="Buat tanda P- dilanjutkan dengan angka">
									</div>

									<div class="form-row mb-4">
										<div class="form-group col-md-6">
											<label for="password">Password
											</label>
											<input id="password" type="password" class="form-control" name="password" required="">
										</div>
										<div class="form-group col-md-6">
											<label for="password-confirm">Confirm Password
											</label>
											<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="">
										</div>
									</div>


									<div class="form-group no-margin">
										<input type="submit" class="btn btn-primary btn-block  rounded-pill" name="register" value= "Register">
									</div>
									<div class="dropdown-divider"></div>
									<!--
									<div class="form-group no-margin">
										<a href="" class="btn btn-google btn-block rounded-pill">
											<i class="gd-google align-middle mr-2"></i>  Google
										</a>
										<a href="" class="btn btn-facebook btn-block rounded-pill">
											<i class="gd-facebook align-middle mr-2"></i>  Facebook
										</a>
									</div>
									-->
									<div class="text-center mt-3 small">
										Already have an account? <a href="../views">Login</a>
									</div>
								</form>
							</div>
						</div>
						<footer class="footer mt-3">
							<div class="container-fluid">
								<div class="footer-content text-center small">
									<span class="text-muted">&copy; 2019 Graindashboard. All Rights Reserved.</span>
								</div>
							</div>
						</footer>
					</div>
				</div>
			</div>
    	</div>
    </main>


	<script src="<?php echo base_url() ?>assets/js/graindashboard.js"></script>
    <script src="<?php echo base_url() ?>assets/js/graindashboard.vendor.js"></script>
    
</body>
</html>