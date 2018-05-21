<?php  
include 'config/class.php';
$id=$_GET['id'];
$data=$artikel->read($id);
$artikel=$artikel->view();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Baca artikel</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/aku.css">
</head>
<body>
	
<?php include 'navbar.php'; ?>

	<div class="container">
		<div class="row" id="read">
			<div class="col-md-9 col-sm-6">	
			<?php foreach ($data as $key => $value): ?>
				<h1><?php echo $value['judul'] ?></h1>
				<p class="text-justify">
					<?php echo $value['isi'] ?>
				</p>
			<?php endforeach ?>
			</div>
			<?php include 'rightbar.php'; ?>	
		</div>
	</div>

</body>
</html>