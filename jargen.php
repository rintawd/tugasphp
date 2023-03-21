<!DOCTYPE html>
<html>
<head>
	<title>Form Jajar Genjang</title>
</head>
<body>
	<h2>Form Jajar Genjang</h2>
	<form action="" method="post">
		<label for="alas">Alas:</label>
		<input type="text" id="alas" name="alas"><br><br>
		<label for="tinggi">Tinggi:</label>
		<input type="text" id="tinggi" name="tinggi"><br><br>
		<label for="sisi">Sisi:</label>
		<input type="text" id="sisi" name="sisi"><br><br>
		<input type="submit" name="submit" value="Hitung">
	</form>

	<?php
		if(isset($_POST['submit'])){
			$alas = $_POST['alas'];
			$tinggi = $_POST['tinggi'];
			$sisi = $_POST['sisi'];

			$luas = $alas * $tinggi;
			$keliling = 2 * ($alas + $sisi);

			echo "<h3>Hasil Perhitungan:</h3>";
			echo "Luas Jajar Genjang = " . $luas . "<br>";
			echo "Keliling Jajar Genjang = " . $keliling;
		}
	?>
</body>
</html>