<?php
	session_start();
	include "koneksi.php";
	if(!isset($_SESSION['username'])){
		header ("location:login.php");
	}
	if(!isset($_SESSION['username'])){
		$username = $_SESSION['username'];
	}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link href="style1.css" type="text/css" rel="stylesheet">
    <title>Webdesk | | Official Website</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="Webdesk.php">Webdesk</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="home.php" style="text-decoration: none; color: black;">HOME </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../contoh/features1/features.php" style="text-decoration: none; color: black;">FEATURES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php" style="text-decoration: none; color: black;">ABOUT</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration: none; color: black;">
          PORTOFOLIO
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="../../contoh/Website/OurSite1.html">OurSite</a>
          <a class="dropdown-item" href="../../contoh/Login1/login.html">Login</a>
          <a class="dropdown-item" href="../../contoh/UTS1/bootstrap/shopmrbeast.com.html">ShopMrBeast</a>
        </div>
      </li>
    </ul>
	<a class="login-box" href="aksi_logout.php" style="text-decoration: none;">LOGOUT</a>
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="building1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="laptop.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="meeting.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- Just an image -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
  </a>
</nav>

<body>
			<h1 class="brand1">Create By:</h1>
	</table>
</body>

<div class="card" style="width: 15rem;">
  <img src="tedi2.jpg" class="card1-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Yoristedi Prayoga 201401080</p>
  </div>
</div>

<!--schedule start-->
<div class="jumbutron" id="jadwal">
	<div class="container">
	<div class="col-lg-12 text-center mt-5 mb-5">
		<h3 class="display-4">Daftar Peserta</h3>
		<a href="tambah.php"><h4>Tambah Peserta</h4></a>
	</div>
	<table class="table table-striped" style="text-align: center">
	<thead class="table-dark">
		<th>No.</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Gender</th>
		<th>Alamat</th>
		<th>Opsi</th>
	</thead>
	
 <!--		menampilkan data mahasiswaa		-->
 
 <?php
	include_once 'koneksi.php';
	$no=1;
	$data=mysqli_query($koneksi, "select * from mahasiswa");
	while ($d=mysqli_fetch_array($data)){
	?>
	
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['nim']; ?></td>
		<td><?php echo $d['nama']; ?></td>
		<td><?php echo $d['gender']; ?></td>
		<td><?php echo $d['alamat']; ?></td>
		<td>
			<a href="edit.php ?nim=<?php echo $d['nim'];?>">Edit</a>
			<a href="hapus.php ?nim=<?php echo $d['nim'];?>">Hapus</a>
		</td>
	</tr>
	
	<?php
	}
	?>
 
 <!--		menampilkan data mahasiswaa    -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>