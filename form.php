<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>
    <h1>Form Mahasiswa</h1>
    <form action="" method="post">
        Nama:<br>
        <input type="text" name="nama" size="30"><br><br>
        NIM:<br>
        <input type="text" name="nim" size="30"><br><br>
        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nama']) && !empty($_POST['nim'])) {
        // Ambil data yang diinputkan
        $nama = htmlspecialchars($_POST['nama']);
        $nim = htmlspecialchars($_POST['nim']);

        // Menampilkan hasil input
        echo "<h3>Hasil Input:</h3>";
        echo "Nama: " . $nama . "<br>";
        echo "NIM: " . $nim . "<br>";
    }
    ?>
</body>
</html>
