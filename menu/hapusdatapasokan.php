<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <link rel="stylesheet" href="../assets/css/input.css">
    <div class="container-fluid py-1 px-3">
        <h1 class="page-header">Hapus Data Pasokan</h1>
        <?php
        include "../config/connect.php";
        $id_pasokan = $_GET['id_pasokan'];
        $sql = "SELECT * FROM tbpasokan WHERE id_pasokan='$id_pasokan'";
        $hasil = $conn->query($sql);
        while ($row = $hasil->fetch_assoc()) {
        ?>
            <form action="hapuspasokanlah.php" method="post">
                <div class="form-group">
                    <label for="email">ID Pemasok</label>
                    <input type="text" name="id_pemasok" class="form-control" value="<?php echo $row['id_pemasok'] ?>" required>
                    <label for="email">ID Produk</label>
                    <input type="text" name="id_produk" class="form-control" value="<?php echo $row['id_produk'] ?>" required>
                    <label for="email">Pasokan</label>
                    <input type="text" name="pasokan" class="form-control" value="<?php echo $row['pasokan'] ?>" required>
                    <label for="email">Tanggal</label>
                    <input type="text" name="tanggal" class="form-control" value="<?php echo $row['tanggal'] ?>" required>
                </div>
                <br>
                <h2>Apakah Anda Yakin ?</h2>
                <input type="submit" class="btn btn-danger" value="Hapus">
            </form>
        <?php } ?>
    </div>