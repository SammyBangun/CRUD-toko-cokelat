<?php
include "../config/connect.php";

?>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <link rel="stylesheet" href="../assets/css/input.css">
    <script src="../functions/limit0.js
"></script>
    <div class="container-fluid py-1 px-3">
        <h1 class="page-header">Penjualan</h1>
        <br>

        <form action="simpandetailpenjualan.php" method="post">
            <div class="form-group">
                <label for="email">ID Transaksi</label>
                <select name="id_transaksi" id="id_transaksi" class="form-control form-control-lg" required>
                    <option selected>--Pilih ID Transaksi--</option>
                    <?php
                    $sql = "SELECT * FROM tbpenjualan ORDER BY id_transaksi";
                    $hasil = $conn->query($sql);
                    while ($row = $hasil->fetch_assoc()) {
                        echo  "<option value=$row[id_transaksi]>$row[id_transaksi]</option>";
                    } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal">ID Produk</label>
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
                <label for="harga" class="form-control">Harga</label>
                <input type="text" id="harga" name="harga" class="form-control" placeholder="harga dari produk" readonly>
            </div>

            <div class="form-group">
                <label for="kuantitas" class="form-control">Kuantitas</label>
                <input type="number" id="kuantitas" name="kuantitas" oninput="limitToZero(this)" class="form-control" placeholder="masukkan banyaknya kuantitas" required>
            </div>

            <br>
            <h3>
                APAKAH ANDA YAKIN ?
            </h3>
            <h4>
                Perubahan tidak akan bisa di edit !!!
            </h4>
            <div>
                <input type="submit" value="Simpan" class="btn btn-info">
            </div>
        </form>
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- Add this script after including jQuery -->
<script>
    $(document).ready(function() {
        // Event listener for changes in the selected product
        $('#id_produk').change(function() {
            var id_produk = $(this).val();

            // Ajax request to get the price based on the selected product
            $.ajax({
                type: 'POST',
                url: '../functions/get_price.php', // Create a new PHP file to handle this request
                data: {
                    id_produk: id_produk
                },
                success: function(response) {
                    // Update the price input field with the retrieved price
                    $('#harga').val(response);
                },
                error: function() {
                    alert('Error fetching price.');
                }
            });
        });
    });
</script>

<!-- Your existing HTML form -->
<!-- ... -->