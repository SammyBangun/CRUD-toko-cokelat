<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <link rel="stylesheet" href="../assets/css/input.css">
    <div class="container-fluid py-1 px-3">
        <h1 class="page-header">Tambah Data Pelanggan</h1>

        <form action="simpandatapelanggan.php" method="post">
            <div class="form-group">
                <label for="email">ID Pelanggan</label>
                <input type="text" name="id_pelanggan" class="form-control" placeholder="Masukan id pelanggan" required>
            </div>
            <div class="form-group">
                <label for="email">Nama Pelanggan</label>
                <input type="text" name="nama_pelanggan" class="form-control" placeholder="Masukan nama pelanggan" required>
            </div>
            <div class="form-group">
                <label for="email">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Masukan alamat pelanggan" required>
            </div>
            <div class="form-group">
                <label for="email">No Telepon</label>
                <input type="text" name="no_telp" class="form-control" placeholder="Masukan nomor telepon pelanggan" required>
            </div>
            <br>
            <div>
                <input type="submit" value="Simpan" class="btn btn-info">
            </div>
        </form>
    </div>
</main>