<?php
	session_start();
	include "koneksi.php";
	if(!isset($_SESSION['username'])){
		header ("location:../../contoh/login.php");
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
  <a class="navbar-brand" href="../../contoh/Webdesk.php">Webdesk</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../../contoh/home.php" style="text-decoration: none; color: black;">HOME </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../contoh/features1/features.php" style="text-decoration: none; color: black;">FEATURES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../contoh/about.php" style="text-decoration: none; color: black;">ABOUT</a>
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

<div id="carouselExampleSlidesOnly">
  <div class="carousel-inner">
    <div class="carousel-item1 active">
        <img src="project1.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>

<!-- Just an image -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
  </a>
</nav>

<body>
			<h1 class="featureteks">FEATURES</h1>
	</table>
</body>

<div class="card-deck">
  <div class="card">
     <a href="https://notepad-plus-plus.org/">
    <img src="notepad.png" class="card-img-top" style="width: 29.3rem;">
	</a>
    <div class="card-body">
      <h5 class="card-title">Notepad++</h5>
      <p class="card-text">Notepad++ is a free (as in “free speech” and also as in “free beer”) source code editor and Notepad replacement that supports several languages.</p>
	  <br>
      <a href="https://notepad-plus-plus.org/" style="text-decoration: none; padding: 6px">READ MORE></a>
    </div>
  </div>
  <div class="card">
     <a href="https://www.w3schools.com/html/">
    <img src="html.png" class="card-img-top" alt="...">
	</a>
    <div class="card-body">
      <h5 class="card-title">HTML</h5>
      <p class="card-text">HTML (Hypertext Markup Language) is the code that is used to structure a web page and its content. For example, content could be structured within a set of paragraphs, a list of bulleted points, or using images and data tables.</p>
    <a href="https://www.w3schools.com/html/" style="text-decoration: none; padding: 6px">READ MORE></a>
    </div>
  </div>
  <div class="card">
     <a href="https://www.w3schools.com/css/css_intro.asp">
    <img src="css1.png" class="card-img-top" alt="..." style="height: 21rem; width: 60%; margin-left: 120px;">
	</a>
    <div class="card-body">
      <h5 class="card-title">CSS</h5>
      <p class="card-text">CSS is a computer language for laying out and structuring web pages (HTML or XML). This language contains coding elements and is composed of these “cascading style sheets” which are equally called CSS files (.</p>
      <a href="https://www.w3schools.com/css/css_intro.asp" style="text-decoration: none; padding: 6px">READ MORE></a>
    </div>
  </div>
</div>

<div class="card-deck">
  <div class="card">
   <a href="https://getbootstrap.com/docs/4.6/getting-started/introduction/"> 
    <img src="bootstrap.jpg" class="card-img-top" style="height: 21rem; width: 60%; margin-left: 110px;"></a>
    <div class="card-body">
      <h5 class="card-title">Bootstrap</h5>
      <p class="card-text">Bootstrap is a free and open-source CSS framework directed at responsive, mobile-first front-end web development. It contains CSS- and (optionally) JavaScript-based design templates for typography, forms, buttons, navigation, and other interface components.</p>
	  <br>
      <a href="https://getbootstrap.com/docs/4.6/getting-started/introduction/" style="text-decoration: none; padding: 6px">READ MORE></a>
    </div>
  </div>
  <div class="card">
     <a href="https://www.javascript.com/">
    <img src="javascript.jpg" class="card-img-top" alt="...">
	</a>
    <div class="card-body">
      <h5 class="card-title">Javascript</h5>
      <p class="card-text">HTML (Hypertext Markup Language) is the code that is used to structure a web page and its content. For example, content could be structured within a set of paragraphs, a list of bulleted points, or using images and data tables.</p>
	  <br>
	  <br>
      <a href="https://www.javascript.com/" style="text-decoration: none; padding: 6px">READ MORE></a>
    </div>
  </div>
  <div class="card">
	<a href="https://www.w3schools.com/">
    <img src="w3schools.png" class="card-img-top" alt="..." style="height: 21.2rem; width: 60%; margin-left: 120px;"></a>
    <div class="card-body">
      <h5 class="card-title">w3schools</h5>
      <p class="card-text">W3Schools is a school for web developers, covering all the aspects of web development: HTML Tutorial. CSS Tutorial. JavaScript Tutorial.</p>
	  <br>
	  <br>
	  <br>
      <a href="https://www.w3schools.com/" style="text-decoration: none; padding-bottom: 10px; padding-left: 6px;">READ MORE></a>
    </div>
  </div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>