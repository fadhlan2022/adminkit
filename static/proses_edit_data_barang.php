<?php
include 'koneksi.php';

$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$jumlah_barang = $_POST['jumlah_barang'];

$query = mysqli_query($konek, "UPDATE data_barang SET nama_barang='$nama_barang' jumlah_barang='$jumlah_barang' WHERE id_barang='$id_barang'");

if ($query) {
    header("location: data.php", true, 301);
} else {
    echo "Data gagal diubah!";
}
exit(0);
