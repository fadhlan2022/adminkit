<?php
include 'koneksi.php';

$id_barang = $_GET['id_barang'];

$query = mysqli_query($konek, "DELETE FROM data_barang WHERE id_barang='$id_barang'");

if ($query) {
    header("location: data.php", true, 301);
} else {
    echo "Data gagal dihapus!";
}
exit(0);
