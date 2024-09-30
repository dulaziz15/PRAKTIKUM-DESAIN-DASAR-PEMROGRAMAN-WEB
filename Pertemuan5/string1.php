<?php
$loremIpsum = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
    Cupiditate ab eum id consectetur magnam cumque accusamus non 
    blanditiis quos illum vitae, exercitationem quia animi, facilis ad. 
    Architecto vero velit delectus voluptas ducimus dolorum est cupiditate 
    ipsum nostrum sunt provident, voluptate.";

    echo "<p>{$loremIpsum}</p>";
    echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
    echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
    echo "<p>" . strtoupper($loremIpsum) . "</p>";
    echo "<p>" . strtolower($loremIpsum) . "</p>";
?>