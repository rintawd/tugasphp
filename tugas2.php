<?php

// input data pegawai
$nama = "John Doe";
$jabatan = "Manager";
$status = "menikah";
$jml_anak = 3;
$gaji_pokok = 0;
$tunj_jabatan = 0;
$tunj_keluarga = 0;
$gaji_kotor = 0;
$zakat_profesi = 0;
$take_home_pay = 0;

// proses perhitungan gaji
switch ($jabatan) {
    case "Manager":
        $gaji_pokok = 20000000;
        break;
    case "Asisten":
        $gaji_pokok = 15000000;
        break;
    case "Kabag":
        $gaji_pokok = 10000000;
        break;
    case "Staff":
        $gaji_pokok = 4000000;
        break;
    default:
        echo "Jabatan tidak dikenali!";
        exit();
}

$tunj_jabatan = 0.2 * $gaji_pokok;

if ($status == "menikah" && $jml_anak <= 2) {
    $tunj_keluarga = 0.05 * $gaji_pokok;
} elseif ($status == "menikah" && $jml_anak >= 3 && $jml_anak <= 5) {
    $tunj_keluarga = 0.1 * $gaji_pokok;
}

$gaji_kotor = $gaji_pokok + $tunj_jabatan + $tunj_keluarga;

$zakat_profesi = ($gaji_kotor >= 6000000 && $status == "muslim") ? 0.025 * $gaji_kotor : 0;

$take_home_pay = $gaji_kotor - $zakat_profesi;

// output hasil perhitungan gaji
echo "Nama Pegawai: " . $nama . "<br>";
echo "Jabatan: " . $jabatan . "<br>";
echo "Status: " . $status . "<br>";
echo "Jumlah Anak: " . $jml_anak . "<br>";
echo "Gaji Pokok: " . $gaji_pokok . "<br>";
echo "Tunjangan Jabatan: " . $tunj_jabatan . "<br>";
echo "Tunjangan Keluarga: " . $tunj_keluarga . "<br>";
echo "Gaji Kotor: " . $gaji_kotor . "<br>";
echo "Zakat Profesi: " . $zakat_profesi . "<br>";
echo "Take Home Pay: " . $take_home_pay . "<br>";

?>