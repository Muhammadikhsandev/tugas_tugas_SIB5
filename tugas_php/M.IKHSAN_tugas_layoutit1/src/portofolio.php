<?php
$Home = "Home";
$Portofolio = "Portofolio";
$Contact = "Contact";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Tugas LayoutIt</title>

	<meta name="description" content="Source code generated using layoutit.com">
	<meta name="author" content="LayoutIt!">

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

</head>

<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link active" href="index.php"><?= $Home; ?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="portofolio.php"><?= $Portofolio ?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="contact.php"><?= $Contact ?></a>
					</li>
				</ul>
				<h3>
					Pengalaman dan Portofolio
				</h3>
				<p>
				<h6>
					Ini adalah halaman portofolio saya. Saya memiliki pengalaman dalam mengerjakan beberapa project seperti Berikut :
					<p><br>
						- Smart Home Berbasis IoT <br>
						- Pembuatan website pascoffeapp pada warkop KOPI PAS <br>
					</p>
					Project tersebut dilakukan secara berkelompok. Saat mengerjakan project Smart Home Berbasis IoT kami mengerjakan project tersebut secara bekelompok dan anggota kelompoknya satu kelas. Project tersebut sebagai sebagai tugas akhir untuk mata kuliah Practice IoT Programming. <br>
					Sedangkan project Pembuatan website pascoffeapp pada warkop KOPI PAS dikerjakan dengan kelompok yang beranggotakan 14 orang. Saat mengerjakan project tersebut saya membuat tampilan kasir. project ini sebagai tugas akhir untuk mata kuliah Practice mobile Applications dan Practice Software Engineering.
				</h6>
				</p>
			</div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>
</body>

</html>