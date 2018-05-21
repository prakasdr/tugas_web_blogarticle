<?php  
include 'config/class.php';
$artikel=$artikel->view();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Index</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/aku.css">
</head>
<body>
		
	<?php include 'navbar.php'; ?>

	<div class="container">
		<div class="row">
			<div class="col-md-9 col-sm-6">	
				<h1>Tugas</h1>
				<p class="text-justify"><b>Website</b> ini dibuat dengan sangat sederhana, untuk memenuhi tugas mata kuliah Pemrograman Web Praktek.<br> <br> 
				Kelompok kami :<br>
				1. Aris Abdul Ajis <br>
				2. Prakas Dwi Rahardika <br> 
				3. Alfian Ananta Witular <br>
				4. Dwi Apri Kurniawan
				</p>
			</div>
			<?php include 'rightbar.php'; ?>	
		</div>
	</div>
		
	
	
</body>
</html>