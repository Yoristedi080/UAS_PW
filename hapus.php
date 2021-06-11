<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link href="style1.css" type="text/css" rel="stylesheet">
    <title>Webdesk | | Official Website</title>
  </head>
  
  <?php
		if(isset($_GET['nim'])){
			include('koneksi.php');
			$nim	= $_GET['nim'];
			$cek	= mysqli_query($koneksi, "select nim from mahasiswa
			where nim = '$nim'") or die(mysqli_error());
			
			if(mysqli_num_rows($cek)==0)
			{
				echo "<script>window.history.back()</script>";
			}
			else
			{
				$del = mysqli_query($koneksi, "delete from mahasiswa where nim = '$nim'");
				if ($del)
				{
					echo "<h3>Data mahasiswa berhasil dihapus</h3>";
					echo "<script>window.location = 'index.php';</script>";
				}
				else
				{
					echo "<h2>gagal menghapus data</h2>";
					echo "<a href = 'index.php'>kembali </a>";
				}
			}
		}
		
		else
		{
			echo "<script>window.history.back()</script>";
		}
  ?>
  
  <body>
  
  </body>
 </html>