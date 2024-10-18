<?php
$pattern = '/[a-z]/';
$text = 'This is a SampleText';
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil!";
}

$pattern = '/[1-9]+/';
$text = 'There are 123 apples.';
if (preg_match($pattern, $text, $matches)) {
    echo "<br>Cocokkan: " . $matches[0];
} else {
    echo "<br>Tidak ada yang cocok!";
}

$pattern = '/apple/';
$replacement =  'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern,$replacement,$text);
echo "<br>".$new_text;

$pattern = '/go?d/';
$text = 'god is good.';
if (preg_match($pattern,$text,$matches)) {
        echo "<br>Cocokan: ".$matches[0] . "<br>";
}else{
    echo "Tidak ada yang cocok!";
}

$pattern = '{n, m}';
$text = 'god is good.';
if (preg_match($pattern, $text, $matches)) {
    echo "<br>Cocokan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}