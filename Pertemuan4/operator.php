<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operasi PHP</title>
</head>
<style>
    .main-container {
        display: flex;
        justify-content: center;
    }

    .container {
        padding: 10px;
    }

    .header {
        display: flex;
        justify-content: center;
    }

    table {
        border-radius: 15px;
        background-color: azure;
        box-shadow: 0px 0px 5px 0px;
    }

    td {
        padding: 10px;
    }
</style>

<body>
    <?php
    $a = 10;
    $b = 5;

    $hasilTambah = $a + $b;
    $hasilKurang = $a - $b;
    $hasilKali = $a * $b;
    $hasilBagi = $a / $b;
    $sisaBagi = $a % $b;
    $pangkat = $a ** $b;

    $hasilSama = $a == $b;
    $hasilTidakSama = $a != $b;
    $hasilLebihKecil = $a < $b;
    $hasilLebihBesar = $a > $b;
    $hasilLebihKecilSama = $a <= $b;
    $hasilLebihBesarSama = $a >= $b;

    $hasilAnd = $a && $b;
    $hasilOr = $a || $b;
    $hasilNotA = !$a;
    $hasilNotB = !$b;
    
    ?>
    <div class="header">
        <h1>Belajar Operator PHP</h1>
    </div>
    <div class="main-container">
        <div class="container">
            <table border="0">
                <tr>
                    <td>Hasil Dari</td>
                    <td><?php echo $a ?></td>
                    <td>+</td>
                    <td><?php echo $b ?></td>
                    <td>=</td>
                    <td><?php echo $hasilTambah ?></td>
                </tr>
                <tr>
                    <td>Hasil Dari</td>
                    <td><?php echo $a ?></td>
                    <td>-</td>
                    <td><?php echo $b ?></td>
                    <td>=</td>
                    <td><?php echo $hasilKurang ?></td>
                </tr>
                <tr>
                    <td>Hasil Dari</td>
                    <td><?php echo $a ?></td>
                    <td>*</td>
                    <td><?php echo $b ?></td>
                    <td>=</td>
                    <td><?php echo $hasilKali ?></td>
                </tr>
                <tr>
                    <td>Hasil Dari</td>
                    <td><?php echo $a ?></td>
                    <td>/</td>
                    <td><?php echo $b ?></td>
                    <td>=</td>
                    <td><?php echo $hasilBagi ?></td>
                </tr>
                <tr>
                    <td>Hasil Dari</td>
                    <td><?php echo $a ?></td>
                    <td>%</td>
                    <td><?php echo $b ?></td>
                    <td>=</td>
                    <td><?php echo $sisaBagi ?></td>
                </tr>
                <tr>
                    <td>Hasil Dari</td>
                    <td><?php echo $a ?></td>
                    <td>**</td>
                    <td><?php echo $b ?></td>
                    <td>=</td>
                    <td><?php echo $pangkat ?></td>
                </tr>
            </table>
        </div>
        <div class="container">
            <table border="0">
                <tr>
                    <td>Hasil Dari</td>
                    <td><?php echo $a ?></td>
                    <td>==</td>
                    <td><?php echo $b ?></td>
                    <td>=</td>
                    <td><?php echo $hasilSama ? 'True' : 'False' ?></td>
                </tr>
                <tr>
                    <td>Hasil Dari</td>
                    <td><?php echo $a ?></td>
                    <td>!=</td>
                    <td><?php echo $b ?></td>
                    <td>=</td>
                    <td><?php echo $hasilTidakSama ? 'True' : 'False' ?></td>
                </tr>
                <tr>
                    <td>Hasil Dari</td>
                    <td><?php echo $a ?></td>
                    <td><</td>
                    <td><?php echo $b ?></td>
                    <td>=</td>
                    <td><?php echo $hasilLebihKecil ? 'True' : 'False' ?></td>
                </tr>
                <tr>
                    <td>Hasil Dari</td>
                    <td><?php echo $a ?></td>
                    <td>></td>
                    <td><?php echo $b ?></td>
                    <td>=</td>
                    <td><?php echo $hasilLebihBesar ? 'True' : 'False' ?></td>
                </tr>
                <tr>
                    <td>Hasil Dari</td>
                    <td><?php echo $a ?></td>
                    <td><=</td>
                    <td><?php echo $b ?></td>
                    <td>=</td>
                    <td><?php echo $hasilLebihKecilSama ? 'True' : 'False' ?></td>
                </tr>
                <tr>
                    <td>Hasil Dari</td>
                    <td><?php echo $a ?></td>
                    <td>>=</td>
                    <td><?php echo $b ?></td>
                    <td>=</td>
                    <td><?php echo $hasilLebihBesarSama ? 'True' : 'False' ?></td>
                </tr>
            </table>
        </div>
        <div class="container">
            <table border="0">
                <tr>
                    <td>Hasil And</td>
                    <td><?php echo $a ?></td>
                    <td>&&</td>
                    <td><?php echo $b ?></td>
                    <td>=</td>
                    <td><?php echo $hasilAnd ? 'True' : 'False' ?></td>
                </tr>
                <tr>
                    <td>Hasil Or</td>
                    <td><?php echo $a ?></td>
                    <td>!=</td>
                    <td><?php echo $b ?></td>
                    <td>=</td>
                    <td><?php echo $hasilTidakSama ? 'True' : 'False' ?></td>
                </tr>
                <tr>
                    <td>Hasil Dari Not A</td>
                    <td></td>
                    <td>!</td>
                    <td><?php echo $a ?></td>
                    <td>=</td>
                    <td><?php echo $hasilNotA ? 'True' : 'False' ?></td>
                </tr>
                <tr>
                    <td>Hasil Dari Not B</td>
                    <td></td>
                    <td>!</td>
                    <td><?php echo $b ?></td>
                    <td>=</td>
                    <td><?php echo $hasilNotB ? 'True' : 'False' ?></td>
                </tr>
            </table>
        </div>
        <div class="container">
            <table border="0">
                <tr>
                    <td>Hasil Dari</td>
                    <td><?php echo $a ?></td>
                    <td>+=</td>
                    <td><?php echo $b ?></td>
                    <td>=</td>
                    <td><?php echo $a += $b ?></td>
                </tr>
                <tr>
                    <td>Hasil Dari</td>
                    <td><?php echo $a ?></td>
                    <td>-=</td>
                    <td><?php echo $b ?></td>
                    <td>=</td>
                    <td><?php echo $a -= $b ?></td>
                </tr>
                <tr>
                    <td>Hasil Dari</td>
                    <td><?php echo $a ?></td>
                    <td>*=</td>
                    <td><?php echo $b ?></td>
                    <td>=</td>
                    <td><?php echo $a *= $b ?></td>
                </tr>
                <tr>
                    <td>Hasil Dari</td>
                    <td><?php echo $a ?></td>
                    <td>/=</td>
                    <td><?php echo $b ?></td>
                    <td>=</td>
                    <td><?php echo $a /= $b ?></td>
                </tr>
                <tr>
                    <td>Hasil Dari</td>
                    <td><?php echo $a ?></td>
                    <td>%=</td>
                    <td><?php echo $b ?></td>
                    <td>=</td>
                    <td><?php echo $a %= $b ?></td>
                </tr>
            </table>
        </div>
        <div class="container">
            <table>
                <tr>
                    <td>Hasil Dari</td>
                    <td><?php echo $a ?></td>
                    <td>===</td>
                    <td><?php echo $b ?></td>
                    <td>=</td>
                    <td><?php echo ($a === $b ? 'True' : 'False') ?></td>
                </tr>
                <tr>
                    <td>Hasil Dari</td>
                    <td><?php echo $a ?></td>
                    <td>!==</td>
                    <td><?php echo $b ?></td>
                    <td>=</td>
                    <td><?php echo ($a !== $b ? 'True' : 'False') ?></td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>