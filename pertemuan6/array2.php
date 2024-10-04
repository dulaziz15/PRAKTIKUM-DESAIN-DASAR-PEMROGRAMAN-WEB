<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array PHP</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            margin-top: 100px;
            font-size: medium;
        }

        .flex {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            width: auto;
            height: max-content;
            box-shadow: 1px 1px 8px grey;
            border-radius: 20px;
            overflow: hidden;
        }

        .data {
            display: block;
            align-items: center;
        }

        .judul_kolom {
            font-weight: bold;
        }

        td {
            padding: 10px;
        }

        h3 {
            text-align: center;
        }


        img.jti{
            object-fit: cover;
            width: auto;
            height: auto;
        }

        .foto {

        }

        .img {
            background-image: url('ombak.png');
            background-position: bottom;
        }

        .ombak {
            position: absolute;
        }
    </style>
</head>

<body>
    <?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan'
    ];
    ?>
    <div class="container">
        <div class="header">

        </div>
        <div class="card">
            <img src="jti.png" alt="" class="jti">
            <div class="flex">
                <div class="foto">
                    <img class="foto" src="icon.png" alt="" width="250px">
                </div>
                <div class="data">
                    <h3>BIODATA DOSEN</h3>
                    <table>
                        <tr>
                            <td class="judul_kolom">NAMA</td>
                            <td>:</td>
                            <td><?= $Dosen['nama'] ?></td>
                        </tr>
                        <tr>
                            <td class="judul_kolom">DOMISILI</td>
                            <td>:</td>
                            <td><?= $Dosen['domisili'] ?></td>
                        </tr>
                        <tr>
                            <td class="judul_kolom">JENIS KELAMIN</td>
                            <td>:</td>
                            <td><?= $Dosen['jenis_kelamin'] ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>