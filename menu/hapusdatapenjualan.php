<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <link rel="stylesheet" href="../assets/css/input.css">
    <div class="container-fluid py-1 px-3">
        <h1 class="page-header">Hapus Data Penjualan</h1>
        <?php
        include "../config/connect.php";
        $id_transaksi = $_GET['id_transaksi'];
        $sql = "SELECT * FROM tbpenjualan WHERE id_transaksi='$id_transaksi'";
        $hasil = $conn->query($sql);
        while ($row = $hasil->fetch_assoc()) {
        ?>
            <form action="hapuspenjualanlah.php" method="post">
                <div class="form-group">
                    <label for="email">ID Transaksi</label>
                    <input type="text" name="id_transaksi" class="form-control" value="<?php echo $row['id_transaksi'] ?>" required>
                    <label for="email">Tanggal</label>
                    <input type="text" name="tanggal" class="form-control" value="<?php echo $row['tanggal'] ?>" " required>
                    <label for=" email">Pelanggan</label>
                    <input type="text" name="id_pelanggan" class="form-control" value="<?php echo $row['id_pelanggan'] ?>" required>
                </div>
                <br>
                <h3>Apakah Anda Yakin ?</h3>
                <h4>Data detail juga akan terhapus !!!</h4>
                <input type="submit" class="btn btn-danger" value="Hapus">
            </form>
        <?php } ?>
    </div>