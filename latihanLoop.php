<?php

echo "NAMA : AFNI ANGGI AGUSTINA<br>";
echo "KELAS : XI RPL 1 <br><br><br>";

// SOAL NOMOR 1
echo "SOAL NOMOR 1 : <br>";
for ($i = 5; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}

echo "<br><br>";

// SOAL NOMOR 2
echo "SOAL NOMOR 2 : <br>";
for ($i = 0; $i <= 100; $i += 8) {
    echo $i . " ";
}

echo "<br><br>";

// SOAL NOMOR 3
echo "SOAL NOMOR 3 : <br>";
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . " - aku jago koding\n <br>";
}

echo "<br><br>";

// SOAL NOMOR 4
echo "SOAL NOMOR 4 : <br>";
for ($i = 19; $i >= 1; $i -= 2) {
    echo $i . " - aku seorang web developer\n <br>";
}

echo "<br><br>";

// SOAL NOMOR 5
echo "SOAL NOMOR 5 : <br>";
for ($i = 1; $i <= 25; $i++) {
    if ($i % 2 != 0) {
        echo $i . ". Hoby aku coding\n <br>";
    } else {
        echo $i . ". Aku sangat senang koding\n <br>";
}
}
?>