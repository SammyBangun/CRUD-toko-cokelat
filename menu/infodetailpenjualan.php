<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">


    <div class="container-fluid py-1 px-3">
        <h1 class="page-header">Detail Penjualan</h1>
        <h4>Masukkan penjualan produk 1 per 1</h4>
        <?php
        if (isset($_GET['sukses']) == 'sukses') {
            echo '<h2 class="alert alert-success">Berhasil Menyimpan/Update Data Penjualan</h2>';
        } elseif (isset($_GET['hapus']) == 'hapus') {
            echo '<h2 class="alert alert-success">Berhasil Menghapus Data Penjualan</h2>';
        }
        ?>
        <h1 class="sub-header">
            <a class="btn btn-lg btn-primary" href="?data=tambahdetailpenjualan">Tambah Data</a>
        </h1>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th width="2%">NO</th>
                        <th>ID</th>
                        <th>ID TRANSAKSI</th>
                        <th>ID PRODUK</th>
                        <th>HARGA</th>
                        <th>KUANTITAS</th>
                        <th width="2%">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "../config/connect.php";


                    $nom = 1;
                    $sql = "SELECT id, id_transaksi, id_produk, harga, kuantitas FROM tbpenjualan_dtl";
                    $hasil = $conn->query($sql);
                    while ($row = $hasil->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $nom; ?></td>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["id_transaksi"]; ?></td>
                            <td><?php echo $row["id_produk"]; ?></td>
                            <td><?php echo $row["harga"]; ?></td>
                            <td><?php echo $row["kuantitas"]; ?></td>
                            <td>
                                <a class="btn btn-danger" href="?data=hapusdetailpenjualan&id=<?php echo $row['id'] ?>">Hapus</a>
                            </td>
                        </tr>
                    <?php $nom++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>