<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="upload.css">
    <title>Unggah file dokumen</title>
</head>
<body>
    <div class="upload-form-container">
        <h2>Unggah File Dokumen</h2>
        <form id="upload-form" action="upload.php" method="post" enctype="multipart/form-data">
            <div class="file-input-container">
                <input type="file" name="file[]" id="file" class="file-input" multiple>
                <label for="file" class="file-label">Piih File</label>
            </div>
            <button type="submit" name="submit" class="upload-button" id="upload-button" 
            disabled>Unggah</button>
        </form>
        <div id="status" class="upload-status"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="upload.js"></script>
</body>
</html>

