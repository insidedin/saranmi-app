<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengaduan</title>
</head>
<body>
    <h1>Tambah Pengaduan</h1>
    <form action="/pengaduan/store" method="post">
        <label for="perihal">Perihal:</label>
        <input type="text" name="perihal" id="perihal" required>
        <br>
        <label for="deskripsi">Deskripsi:</label>
        <textarea name="deskripsi" id="deskripsi" required></textarea>
        <br>
        <label for="pengadu">Pengadu:</label>
        <input type="text" name="pengadu" id="pengadu" required>
        <br>
        <label for="gambar">Gambar:</label>
        <input type="text" name="gambar" id="gambar" required>
        <br>
        <label for="tanggal_pengaduan">Tanggal Pengaduan:</label>
        <input type="date" name="tanggal_pengaduan" id="tanggal_pengaduan" required>
        <br>
        <label for="status">Status:</label>
        <input type="text" name="status" id="status" required>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
