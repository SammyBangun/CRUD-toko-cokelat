<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <link rel="stylesheet" href="../assets/css/input.css">
    <div class="container-fluid py-1 px-3">
        <h1 class="page-header">Tambah Data Penjualan</h1>

        <form action="simpandatapenjualan.php" method="post">
            <div class="form-group">
                <label for="email">ID Transaksi</label>
                <input type="text" name="id_transaksi" class="form-control" placeholder="Masukan id transaksi" required>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" placeholder="Masukan tanggal" required>
            </div>

            <div class="form-group">
                <label for="id_pelanggan" class="form-control">Pelanggan</label>
                <select name="id_pelanggan" id="id_pelanggan" class="form-control form-control-lg" required>
                    <option selected>--Pilih Pelanggan--</option>

                    <?php
                    $servername = "localhost";
                    $username = "id21619223_3199344_kahlil";
                    $password = "Kahlil#8";
                    $mydb   = "id21619223_db_tokocokelatkr";
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $mydb);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Koneksi Gagal " . $conn->connect_error);
                    }
                    $sql = "SELECT * FROM tbpelanggan ORDER BY id_pelanggan";
                    $hasil = $conn->query($sql);
                    while ($row = $hasil->fetch_assoc()) {
                        echo  "<option value=$row[id_pelanggan]>$row[nama_pelanggan]</option>";
                    } ?>

                </select>
            </div>
            <br>
            <div>
                <input type="submit" value="Simpan" class="btn btn-info">
            </div>
        </form>
    </div>
</main>