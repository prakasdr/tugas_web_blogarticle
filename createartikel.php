<?php 
include 'config/class.php'; 
$dtartikel=$artikel->view();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/aku.css">
</head>
<body>
	<?php include 'navbar.php'; ?>
	<form method="post">
		<div class="container">
			<div class="col-md-9">
				<div class="form-group">
					<label>Judul</label>
					<input type="text" name="judul" class="form-control">
				</div>
			<div class="form-group">
				<label>Isi</label>
				<textarea name="text" class="form-control" cols="30" rows="10" ></textarea>
			</div>
				<button class="btn btn-primary" name="simpan">Create</button>
			</div>

			<?php include 'rightbar.php'; ?>
			</div>
		</div>
	</form>	
	<?php  
	if (isset($_POST["simpan"])) 
	{
		$artikel->create($_POST['judul'],$_POST['text']);
		echo "<script>alert('Data berhasil disimpan');</script>";
		// echo "<script>location='index.php';</script>";
	}

	?>
</body>
</html>