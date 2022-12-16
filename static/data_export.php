<?php
$title = 'dashboard';
// nama file hasil export
$namaFile = "data.txt";
 
// karakter separator
$separator = "\t";
 
// koneksi ke mysql
include 'koneksi.php';
 
// header file text
header("Content-type: text/plain");
header("Content-Disposition: attachment; filename=".$namaFile);
 
// query sql baca semua data dlm tabel data_barang
$query = "SELECT * FROM data_barang";
$hasil = mysqli_query($konek, $query);
while ($data = mysqli_fetch_array($hasil))
{   
    // mengisi data mhs ke file text dengan separator 
    echo $data['nama_barang'].$separator.$data['jumlah_barang']."\r\n";
}
 
?>