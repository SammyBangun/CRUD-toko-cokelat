<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <link rel="stylesheet" href="../assets/css/input.css">
    <div class="container-fluid py-1 px-3">
        <h1 class="page-header">Tambah Data Pemasok</h1>

        <form action="simpandatapemasok.php" method="post">
            <div class="form-group">
                <label for="email">ID Pemasok</label>
                <input type="text" name="id_pemasok" class="form-control" placeholder="Masukan id pemasok" required>
            </div>
            <div class="form-group">
                <label for="email">Nama Pemasok</label>
                <input type="text" name="nama_pemasok" class="form-control" placeholder="Masukan nama pemasok" required>
            </div>
            <div class="form-group">
                <label for="email">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Masukan alamat" required>
            </div>
            <div class="form-group">
                <label for="email">No Telepon</label>
                <input type="text" name="no_telp" class="form-control" placeholder="Masukan nomor telepon" required>
            </div>
            <br>
            <div>
                <input type="submit" value="Simpan" class="btn btn-info">
            </div>
        </form>
    </div>
</main>