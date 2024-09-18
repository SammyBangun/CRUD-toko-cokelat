<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <link rel="stylesheet" href="../assets/css/input.css">
    <div class="container-fluid py-1 px-3">
        <h1 class="page-header">Edit Data Pelanggan</h1>
        <?php
        include "../config/connect.php";
        $id_pelanggan = $_GET['id_pelanggan'];
        $sql = "SELECT * FROM tbpelanggan WHERE id_pelanggan='$id_pelanggan'";
        $hasil = $conn->query($sql);
        while ($row = $hasil->fetch_assoc()) {
        ?>
            <form action="updatedatapelanggan.php" method="post">
                <div class="form-group">
                    <label for="email">ID Pelanggan</label>
                    <input type="hidden" name="id_pelanggan" class="form-control" value="<?php echo $row['id_pelanggan'] ?>">
                    <input type="text" class="form-control" value="<?php echo $row['id_pelanggan'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="email">Nama Pelanggan</label>
                    <input type="text" name="nama_pelanggan" class="form-control" value="<?php echo $row['nama_pelanggan'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?php echo $row['alamat'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">No Telepon</label>
                    <input type="text" name="no_telp" class="form-control" value="<?php echo $row['no_telp'] ?>" required>
                </div>
                <br>
                <div>
                    <input type="submit" class="btn btn-info" value="Update">
                </div>

            </form>
        <?php } ?>
    </div>
</main>