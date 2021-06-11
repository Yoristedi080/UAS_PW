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
  
  <body>
  
  <!--		edit data mahasiswa-->
  
	<?php
	
		include('koneksi.php');
		$nim = $_GET['nim'];
		$show = mysqli_query($koneksi, "select * from mahasiswa where nim = '$nim'");
		if(mysqli_num_rows($show) == 0)
		{
			echo '<script>window.history.back()</script>';
		}
		else
		{
			$d = mysqli_fetch_assoc($show);
		}
	
	?>
	
  <!--		edit data mahasiswa-->
  
		<form action="edit_proses.php" method="post">
			<input type="hidden" name="nim" value="<?php echo $nim; ?>">
			<table>
				<tr>
					<td>Nama Lengkap</td>
					<td>:</td>
					<td>
						<input type="text" name="nama" size="33" value="<?php echo $d['nama']; ?>" required>
					</td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>:</td>
					<td>
						<select name="gender" required>
							<option value="">pilih</option>
							<option value="Pria"<?php if($d['gender'] == 'Pria'){echo 'selected';} ?>> Pria</option>
							<option value="Wanita"<?php if($d['gender'] == 'Wanita'){echo 'selected';} ?>> Wanita</option>					
						</select
					</td>
				</tr>
				<tr>
				
					<td>Alamat</td>
					<td>:</td>
					<td>
						<input type="text" name="alamat" size="33" value="<?php echo $d['alamat'];?>" required>
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td></td>
					<td><input type="submit" name="simpan" value="simpan"></td>
				</tr>
			</table>
		</form>
		
	</body>
  </html>