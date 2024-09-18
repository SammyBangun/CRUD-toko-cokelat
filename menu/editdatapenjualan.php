<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <link rel="stylesheet" href="../assets/css/input.css">
    <div class="container-fluid py-1 px-3">
        <h1 class="page-header">Edit Data Penjualan</h1>
        <?php
        include "../config/connect.php";
        $id_transaksi = $_GET['id_transaksi'];
        $sql = "SELECT * FROM tbpenjualan WHERE id_transaksi='$id_transaksi'";
        $hasil = $conn->query($sql);
        while ($row = $hasil->fetch_assoc()) {
        ?>
            <form action="updatedatapenjualan.php" method="post">
                <div class="form-group">
                    <label for="email">ID Transaksi</label>
                    <input type="hidden" name="id_transaksi" class="form-control" value="<?php echo $row['id_transaksi'] ?>">
                    <input type="text" class="form-control" value="<?php echo $row['id_transaksi'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="email">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" value="<?php echo $row['tanggal'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Pelanggan</label>
                    <select class="form-control" name="id_pelanggan" required>
                        <option value="">..::PILIH::..</option>
                        <?php
                        $sql = "SELECT * FROM tbpelanggan ORDER BY id_pelanggan";
                        $hasil = $conn->query($sql);
                        while ($row1 = $hasil->fetch_assoc()) {
                            if ($row['id_pelanggan'] == $row1['id_pelanggan']) {
                                echo  "<option selected value=$row1[id_pelanggan]>$row1[nama_pelanggan]</option>";
                            } else {
                                echo  "<option value=$row1[id_pelanggan]>$row1[nama_pelanggan]</option>";
                            }
                        } ?>
                    </select>
                </div>
                <br>
                <div>
                    <input type="submit" class="btn btn-info" value="Update">
                </div>

            </form>
        <?php } ?>
    </div>
</main>