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
					Tentang Saya
				</h3>
				<p>
				<h6>
					Nama saya M. IKHSAN, saya kuliah di POLITEKNIK NEGERI LHOKSEUMAWE. Sekarang saya sedang mengikuti program MSIB Studi Independen dibidang Fullstack Developer di mitra PT. Hendevane Indonesia. <br>
					Saya berasal dari kota Subulussalam, Aceh
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