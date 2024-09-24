<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
    sort($nilaiSiswa);

    $nilaiSetelahDiabaikan = array_slice($nilaiSiswa, 2, -2);
    $jmlh = array_sum($nilaiSetelahDiabaikan);
    $rataRata = array_sum($nilaiSetelahDiabaikan) / 8;
    foreach ($nilaiSetelahDiabaikan as $nilai) {
        ?>
        <h4>Nilai yang tercantum adalah: <?php echo $nilai ?></h4>
        <?php
    }
    ?>
        <h3>Nilai Rata-rata : <?php echo $rataRata ?></h3>
    <?php
    ?>
</body>

</html>