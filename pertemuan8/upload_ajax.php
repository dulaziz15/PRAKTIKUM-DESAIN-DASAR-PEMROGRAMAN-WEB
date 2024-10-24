<?php
// Periksa apakah ada file yang diunggah
if (isset($_FILES['file'])) {
    // Inisialisasi array untuk menyimpan pesan error
    $errors = array();

    // Ambil informasi tentang file yang diunggah
    $fileName = $_FILES['file']['name'];
    $fileSize = $_FILES['file']['size'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileType = $_FILES['file']['type'];
    @$fileExt = strtolower("" . end(explode('.', $_FILES['file']['name'])) . "");

    // Tentukan ekstensi file yang diizinkan
    $allowedExtensions = ['pdf', 'doc', 'docx', 'txt'];

    // Validasi ekstensi file
    if (!in_array($fileExt, $allowedExtensions) === false) {
        $errors[] = 'Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, atau TXT.';
    }

    // Validasi ukuran file (maksimal 2 MB)
    if ($fileSize > 2097152) {
        $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB.';
    }

    // Jika tidak ada error, pindahkan file ke direktori tujuan
    if (empty($errors) == true) {
        move_uploaded_file($fileTmpName, "documents/" . $fileName);
        echo "File berhasil diunggah.";
    } else {
        // Tampilkan pesan error jika ada
        echo implode(", ", $errors);
    }
}