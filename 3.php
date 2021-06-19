<?php

function cetak_gambar($jumlah, $simbol_pertama, $simbol_kedua){
	$tengah = (($jumlah-1)/2)+1;
	if ($jumlah%2 != 0) {
		for ($r=1; $r <= $jumlah ; $r++) {
			if ($r == 1) {
				for ($c=1; $c <= $jumlah ; $c++) {
					echo $simbol_pertama . " ";
				}
			}
			elseif ($r == $jumlah) {
				for ($c=1; $c <= $jumlah ; $c++) {
					echo $simbol_pertama . " ";
				}
			}
			elseif ($r == $tengah) {
				for ($c=1; $c <= $jumlah ; $c++) {
					echo $simbol_pertama . " ";
				}
			}
			else {
				for ($c=1; $c <= $jumlah ; $c++) {
					if ($c == 1) {
						echo $simbol_pertama . " ";
					}
					elseif ($c == $jumlah) {
						echo $simbol_pertama . " ";
					}
					else{
						echo $simbol_kedua . " ";
					}
				}
			}
			echo "<br>";
		}
	}
	else{?>
		<script type="text/javascript">
			window.alert("Nilai harus bilangan ganjil!");
		</script>
		<?php
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Soal 3</title>
</head>
<body>
	<!--- Pembukaan ---->
	<h2>Cetak Gambar</h2>
	<h4>Aturan yang digunakan adalah sebagai berikut.</h4>
	<ul>
		<li>Jumlah gambar yang ditampilkan bernilai ganjil</li>
		<li>panjang, lebar/tinggi berjumlah sama</li>
		<li>Perlu memasukkan dua simbol yang ingin ditampilkan</li>
	</ul>
	<h4>Berikut adalah salah satu contohnya</h4>
	<p>Jumlah yang ingin ditampilkan '5' simbol yang digunakan '*' dan '='</p>
	<?php cetak_gambar(5, "*", "="); ?>
	<br><br>
	<!---- Input lebar dan tinggi simbol --->
	<div>
		<form method="POST" action="">
			<label>Masukkan Jumlah</label>
			<br>
			<input type="text" name="jumlah">
			<br>
			<label>Masukkan simbol pertama</label>
			<br>
			<input type="text" name="pertama">
			<br>
			<label>Masukkan simbol kedua</label>
			<br>
			<input type="text" name="kedua">
			<br><br>
			<button name="kirim">Cetak Gambar</button>
		</form>
		<br>
	</div>
	<!--- Hasil ----->
	<?php
	if (isset($_POST['kirim'])) {
		$jumlah_bilangan = $_POST['jumlah'];
		$first_symbol = $_POST['pertama'];
		$second_symbol = $_POST['kedua'];
		$count_number=intval($jumlah_bilangan);
		echo "Jumlah yang ingin ditampilkan " .$count_number. " simbol yang digunakan '". $first_symbol ."' dan '". $second_symbol. "'";
		echo "<br><br>";
		cetak_gambar($count_number, $first_symbol, $second_symbol);
	}
	?>
	<br><br>

</body>
</html>