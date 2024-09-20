<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Cerita Praktikum 3</title>
</head>

<style>
    .container {
        display: flex;
        justify-content: center;
        margin-top: 50px;
    }
    td {
        padding: 5px;
    }
    .header {
        display: flex;
        justify-content: center;
    }
    .keterangan, .sold, .avaliable {
        display: flex;
        justify-content: center;
        margin-top: 50px;
        margin: 20px;
    }
    .persentase {
        display: flex;
        justify-content: center;
        text-align: center;
    }
</style>

<body>
    <?php
    $allKursi = 45;
    $soldKursi = 28;
    $sisaKursi = $allKursi - $soldKursi;
    $percentage = $sisaKursi / $allKursi * 100;
    ?>
    <div class="header">
        <h1>Purnama Resto</h1>
    </div>
    <div class="container">
        <table>
            <?php
            $count = 1;
            $image ="";
            for ($i = 0; $i < 5; $i++) { ?>
                <tr>
                    <?php
                    for ($j = 0; $j < 9; $j++) {
                        $count <= $soldKursi ? $image='kursi.png': $image='kosong.png';
                    ?>
                        <td>
                            <img src=<?php echo"{$image}"?> alt="" width="50px" height="50px">
                        </td>
                    <?php
                    $count++;
                    }
                    ?>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <div class="persentase">
        <div class="box">
            <h4>Persentasi Kursi Kosong</h4>
            <h2><?php echo (int)$percentage ?> %</h2>
        </div>
    </div>
    <div class="keterangan">
            <div class="sold">
                <h3><?php echo $sisaKursi ?></h3>
                <img src="kosong.png" alt="" width="50px" height="50px">
                <h5>Kursi Belum Terisi</h5>
            </div>
            <div class="avaliable">
                <h3><?php echo $soldKursi ?></h3>
                <img src="kursi.png" alt="" width="50px" height="50px">
                <h5>Kursi Telah Terisi</h5>
            </div>
    </div>
</body>

</html>