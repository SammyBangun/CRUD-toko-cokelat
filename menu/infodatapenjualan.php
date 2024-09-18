<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">


    <div class="container-fluid py-1 px-3">
        <h1 class="page-header">Data Penjualan</h1>
        <h4>Silahkan masukkan data yang akan digunakan untuk penjualan !</h4>
        <?php
        if (isset($_GET['sukses']) == 'sukses') {
            echo '<h2 class="alert alert-success">Berhasil Menyimpan/Update Data Penjualan</h2>';
        } elseif (isset($_GET['hapus']) == 'hapus') {
            echo '<h2 class="alert alert-success">Berhasil Menghapus Data Penjualan</h2>';
        }
        ?>
        <h1 class="sub-header">
            <a class="btn btn-lg btn-primary" href="?data=tambahpenjualan">Tambah Data</a>
        </h1>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th width="5%">NO</th>
                        <th>ID TRANSAKSI</th>
                        <th>TANGGAL</th>
                        <th>ID PELANGGAN</th>
                        <th>TOTAL</th>
                        <th width="5%">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "../config/connect.php";


                    $nom = 1;
                    $sql = "SELECT id_transaksi, tanggal, id_pelanggan, total FROM tbpenjualan";
                    $hasil = $conn->query($sql);
                    while ($row = $hasil->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $nom; ?></td>
                            <td><?php echo $row["id_transaksi"]; ?></td>
                            <td><?php echo $row["tanggal"]; ?></td>
                            <td><?php echo $row["id_pelanggan"]; ?></td>
                            <td><?php echo $row["total"]; ?></td>
                            <td>
                                <a class="btn btn-primary" href="?data=editpenjualan&id_transaksi=<?php echo $row['id_transaksi'] ?>">Edit</a>
                                <a class="btn btn-danger" href="?data=hapuspenjualan&id_transaksi=<?php echo $row['id_transaksi'] ?>">Hapus</a>
                            </td>
                        </tr>
                    <?php $nom++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>