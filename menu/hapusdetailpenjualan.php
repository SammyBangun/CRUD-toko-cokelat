<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <link rel="stylesheet" href="../assets/css/input.css">
    <div class="container-fluid py-1 px-3">
        <h1 class="page-header">Hapus Detail Penjualan</h1>
        <?php
        include "../config/connect.php";
        $id = $_GET['id'];
        $sql = "SELECT * FROM tbpenjualan_dtl WHERE id='$id'";
        $hasil = $conn->query($sql);
        while ($row = $hasil->fetch_assoc()) {
        ?>
            <form action="hapusdetaillah.php" method="post">
                <div class="form-group">
                    <label for="email">ID Transaksi</label>
                    <input type="text" name="id_transaksi" class="form-control" value="<?php echo $row['id_transaksi'] ?>" required>
                    <label for="email">ID Produk</label>
                    <input type="text" name="id_produk" class="form-control" value="<?php echo $row['id_produk'] ?> " required>
                    <label for="email">Harga</label>
                    <input type="text" name="harga" class="form-control" value="<?php echo $row['harga'] ?>" required>
                    <label for="email">Kuantitas</label>
                    <input type="text" name="kuantitas" class="form-control" value="<?php echo $row['kuantitas'] ?>" required>
                </div>
                <br>
                <h2>Apakah Anda Yakin ?</h2>
                <input type="submit" class="btn btn-danger" value="Hapus">
            </form>
        <?php } ?>
    </div>