<?php
    $siswa = [
        ["nama" => "Alice", "nilai" => 85],
        ["nama" => "Bob", "nilai" => 92],
        ["nama" => "Charlie", "nilai" => 78],
        ["nama" => "David", "nilai" => 64],
        ["nama" => "Eva", "nilai" => 90]
    ];
    
    $total_nilai = 0;
    $jumlah_siswa = count($siswa);
    
    foreach ($siswa as $data) {
        $total_nilai += $data['nilai'];
    }
    
    $rata_rata = $total_nilai / $jumlah_siswa;
    
    echo "Nilai Rata-rata Matematika: $rata_rata <br>";
    echo "Daftar siswa yang nilainya di atas rata-rata:<br>";
    
    foreach ($siswa as $data) {
        if ($data['nilai'] > $rata_rata) {
            echo $data['nama'] . " mendapatkan nilai " . $data['nilai'] . "<br>";
        }
    }
?>