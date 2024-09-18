<?php
include "../config/connect.php";

?>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <link rel="stylesheet" href="../assets/css/input.css">
    <script src="../functions/limit0.js
"></script>
    <div class="container-fluid py-1 px-3">
        <h1 class="page-header">Tambah Data Pasokan</h1>

        <form action="simpandatapasokan.php" method="post">
            <div class="form-group">
                <label for="email">ID Pemasok</label>
                <select name="id_pemasok" id="id_pemasok" class="form-control form-control-lg" required>
                    <option selected>--Pilih ID Pemasok--</option>
                    <?php
                    $sql = "SELECT * FROM tbpemasok ORDER BY id_pemasok";
                    $hasil = $conn->query($sql);
                    while ($row = $hasil->fetch_assoc()) {
                        echo  "<option value=$row[id_pemasok]>$row[nama_pemasok]</option>";
                    } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="email">ID Produk</label>
                <select name="id_produk" id="id_produk" class="form-control form-control-lg" required>
                    <option selected>--Pilih ID Produk--</option>
                    <?php
                    $sql = "SELECT * FROM tbproduk ORDER BY id_produk";
                    $hasil = $conn->query($sql);
                    while ($row = $hasil->fetch_assoc()) {
                        echo  "<option value=$row[id_produk]>$row[nama_produk]</option>";
                    } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Pasokan</label>
                <input type="number" name="pasokan" oninput="limitToZero(this)" class="form-control" placeholder="Masukan banyak pasokan" required>
            </div>
            <div class="form-group">
                <label for="email">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" placeholder="Masukan tanggal" required>
            </div>
            <br>
            <h3>APAKAH ANDA YAKIN ?</h3>
            <h4>Banyak pasokan tidak bisa diedit !</h4>
            <div>
                <input type="submit" value="Simpan" class="btn btn-info">
            </div>
        </form>
    </div>
</main>