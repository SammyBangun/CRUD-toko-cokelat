<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">


    <div class="container-fluid py-1 px-3 ">
        <h1 class="page-header">Data Pelanggan</h1>
        <?php
        if (isset($_GET['sukses']) == 'sukses') {
            echo '<h2 class="alert alert-success">Berhasil Menyimpan/Update Data Pelanggan</h2>';
        } elseif (isset($_GET['hapus']) == 'hapus') {
            echo '<h2 class="alert alert-success">Berhasil Menghapus Data Pelanggan</h2>';
        }
        ?>
        <h1 class="sub-header">
            <a class="btn btn-lg btn-primary" href="?data=tambahpelanggan">Tambah Data</a>
        </h1>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th width="5%">NO</th>
                        <th>ID PELANGGAN</th>
                        <th>NAMA PELANGGAN</th>
                        <th>ALAMAT</th>
                        <th>NO TELP</th>
                        <th width="5%">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "../config/connect.php";


                    $nom = 1;
                    $sql = "SELECT id_pelanggan, nama_pelanggan, alamat, no_telp FROM tbpelanggan";
                    $hasil = $conn->query($sql);
                    while ($row = $hasil->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $nom; ?></td>
                            <td><?php echo $row["id_pelanggan"]; ?></td>
                            <td><?php echo $row["nama_pelanggan"]; ?></td>
                            <td><?php echo $row["alamat"]; ?></td>
                            <td><?php echo $row["no_telp"]; ?></td>
                            <td>
                                <a class="btn btn-primary" href="?data=editpelanggan&id_pelanggan=<?php echo $row['id_pelanggan'] ?>">Edit</a>
                                <a class="btn btn-danger" href="?data=hapuspelanggan&id_pelanggan=<?php echo $row['id_pelanggan'] ?>">Hapus</a>
                            </td>
                        </tr>
                    <?php $nom++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>