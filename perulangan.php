<?php

for ($i = 0; $i < 100; $i++) {
    echo "Wajib Ngulik <br>";
}

for ($i = 1; $i <= 10; $i++) {
    echo "{$i} <br>";
}

for ($i = 10; $i > 0; $i--) {
    echo "{$i} <br>";
}

$list = ['RPL', 'Wajib', 'Ngulik'];

for ($i = 0; $i < count($list); $i++) {
    echo "{$list[$i]} <br>";
}

for ($i = 1; $i <= 50; $i++) {
    if ($i % 10 === 0) {
      continue; # skip perulangan jika nilai $i habis dibagi 10
    }
    
    echo "Perulangan ke-{$i} <br>";

    if ($i > 40) {
      break; # hentikan perulangan jika $i lebih dari 40
    }
}

$i = 0;

while ($i < 20) {
    echo "{$i} <br>";

    $i++;
}

while (true) {
    echo "RPL Wajib Ngulik !! <br>";
}

while (false) {
    echo "Perulangan while! <br>";
}

do {
    echo "Perulangan do while! <br>";
} while (false);

$list = ['RPL', 'Wajib', 'Ngulik'];

foreach ($list as $l) {
    echo "Nama : {$l} <br>";
}

$list = ['RPL', 'Wajib', 'Ngulik'];

foreach ($list as $key => $l) {
    echo "[{$key}] Nama : {$l} <br>";
}

?>