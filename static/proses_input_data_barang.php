<?php
include 'koneksi.php';

$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$jumlah_barang = $_POST['jumlah_barang'];

$query = mysqli_query($konek, "INSERT INTO data_barang VALUES ('$id_barang','$nama_barang')")
    or die(mysqli_error($konek));

if ($query) {
    header("location: data.php", true, 301);
} else {
    echo "Proses input gagal!";
}
exit(0);
