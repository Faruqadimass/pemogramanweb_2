<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Update Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Form Update Buku</h1>
        <form id="formUpdate" action="/index.php/simpan" method="POST" class="w-50">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($buku->getId()); ?>">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control" value="<?php echo htmlspecialchars($buku->getJudul()); ?>" required>
            </div>
            <div class="mb-3">
                <label for="pengarang" class="form-label">Pengarang</label>
                <input type="text" name="pengarang" id="pengarang" class="form-control" value="<?php echo htmlspecialchars($buku->getPengarang()); ?>" required>
            </div>
            <div class="mb-3">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" name="penerbit" id="penerbit" class="form-control" value="<?php echo htmlspecialchars($buku->getPenerbit()); ?>" required>
            </div>
            <div class="mb-3">
                <label for="tahun" class="form-label">Tahun</label>
                <input type="text" name="tahun" id="tahun" class="form-control" value="<?php echo htmlspecialchars($buku->getTahun()); ?>" required>
            </div>
            <div class="mb-3">
                <a href="/index.php" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
