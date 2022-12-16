<?php
$title = 'dashboard';
include 'header.php';
?>

<div class="card-header">
    <h1 class="card-title kapital"> DATA PERHITUNGAN </h1>
</div>
<div class="card-body">
    <table id="example2" class="table table-striped projects">
        <thead>
            <tr>
                <th style="width: 7%">
                    ID Bangun
                </th>
                <th style="width: 15%">
                    Nama Bangun
                </th>
                <th style="width: 15%">
                    Banyak Perhitungan
                </th>
            </tr>
        </thead>
        <tbody id="myTable">
            <?php
            include 'koneksi.php';
            $query = mysqli_query($konek, "SELECT * FROM db_bangun");
            while ($data = mysqli_fetch_array($query)) { ?>
                <tr>
                    <td>
                        <?php echo $data['id_bangun']; ?>
                    </td>
                    <td>
                        <?php echo $data['nama_bangun']; ?>
                    </td>
                    <td>
                        <?php echo $data['banyak_hitung'] ?>
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