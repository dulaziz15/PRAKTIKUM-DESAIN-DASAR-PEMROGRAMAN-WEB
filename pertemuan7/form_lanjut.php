<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Form dengan php</title>
</head>
<body>
    <h2>Form Contoh</h2>
    <form method="POST" action="proses_lanjut.php">
        
    <label for="buah">Pilih buah:</label>
    <select name="buah" id="buah">
        <option value="apel">Apel</option>
        <option value="pisang">Pisang</option>
        <option value="mangga">Mangga</option>
        <option value="jeruk">Jeruk</option>
    </select>

    <br>

    <label for="Pilih Warna Favorit:"></label><br>
    <input type="checkbox" name="warna[]" value="merah"> Merah <br>
    <input type="checkbox" name="warna[]" value="biru"> Biru <br>
    <input type="checkbox" name="warna[]" value="hijau"> Hijau <br>

    <br>

    <label for="Pilih Jenis Kelamin:"></label><br>
    <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki <br>
    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan <br>

    <br>

    <input type="submit" value="submit">
    
    </form>
    
</body>
</html>
