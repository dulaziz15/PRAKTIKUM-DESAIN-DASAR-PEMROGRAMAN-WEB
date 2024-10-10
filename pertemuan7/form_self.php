<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form input PHP</title>
</head>
<body>
    <h2>Form Input PHP</h2>
    <?php
        $namaErr = "";
        $nama = "";

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            if(empty($_POST["nama"])) {
                $namaErr = "Nama Harus diisi";
            } else {
                $nama = $_POST["nama"];
                echo "Data berhasil disimpan";
            }
        }
    ?>
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="<?= $nama; ?>">
        <span class="error"><?= $namaErr; ?></span><br><br>

        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>