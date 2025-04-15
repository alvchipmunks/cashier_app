<!DOCTYPE html>
<html>
<head>
	<title>Kasir Vitamingyu</title>
	<link rel="../assets/icon/favicon-16x16.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
		body {
			background-color: #DCDCDC;
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.container {
			max-width: 900px;
			width: 100%;
		}
		.card {
			background-color: #dcdcdc;
			border:1px solid #C0C0C0;
		}
		.btn-pink {
			background-color: #A9A9A9;
			border-color: #696969;
			color: white;
		}
		.btn-pink:hover {
			background-color: #696969;
			border-color: #778899;
		}
		.form-control:focus {
			border-color: #A9A9A9;
			box-shadow: 0 0 0 0.2rem rgba(54, 54, 54, 0.25);
		}
		.alert-pink {
			background-color: #DCDCDC;
			color: #778899;
			border: 1px solid #696969;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="card shadow">
			<div class="row">
				<div class="col-md-6">
					<div class="card-body">
						<h3 class="text-center mt-4 mb-4">Silahkan Masukan Username dan Password</h3>
						<?php 
						if(isset($_GET['pesan']) && $_GET['pesan']=="gagal"){
							echo "<div class='alert alert-pink'>Username dan Password tidak sesuai!</div>";
						}
						?>
						<form method="post" action="cek_login.php">
							<div class="form-group mb-3">
								<label for="username">Username</label>
								<input type="text" id="username" class="form-control" name="username" required>
							</div>
							<div class="form-group mb-3">
								<label for="password">Password</label>
								<input type="password" id="password" class="form-control" name="password" required>
							</div>
							<div class="form-group mt-4">
								<button class="btn btn-pink form-control" type="submit">Login</button>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-6 d-flex align-items-center justify-content-center">
					<img src="assets/mingyu.jpeg" class="img-fluid" alt="Cashier" style="max-height: 300px;">
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
