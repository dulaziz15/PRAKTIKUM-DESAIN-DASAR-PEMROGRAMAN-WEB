<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas ARRAY</title>
    <link rel="stylesheet" href="style.css">
</head>
<script src="jquery-3.7.1.js"></script>

<script>
    $(document).ready(function() {
        $(".header").click(function() {
            $(".data").slideToggle("slow");
        });
    });
</script>

<body>
    <?php
    $DataSiswa = [
        [
            "nama" => "Andi",
            "umur" => 15,
            "kelas" => "10A",
            "alamat" => "Malang"
        ],
        [
            "nama" => "Siti",
            "umur" => 16,
            "kelas" => "10B",
            "alamat" => "Batu"
        ],
        [
            "nama" => "Budi",
            "umur" => 15,
            "kelas" => "10A",
            "alamat" => "Dinoyo"
        ],
        [
            "nama" => "Anton",
            "umur" => 25,
            "kelas" => "15A",
            "alamat" => "Dinoyo"
        ]
    ];
    ?>
    <h1>Data Siswa dan Rata-rata Umur</h1>
    <div class="container">
        <div class="main">
            <div class="header">
                <h3>Klik untuk melihat database</h3>
            </div>
            <div class="data">
                <table>
                    <thead>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Kelas</th>
                        <th>Alamat</th>
                    </thead>
                    <tbody>
                        <?php
                        function rataRataUmur(array $DataSiswa)
                        {
                            global $rataRata;
                            foreach ($DataSiswa as $item) {
                                echo "<tr>";
                                echo "<td>{$item['nama']}</td>";
                                echo "<td>{$item['umur']}</td>";
                                echo "<td>{$item['kelas']}</td>";
                                echo "<td>{$item['alamat']}</td>";
                                echo "</tr>";
                                $rataRata += $item['umur'];
                            }
                            $rataRata = $rataRata / count($DataSiswa);
                        }
                        rataRataUmur($DataSiswa);
                        ?>
                    </tbody>
                </table>
                <h2>
                    Rata-rata Umur Siswa: <?= $rataRata ?> Tahun
                </h2>
            </div>
        </div>
    </div>
</body>

</html>