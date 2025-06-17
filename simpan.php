<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $x = $_POST["x"];
    $y = $_POST["y"];

    $line = "$nama,$x,$y\n";
    file_put_contents("lokasi.csv", $line, FILE_APPEND);
    echo "Lokasi '$nama' berhasil disimpan!";
} else {
    echo "Metode tidak diperbolehkan!";
}
?>
