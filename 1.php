<!------ Function count_hadshake---->
<?php
function count_handshake($jumlah_orang){
	$jumlah_jabat_tangan = 0;
	for ($i = $jumlah_orang-1; $i >= 1 ; $i--) { 
		$jumlah_jabat_tangan=$jumlah_jabat_tangan+$i;
	}
	return $jumlah_jabat_tangan;
}

?>

<!---- Tampilan ---->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Soal 1</title>
</head>
<body>
	<!--- Pembuka ---->
	<h2>Menghitung Jumlah Jabat Tangan Dalam Suatu Pertemuan</h2>
	<h4>Aturan yang digunakan adalah sebagai berikut</h4>
	<ul>
		<li>Dihadiri oleh beberapa orang</li>
		<li>Setiap orang berjabat tangan dengan semua yang hadir</li>
		<li>Hanya sekali berjabat tangan dengan orang yang sama</li>
	</ul>
	<p>Contohnya, apabila jumlah orang yang hadir sebanyak 3 orang, maka jumlah jabat tangan yang dilakukan sebanyak <?php echo count_handshake(3); ?>. Contoh lainnya, apabila jumlah orang yang hadir sebanyak 6 orang, maka jumlah jabat tangan yang dilakukan sebanyak <?php echo count_handshake(6); ?>. </p>
	<!---- Input ------>
	<div>
		<form method="POST" action="">
			<label>Input jumlah orang yang hadir</label>
			<br>
			<input type="text" name="banyak_orang">
			<br>
			<button type="submit" name="submit">Hitung</button>
			<br>
		</form>
	</div>

	<!--- Proses dan Hasil ---->

	<?php

	if (isset($_POST['submit'])) {
		$input = $_POST['banyak_orang'];
		$jumlah_orang=intval($input);
		echo "<br>";
		echo "Untuk jumlah yang hadir sebanyak ". $jumlah_orang . " orang, jumlah jabat tangan yang terjadi sebanyak ".count_handshake($jumlah_orang);
	}

	?>

</body>
</html>

<!--- Catatan pembuatan fungsi
Setiap orang hanya berjabat tangan satu kali dengan orang yang sama dari  total seluruh orang yang hadir. berarti:
 - perulangan dengan increment yang menglamai pengurangan setiap siklusnya.
 - Misal ada 6 orang, maka jumlah jabat tangan ada 5+4+3+2+1. dengan uraian sebagai berikut.
 orang ke - 1 ia akan menyalami sebanyak 5 orang
 orang ke - 2 ia akan menyalami sebanyak 4 orang
 orang ke - 3 ia akan menyalami sebanyak 3 orang
 orang ke - 4 ia akan menyalami sebanyak 2 orang
 orang ke - 5 ia akan menyalami sebanyak 1 orang
 orang ke - 6 ia tidak akan menyalami siapapun.
 Total jabat tangan sebanyak 5+4+3+2+1
 - Maka perulangan akan terus dilakukan sampai nilai i berada di bawah 1
------>