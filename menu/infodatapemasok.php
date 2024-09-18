<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">


    <div class="container-fluid py-1 px-3 ">
        <h1 class="page-header">Data Pemasok</h1>
        <?php
        if (isset($_GET['sukses']) == 'sukses') {
            echo '<h2 class="alert alert-success">Berhasil Menyimpan/Update Data Pemasok</h2>';
        } elseif (isset($_GET['hapus']) == 'hapus') {
            echo '<h2 class="alert alert-success">Berhasil Menghapus Data Pemasok</h2>';
        }
        ?>
        <h1 class="sub-header">
            <a class="btn btn-lg btn-primary" href="?data=tambahpemasok">Tambah Data</a>
        </h1>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th width="5%">NO</th>
                        <th>ID PEMASOK</th>
                        <th>NAMA PEMASOK</th>
                        <th>ALAMAT</th>
                        <th>NO TELP</th>
                        <th width="5%">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "../config/connect.php";

                    $nom = 1;
                    $sql = "SELECT id_pemasok, nama_pemasok, alamat, no_telp FROM tbpemasok";
                    $hasil = $conn->query($sql);
                    while ($row = $hasil->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $nom; ?></td>
                            <td><?php echo $row["id_pemasok"]; ?></td>
                            <td><?php echo $row["nama_pemasok"]; ?></td>
                            <td><?php echo $row["alamat"]; ?></td>
                            <td><?php echo $row["no_telp"]; ?></td>
                            <td>
                                <a class="btn btn-primary" href="?data=editpemasok&id_pemasok=<?php echo $row['id_pemasok'] ?>">Edit</a>
                                <a class="btn btn-danger" href="?data=hapuspemasok&id_pemasok=<?php echo $row['id_pemasok'] ?>">Hapus</a>
                            </td>
                        </tr>
                    <?php $nom++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>