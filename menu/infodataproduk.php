<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">


    <div class="container-fluid py-1 px-3">
        <h1 class="page-header">Data Produk</h1>
        <?php
        if (isset($_GET['sukses']) == 'sukses') {
            echo '<h2 class="alert alert-success">Berhasil Menyimpan/Update Data Produk</h2>';
        } elseif (isset($_GET['hapus']) == 'hapus') {
            echo '<h2 class="alert alert-success">Berhasil Menghapus Data Produk</h2>';
        }
        ?>
        <h1 class="sub-header">
            <a class="btn btn-lg btn-primary" href="?data=tambahproduk">Tambah Data</a>
        </h1>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th width="2%">NO</th>
                        <th>ID PRODUK</th>
                        <th>NAMA PRODUK</th>
                        <th>JENIS COKELAT</th>
                        <th>HARGA</th>
                        <th>STOK</th>
                        <th width="2%">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "../config/connect.php";


                    $nom = 1;
                    $sql = "SELECT id_produk, nama_produk, jenis_cokelat, harga, stok FROM tbproduk";
                    $hasil = $conn->query($sql);
                    while ($row = $hasil->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $nom; ?></td>
                            <td><?php echo $row["id_produk"]; ?></td>
                            <td><?php echo $row["nama_produk"]; ?></td>
                            <td><?php echo $row["jenis_cokelat"]; ?></td>
                            <td><?php echo $row["harga"]; ?></td>
                            <td><?php echo $row["stok"]; ?></td>
                            <td>
                                <a class="btn btn-primary" href="?data=editproduk&id_produk=<?php echo $row['id_produk'] ?>">Edit</a>
                                <a class="btn btn-danger" href="?data=hapusproduk&id_produk=<?php echo $row['id_produk'] ?>">Hapus</a>
                            </td>
                        </tr>
                    <?php $nom++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>