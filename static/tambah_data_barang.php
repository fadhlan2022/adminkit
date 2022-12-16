<?php
include 'header.php'
?>

<div class="card-header">
    <h1 class="card-title">TAMBAH DATA BARANG</h1>
</div>

<form class="form-horizontal" method="POST" action="proses_input_data_barang.php">
    <div class="card-body">
        <div class="form-group row">
            <label for="id_barang" class="col-sm-2 col-form-label">
                <div class="container">ID Barang <span style="color: red">*</span></div>
            </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="id_barang" name="id_barang" placeholder="id barang" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="nama_barang" class="col-sm-2 col-form-label">
                <div class="container">Nama Barang <span style="color: red">*</span></div>
            </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Barang" required>
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">
                <div class="container" style="color: red">* <span>Wajib</span></div>
            </label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Save</button>
                <a type="button" href="data_ruang.php" class="btn btn-default">Cancel</a>
            </div>
        </div>
    </div>
</form>
</section>
</div>

<?php
include 'footer.php'
?>