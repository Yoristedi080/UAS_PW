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
		<h3>
			<a href="index.php">kembali</a><br>
			<p>Tambah data mahasiswa</p>
		</h3>
		<form action="tambah_proses.php" method="post">
			<table>
				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><Input type="number" name="nim" required> </td>
				</tr>
				<tr>
					<td>Nama Lengkap</td>
					<td>:</td>
					<td><input type="text" name="nama" required> </td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>:</td>
					<td>
					<select name="gender" required>
					<option>Gender</option>
					<option value="Pria">Pria</option>
					<option value="Wanita">Wanita</option>
					</select>
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><input type="text" name="alamat" required> </td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td></td>
					<td><input type="submit" name="tambah" value="Tambah"> </td>
				</tr>
			</table>
		</form>
			
  </body>
</html>