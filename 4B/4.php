<?php

$servername = "localhost";
$database = "db_perpustakaan";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Soal 4</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
	body {
		background-color: #f6f6f6;
		font-family: sans-serif;
	}

	nav {
		background-color: #161d6f;
		padding: 1%;
	}

	nav a{
		font-size: 1.25em;
		font-weight: 500;
		color: white;
		text-decoration: none;
	}

	li{
		display: inline;
		margin-left: 10%;
	}

	main{
		margin-top: 1.5%;
		margin-bottom: 1.5%;
		margin-left: 5%;
		margin-right: 5%;
		overflow: auto;
	}

	button{
		background-color: #98ded9;
		padding: 1%;
		font-size: 1em;
		color: black;
		border-radius: 10px;
		cursor: pointer;
	}

	input{
		background-color: #98ded9;
		padding: 1%;
		color: black;
	}

	label{
		font-size: 1em;
	}

	footer {
		background-color: #161d6f;
		font-size: 1em;
		padding: 1%;
		color: white;
	}

	</style>
</head>
<body>
	<!----Header ---->
	<header>
		<nav>
			<ul>
				<li><a href="#tambah_kategori"> Tambah Kategori</a></li>
				<li><a href="#tambah_buku">Tambah Buku</a></li>
				<li><a href="#tampil_buku">Tampilkan semua buku</a></li>
			</ul>
		</nav>
	</header>
	<!---- Main / Isi ---->
	<main>
		<!---- Tambahkan kategori ---->
		<div id="tambah_kategori">
			<br>
			<center>
				<h2>Tambahkan kategori buku</h2>
				<form method="POST" action="">
					<label>Masukkan nama Kategori</label>
					<br><br>
					<input type="text" name="kategori">
					<br><br>
					<button name="kirim">Tambahkan</button>
				</form>
			</center>
		</div>
		<?php
		if (isset($_POST['kirim'])) {
			$kategori = $_POST['kategori'];
			$sql = "INSERT INTO `categories`(`name`) VALUES ('$kategori')";
			if (mysqli_query($conn, $sql)) {?>
				<script type="text/javascript">
				window.alert("Sukses ditambahkan!");
				</script><?php
			}
			else {?>
				<script type="text/javascript">
				window.alert("<?php echo "Error: " . $sql . "<br>" . mysqli_error($conn); ?>");
				</script><?php
			}

		}
		?>
		<br><br>
		<div id="tambah_buku">
			<center>
				<h2>Tambahkan buku</h2>
				<form>
					<label>Nama</label>
					<br>
					<input type="text" name="deskripsi">
					<br><br>
					<label>Deskripsi</label>
					<br>
					<input type="text" name="deskripsi">
					<br><br>
					<label>Stok yang tersedia</label>
					<br>
					<input type="text" name="stok">
					<br><br>
					<button name="submit">Tambahkan</button>
				</form>
			</center>
		</div>
		<br><br>
		<div id="tampil_buku">
			<center>
				<h2>Daftar katalog buku perpustakaan</h2>
			</center>
		</div>

	</main>
	<br><br>
	<!---- Footer ----->
	<footer>
		<center>
			&copy; 2021, Oleh Diyastri Khotimatul Huda
		</center>
	</footer>

</body>
</html>
