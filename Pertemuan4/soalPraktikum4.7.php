<?php
    $hargaBarang = 120000;

    if ($hargaBarang > 100000) {
        $diskon = $hargaBarang * 20 / 100;
        $hargaSetelahDiskon = $hargaBarang - $diskon;
        echo "Harga Barang : Rp.$hargaBarang <br>";
        echo "Diskon Belanja : Rp.$diskon <br>";
        echo "Harga setelah diskon : Rp.$hargaSetelahDiskon";
    }
?>