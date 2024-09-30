<?php
// function tampilkanHaloDunia() {
//     echo "Halo dunia! <br>";

//     tampilkanHaloDunia();
// }

// tampilkanHaloDunia();

// for ($i = 1; $i <= 25; $i++) {
//     echo "Perulangan ke-{$i} <br>";
// }

// function tampilkanAngka (int $jumlah, int $indeks = 1) {
//     echo "Perulangan ke-{$indeks} <br>";

//     if($indeks < $jumlah) {
//         tampilkanAngka($jumlah, $indeks + 1);
//     }
// }
// tampilkanAngka(20);

$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" =>
                [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama"=> "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],
];

// CARA SULIT
// function tampilkanMenuBertingkat(array $menu) {
//     echo "<ul>";
//     foreach ($menu as $key => $item) {
//         echo "<li>{$item['nama']}</li>";
//         if(isset($item["subMenu"])) {
//             echo "<ul>";
//             foreach ($item['subMenu'] as $key2 => $value2) {
//                 echo "<li>{$value2['nama']}</li>";
//                 if(isset($value2["subMenu"])) {
//                     echo "<ul>";
//                     foreach ($value2["subMenu"] as $key3 => $value3) {
//                         echo "<li>{$value3['nama']}</li>";
//                     }
//                     echo "</ul>";
//                 }
//             }
//         echo "</ul>";
//         }
//     }
//     echo "</ul>";
// }

function tampilkanMenuBertingkat(array $menu) {
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>{$item['nama']}</li>";
        if(isset($item["subMenu"])) {
            tampilkanMenuBertingkat($item["subMenu"]);
        }
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);

?>