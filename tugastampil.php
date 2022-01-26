<?php 
$nama = $_POST ['nama'];
$usia = $_POST ['usia'];
$tell = $_POST ['tell'];
$Jeniskelamin = $_POST ['JenisKelamin'];

echo "<p>Selamat <b>$nama</b>. Pendaftaran Berhasil</p>";
echo "<p>Biadata Anda</p>";
echo "<hr/>";
echo "Nama : " . $nama;
echo "<br/>";
echo "Asal SMP : " . $usia;
echo "<br/>";
echo "No. Telp : " . $tell;
echo "<br/>";
echo "Jenis Kelamin : " . $Jeniskelamin;

?>