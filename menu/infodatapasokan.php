<?php

?>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">


    <div class="container-fluid py-1 px-3 ">
        <h1 class="page-header">Data Pasokan</h1>
        <?php
        if (isset($_GET['sukses']) == 'sukses') {
            echo '<h2 class="alert alert-success">Berhasil Menyimpan/Update Data Pasokan</h2>';
        } elseif (isset($_GET['hapus']) == 'hapus') {
            echo '<h2 class="alert alert-success">Berhasil Menghapus Data Pasokan</h2>';
        }
        ?>
        <h1 class="sub-header">
            <a class="btn btn-lg btn-primary" href="?data=tambahpasokan">Tambah Data</a>
        </h1>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th width="5%">NO</th>
                        <th>ID PASOKAN</th>
                        <th>ID PEMASOK</th>
                        <th>ID PRODUK</th>
                        <th>BANYAK PASOKAN</th>
                        <th>TANGGAL</th>
                        <th width="5%">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "../config/connect.php";


                    $nom = 1;
                    $sql = "SELECT * FROM tbpasokan";
                    $hasil = $conn->query($sql);
                    while ($row = $hasil->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $nom; ?></td>
                            <td><?php echo $row["id_pasokan"]; ?></td>
                            <td><?php echo $row["id_pemasok"]; ?></td>
                            <td><?php echo $row["id_produk"]; ?></td>
                            <td><?php echo $row["pasokan"]; ?></td>
                            <td><?php echo $row["tanggal"]; ?></td>
                            <td>
                                <a class="btn btn-primary" href="?data=editpasokan&id_pasokan=<?php echo $row['id_pasokan'] ?>">Edit</a>
                                <a class="btn btn-danger" href="?data=hapuspasokan&id_pasokan=<?php echo $row['id_pasokan'] ?>">Hapus</a>
                            </td>
                        </tr>
                    <?php $nom++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>