<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $input = $_POST['input'];
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    echo "Input yang aman: " . $input;

    // Validasi email
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<br>Email yang valid: " . $email;
    } else {
        echo "<br>Email tidak valid!";
    }
}
?>