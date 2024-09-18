<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <link rel="stylesheet" href="../assets/css/input.css">
    <div class="container-fluid py-1 px-3">
        <h1 class="page-header">Edit Data Pemasok</h1>
        <?php
        include "../config/connect.php";

        // Check connection
        if ($conn->connect_error) {
            die("Koneksi Gagal " . $conn->connect_error);
        }
        $id_pemasok = $_GET['id_pemasok'];
        $sql = "SELECT * FROM tbpemasok WHERE id_pemasok='$id_pemasok'";
        $hasil = $conn->query($sql);
        while ($row = $hasil->fetch_assoc()) {
        ?>
            <form action="updatedatapemasok.php" method="post">
                <div class="form-group">
                    <label for="email">ID Pemasok</label>
                    <input type="hidden" name="id_pemasok" class="form-control" value="<?php echo $row['id_pemasok'] ?>">
                    <input type="text" class="form-control" value="<?php echo $row['id_pemasok'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="email">Nama Pemasok</label>
                    <input type="text" name="nama_pemasok" class="form-control" value="<?php echo $row['nama_pemasok'] ?>" required>
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