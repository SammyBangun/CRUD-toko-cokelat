<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <link rel="stylesheet" href="../assets/css/input.css">
    <div class="container-fluid py-1 px-3">
        <h1 class="page-header">Hapus Data Pelanggan</h1>
        <?php
        include "../config/connect.php";
        $id_pelanggan = $_GET['id_pelanggan'];
        $sql = "SELECT * FROM tbpelanggan WHERE id_pelanggan='$id_pelanggan'";
        $hasil = $conn->query($sql);
        while ($row = $hasil->fetch_assoc()) {
        ?>
            <form action="hapuspelangganlah.php" method="post">
                <div class="form-group">
                    <label for="email">ID Pelanggan</label>
                    <input type="text" name="id_pelanggan" class="form-control" value="<?php echo $row['id_pelanggan'] ?>" required>
                    <label for="email">Nama Pelanggan</label>
                    <input type="text" name="nama_pelanggan" class="form-control" value="<?php echo $row['nama_pelanggan'] ?>" required>
                    <label for="email">Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?php echo $row['alamat'] ?>" required>
                    <label for="email">No Telepon</label>
                    <input type="text" name="no_telp" class="form-control" value="<?php echo $row['no_telp'] ?>" required>
                </div>
                <br>
                <h2>Apakah Anda Yakin ?</h2>
                <input type="submit" class="btn btn-danger" value="Hapus">
            </form>
        <?php } ?>
    </div>