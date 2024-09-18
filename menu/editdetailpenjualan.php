<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
<link rel="stylesheet"     href="../assets/css/input.css"
>
<div class="container-fluid py-1 px-3">
            <h1 class="page-header">Edit Detail Penjualan</h1>
            <?php
            include "../config/connect.php";           <input type="text" class="form-control" value="<?php echo $row['id_transaksi'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="email">ID Produk</label>
                        <select class="form-control" name="id_produk" required>
                            <option value="">..::PILIH::..</option>
                            <?php
                            $sql = "SELECT * FROM tbproduk ORDER BY id_produk";
                            $hasil = $conn->query($sql);
                            while ($row1 = $hasil->fetch_assoc()) {
                                if ($row['id_produk'] == $row1['id_produk']) {
                                    echo  "<option selected value=$row1[id_produk]>$row1[nama_produk]</option>";
                                } else {
                                    echo  "<option value=$row1[id_produk]>$row1[nama_produk]</option>";
                                }
                            } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Harga</label>
                        <input type="text" name="harga" class="form-control" value="<?php echo $row['harga'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Kuantitas</label>
                        <input type="number" name="kuantitas" class="form-control" value="<?php echo $row['kuantitas'] ?>" required>
                    </div>
                    <br>
                    <div>
                    <input type="submit" class="btn btn-info" value="Update">
                    </div>

                </form>
            <?php } ?>
        </div>
    </main>    