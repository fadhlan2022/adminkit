<?php
include 'header.php';
?>

<?php
include 'koneksi.php';
$id_barang = isset($_GET['id_barang']) ? $_GET['id_barang'] : '';
$data = mysqli_query($konek, "SELECT * FROM data_barang WHERE id_barang='$id_barang'");
while ($hasil = mysqli_fetch_array($data)) {
?>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-info">
                <div class="card-header">
                    <h1 class="card-title">EDIT DATA BARANG</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="proses_edit_data_barang.php">
                        <div class="form-group row">
                            <label for="id_barang" class="col-sm-2 col-form-label">
                                <div class="container">ID Barang <span style="color: red">*</span></div>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="id_barang" class="form-control" value="<?php echo $hasil['id_barang']; ?>" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="nama_barang" class="col-sm-2 col-form-label">
                                <div class="container">Nama Barang <span style="color: red">*</span></div>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_barang" class="form-control" value="<?php echo $hasil['nama_barang']; ?>">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="jumlah_barang" class="col-sm-2 col-form-label">
                                <div class="container">Jumlah Barang <span style="color: red">*</span></div>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_barang" class="form-control" value="<?php echo $hasil['jumlah_barang']; ?>">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">

                            </label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Save Change</button>
                                <a href="data.php" class="btn btn-default">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
</section>
</div>
<?php
include 'footer.php';
?>