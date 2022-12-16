<?php
$title = 'data_barang';
include 'header.php';
?>

<div class="card-header">
    <h1 class="card-title kapital"> DATA BARANG </h1>
</div>
<div class="card-body">
    <table id="example2" class="table table-striped projects">
        <a class="btn btn-success" href="tambah_data_barang.php">
            <i class="fas fa-plus"></i>
            Tambah Data
        </a>
        <a class="btn btn-success" href="data_export.php">
            <i class="fas fa-plus"></i>
            Export Data
        </a>
        <input class="form-control-info-sm float-right" id="myInput" type="text" placeholder="Search..">
        <thead>
            <tr>
                <th style="width: 10%">
                    ID Barang
                </th>
                <th style="width: 20%">
                    Nama Barang
                </th>
                <th style="width: 17%">
                    Banyak Barang
                </th>
                <th style="width: 17%">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody id="myTable">
            <?php
            include 'koneksi.php';
            $query = mysqli_query($konek, "SELECT * FROM data_barang");
            while ($data = mysqli_fetch_array($query)) { ?>
                <tr>
                    <td>
                        <?php echo $data['id_barang']; ?>
                    </td>
                    <td>
                        <?php echo $data['nama_barang']; ?>
                    </td>
                    <td>
                        <?php echo $data['jumlah_barang']; ?>
                    </td>
                    <td class="project-actions text-left">
                        <a class="btn btn-info btn-sm" href="edit_data_barang?id_barang=<?php echo $data['id_barang']; ?>">
                            <i class=" fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="hapus_data_barang.php?id_barang=<?php echo $data['id_barang']; ?>" onclick="return confirm('Anda yakin akan menghapus data?');">
                            <i class=" fas fa-trash"></i>
                            Delete
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</section>
</div>

<?php
include 'footer.php';
?>