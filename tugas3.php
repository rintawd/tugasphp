<!DOCTYPE html>
<html>
<head>
	<title>Grade Mahasiswa</title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>Nilai</th>
				<th>Grade</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>John Doe</td>
				<td>80</td>
				<td></td>
			</tr>
			<tr>
				<td>2</td>
				<td>Jane Doe</td>
				<td>95</td>
				<td></td>
			</tr>
			<!-- Tambahkan baris mahasiswa lainnya di sini -->
		</tbody>
		<tfoot>
			<tr>
				<td colspan="2">Jumlah Mahasiswa:</td>
				<td id="jumlah-mahasiswa"></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="2">Nilai Tertinggi:</td>
				<td id="nilai-tertinggi"></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="2">Nilai Terendah:</td>
				<td id="nilai-terendah"></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="2">Rata-rata:</td>
				<td id="rata-rata"></td>
				<td></td>
			</tr>
		</tfoot>
	</table>

	<script>
		// Ambil elemen-elemen HTML yang dibutuhkan
		var tbody = document.querySelector('tbody');
		var jumlahMahasiswa = document.getElementById('jumlah-mahasiswa');
		var nilaiTertinggi = document.getElementById('nilai-tertinggi');
		var nilaiTerendah = document.getElementById('nilai-terendah');
		var rataRata = document.getElementById('rata-rata');

		// Inisialisasi variabel yang dibutuhkan
		var totalNilai = 0;
		var count = 0;
		var nilaiMax = 0;
		var nilaiMin = 100;

		// Iterasi setiap baris di dalam tabel
		for (var i = 0; i < tbody.rows.length; i++) {
			// Ambil nilai mahasiswa dari kolom kedua
			var nilai = parseInt(tbody.rows[i].cells[2].textContent);

			// Tambahkan nilai ke totalNilai dan increment count
			totalNilai += nilai;
			count++;

			// Periksa apakah nilai lebih tinggi dari nilaiMax atau lebih rendah dari nilaiMin
			if (nilai > nilaiMax) {
				nilaiMax = nilai;
			}

			if (nilai < nilaiMin) {
				nilaiMin = nilai;
			}

			// Tentukan grade dari nilai menggunakan switch case
			var grade;
			switch (true) {
				case (nilai >= 90):
					grade = 'A';
					break;
				case (nilai >= 80):
					grade = 'B';
					break;
				case (nilai >= 70):
					grade = 'C';
					break;
				case (nilai >= 60):
					grade = 'D';
					break;
				default: