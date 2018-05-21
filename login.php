<?php include 'config/class.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Administrator</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

	<!-- Login disini -->
	<div class="container" style="padding-top: 150px">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Login Administrator</h3>
					</div>
					<div class="panel-body">
						<form method="post">
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" name="em">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="text" class="form-control" name="ps">
							</div>
							<button name="login" class="btn btn-primary">Login</button>
						</form>
						<?php  
						// jika ada tombol login maka
						if (isset($_POST['login'])) 
						{
							// obyek adminn mengakses fungsi login_admin(akun dari form login)
							$hasil=$user->login($_POST['em'], $_POST['ps']);
							// Dalam login ada 2 kemungkinan yaitu sukses dan gagal
							// jadi, jika hasil benar maka
							if ($hasil=="sukses") 
							{
								echo "<div class='alert alert-success'>Login Sukses</div>";
								echo "<meta http-equiv='refresh' content='1;url=index.php'>";

							}
							// selain itu jika gagal
							else
							{
								echo "<div class='alert alert-danger'>Login gagal</div>";
								echo "<meta http-equiv='refresh' content='1;url=login.php'>";							
							}
						}

						?>		
					</div>
				</div>
			</div>
		</div>
	</div>


</body>
</html>