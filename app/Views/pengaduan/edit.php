<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengaduan</title>
</head>
<body>
    <h1>Edit Pengaduan</h1>
    <form action="/pengaduan/update/<?= $pengaduan['id'] ?>" method="post">
        <label for="perihal">Perihal:</label>
        <input type="text" name="perihal" id="perihal" value="<?= $pengaduan['perihal'] ?>" required>
        <br>
        <label for="deskripsi">Deskripsi:</label>
        <textarea name="deskripsi" id="deskripsi" required><?= $pengaduan['deskripsi'] ?></textarea>
        <br>
        <label for="pengadu">Pengadu:</label>
        <input type="text" name="pengadu" id="pengadu" value="<?= $pengaduan['pengadu'] ?>" required>
        <br>
        <label for="gambar">Gambar:</label>
        <input type="text" name="gambar" id="gambar" value="<?= $pengaduan['gambar'] ?>" required>
        <br>
        <label for="tanggal_pengaduan">Tanggal Pengaduan:</label>
        <input type="date" name="tanggal_pengaduan" id="tanggal_pengaduan" value="<?= $pengaduan['tanggal_pengaduan'] ?>" required>
        <br>
        <label for="status">Status:</label>
        <input type="text" name="status" id="status" value="<?= $pengaduan['status'] ?>" required>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
