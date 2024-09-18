<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <link rel="stylesheet" href="../assets/css/input.css">
    <div class="container-fluid py-1 px-3">
        <h1 class="page-header">Edit Data Produk</h1>
        <?php
        include "../config/connect.php";
        $id_produk = $_GET['id_produk'];
        $sql = "SELECT * FROM tbproduk WHERE id_produk='$id_produk'";
        $hasil = $conn->query($sql);
        while ($row = $hasil->fetch_assoc()) {
        ?>
            <form action="updatedataproduk.php" method="post">
                <div class="form-group">
                    <label for="email">ID Produk</label>
                    <input type="hidden" name="id_produk" class="form-control" value="<?php echo $row['id_produk'] ?>">
                    <input type="text" class="form-control" value="<?php echo $row['id_produk'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="email">Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" value="<?php echo $row['nama_produk'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Jenis Cokelat</label>
                    <input type="text" name="jenis_cokelat" class="form-control" value="<?php echo $row['jenis_cokelat'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Harga</label>
                    <input type="text" name="harga" class="form-control" value="<?php echo $row['harga'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Stok</label>
                    <input type="text" name="stok" class="form-control" value="<?php echo $row['stok'] ?>" required>
                </div>
                <br>
                <div>
                    <input type="submit" class="btn btn-info" value="Update">
                </div>

            </form>
        <?php } ?>
    </div>
</main>