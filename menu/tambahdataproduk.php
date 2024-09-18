<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <link rel="stylesheet" href="../assets/css/input.css">
    <div class="container-fluid py-1 px-3">
        <h1 class="page-header">Tambah Data Produk</h1>

        <form action="simpandataproduk.php" method="post">
            <div class="form-group">
                <label for="email">ID Produk</label>
                <input type="text" name="id_produk" class="form-control" placeholder="Masukan id produk" required>
            </div>
            <div class="form-group">
                <label for="email">Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control" placeholder="Masukan nama produk" required>
            </div>
            <div class="form-group">
                <label for="email">Jenis Cokelat</label>
                <input type="text" name="jenis_cokelat" class="form-control" placeholder="Masukan jenis cokelat" required>
            </div>
            <div class="form-group">
                <label for="email">Harga</label>
                <input type="text" name="harga" class="form-control" placeholder="Masukan harga cokelat" required>
            </div>
            <div class="form-group">
                <label for="email">Stok</label>
                <input type="text" name="stok" class="form-control" placeholder="Masukkan banyak stok" required>
            </div>
            <br>
            <div>
                <input type="submit" value="Simpan" class="btn btn-info">
            </div>
        </form>
    </div>
</main>