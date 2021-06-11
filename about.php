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
          <a class="dropdown-item" href="../../contoh/bootstrap/shopmrbeast.com.html">ShopMrBeast</a>
        </div>
      </li>
    </ul>
	<a class="login-box" href="aksi_logout.php" style="text-decoration: none;">LOGOUT</a>
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item2 active">
      <img src="register.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>

<!-- Just an image -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
  </a>
</nav>

<body>
	<table id="bran2">
	<td>
	 <p class="teksdalam"><b>My Mission</b><br></p>
<p style="padding-left: 10px; padding-right: 10px">I build a free and open source website using HTML Language,CSS,Bootstrap,Javascript for web<br> design using Notepad++.<br><br>
Notepad++ is a free source code editor and Notepad replacement that supports several languages.
<br>Running in the MS Windows environment, its use is governed by GNU General Public License.<br><br>
For that reason Notepad++ is Free and Open Source software.
I proudly present my very first
<br>approach towards building a website using HTML with simplistic design coded in the CSS to create a 
<br>minimalistic feel into my fourth project called "Webdesk".</p>
	</td>
	</table>
</body>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>