<?php
	//tipe data string menggunakan metode single quoted
  $string1 = 'Ini adalah contoh string sederhana';
  $string2 = 'Variabel juga tidak otomatis ditampilkan : $string1';
 
	echo $string1; echo "<br>"; //br berfungsi untuk membuat baris baru
	echo $string2; 

    echo "<br>";echo "<br>";
	
	//tipe data string menggunakan metode double quoted
  $stringa = "Ini adalah contoh string sederhana 2";
  $stringb = "Variabel akan otomatis ditampilkan : $stringa";
 
	echo $stringa; 
	echo "<br>"; //br berfungsi untuk membuat baris baru
	echo $stringb; 

    echo "<br>";echo "<br>";

  $nama = "Adrian";
  $umur = 16;

  echo "Nama saya adalah ", $nama, " dan saya berumur ", $umur; echo "<br>";
  echo "Nama saya adalah ".$nama." dan saya berumur ".$umur; echo "<br>";

  echo "<br>";echo "<br>";

    $a = "1";
    $b = 2;
    echo $a + $b;

    $a = "1"; /* $a adalah string */
	$a++; /* sekarang $a adalah integer (2) */
	$a .= "3"; /* sekarang $a kembali menjadi string ("23") */
	$a *= 0.5; /* sekarang $a berubah menjadi float (11.5) */
	
	$b = "10" . "20.25"; /* $c bertipe data string (1020.25) */
	$c = "10" + "20.25"; /* $g bertipe data float (30.25) */
	$d = 10 + "20.5"; /* $h bertipe data float (30.5) */
	
	echo "a = $a"; echo "<br>";
	echo "b = $b"; echo "<br>";
	echo "c = $c"; echo "<br>";
	echo "d = $d"; echo "<br>";

    $e = "10 rumah"; /* $e bertipe data string ("10 rumah") */
$e = (int) $e; /* $e sekarang adalah integer (10) */
$e = (bool) $e; /* $e sekarang adalah boolean (true) */

$f = 100; /* $f bertipe data integer (100) */
$f = (string) $f; /* $f sekarang adalah string ("100") */

echo "e = $e"; echo "<br>";
echo "f = $f"; echo "<br>";

?>