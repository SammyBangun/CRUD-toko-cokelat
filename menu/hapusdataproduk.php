<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <link rel="stylesheet" href="../assets/css/input.css">
    <div class="container-fluid py-1 px-3">
        <h1 class="page-header">Hapus Data Produk</h1>
        <?php
        include "../config/connect.php";
        $id_produk = $_GET['id_produk'];
        $sql = "SELECT * FROM tbproduk WHERE id_produk='$id_produk'";
        $hasil = $conn->query($sql);
        while ($row = $hasil->fetch_assoc()) {
        ?>
            <form action="hapusproduklah.php" method="post">
                <div class="form-group">
                    <label for="email">ID Produk</label>
                    <input type="text" name="id_produk" class="form-control" value="<?php echo $row['id_produk'] ?>" required>
                    <label for="email">Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" value="<?php echo $row['nama_produk'] ?>" " required>
                    <label for=" email">Jenis Cokelat</label>
                    <input type="text" name="jenis_cokelat" class="form-control" value="<?php echo $row['jenis_cokelat'] ?>" required>
                    <label for="email">Harga</label>
                    <input type="text" name="harga" class="form-control" value="<?php echo $row['harga'] ?>" required>
                    <label for="email">Stok</label>
                    <input type="text" name="stok" class="form-control" value="<?php echo $row['stok'] ?>" required>
                </div>
                <br>
                <h2>Apakah Anda Yakin ?</h2>
                <input type="submit" class="btn btn-danger" value="Hapus">
            </form>
        <?php } ?>
    </div>