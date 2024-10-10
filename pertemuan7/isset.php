<?php
    $umur;
    if(isset($umur) && $umur >= 18) {
        echo "Anda Sudah Dewasa";
    } else {
        echo "Anda belum dewasa atau variable 'umur' tidak ditemukan <br>";
    }

    $data = array("nama" => "jane", "usia" => 25);
    if(isset($data["nama"])) {
        echo "Nama: " . $data["nama"];
    } else {
        echo "Variable 'nama' tidak ditemukan dalam array.";
    }
?>