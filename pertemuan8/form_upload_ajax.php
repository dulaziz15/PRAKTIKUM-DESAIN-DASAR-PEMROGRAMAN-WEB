<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unggah File Dokumen</title>
</head>
<body>
    <form action="upload_ajax.php" method="POST">
        <input type="file" name="file" id="file">
        <input type="submit" value="Unggah" name="submit">
    </form>
    <div id="status"></div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="upload.js"></script>
</body>
</html>