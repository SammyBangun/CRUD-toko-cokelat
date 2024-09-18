<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <link rel="stylesheet" href="../assets/css/input.css">
    <div class="container-fluid py-1 px-3">
        <h1 class="page-header">Edit Data Pasokan</h1>
        <?php
        include "../config/connect.php";
        $id_pasokan = $_GET['id_pasokan'];
        $sql = "SELECT * FROM tbpasokan WHERE id_pasokan='$id_pasokan'";
        $hasil = $conn->query($sql);
        while ($row = $hasil->fetch_assoc()) {
        ?>
            <form action="updatedatapasokan.php" method="post">
                <div class="form-group">
                    <label for="email">ID Pasokan</label>
                    <input type="hidden" name="id_pasokan" class="form-control" value="<?php echo $row['id_pasokan'] ?>">
                    <input type="text" class="form-control" value="<?php echo $row['id_pasokan'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="email">ID Pemasok</label>
                    <select class="form-control" name="id_pemasok" required>
                        <option value="">..::PILIH::..</option>
                        <?php
                        $sql = "SELECT * FROM tbpemasok ORDER BY id_pemasok";
                        $hasil = $conn->query($sql);
                        while ($row1 = $hasil->fetch_assoc()) {
                            if ($row['id_pemasok'] == $row1['id_pemasok']) {
                                echo  "<option selected value=$row1[id_pemasok]>$row1[nama_pemasok]</option>";
                            } else {
                                echo  "<option value=$row1[id_pemasok]>$row1[nama_pemasok]</option>";
                            }
                        } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" value="<?php echo $row['tanggal'] ?>" required>
                </div>
                <br>
                <div>
                    <input type="submit" class="btn btn-info" value="Update">
                </div>

            </form>
        <?php } ?>
    </div>
</main>