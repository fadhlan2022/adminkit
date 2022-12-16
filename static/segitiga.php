<?php
$title = 'segitiga';
include 'header.php';
include 'koneksi.php';
$db_bangun = mysqli_query($konek, "SELECT * FROM db_bangun WHERE nama_bangun = 'Segitiga'");
?>
    <form class="form-horizontal" method="POST" action="segitiga.php">
        <div class="form-group row">
            <label for="id_bangun_" class="col-sm-2 col-form-label">
                <div class="container">Bangun <span style="color: red">*</span></div>
            </label>
            <div class="col-sm-10">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group">
                            <div>
                                <select id="id_bangun_" name="id_bangun_" class="selectpicker form-control" data-live-search="true" required>
                                    <option selected>Pilih Bangun</option>
                                    <?php foreach ($db_bangun as $key) : ?>
                                        <option value="<?= $key['id_bangun'] ?>"><?= $key['nama_bangun'];  ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <label for="alas" class="col-sm-2 col-form-label">
                <div class="container">Alas <span style="color: red">*</span></div>
            </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="alas" name="alas" placeholder="Alas Segitiga" required>
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <label for="tinggi" class="col-sm-2 col-form-label">
                <div class="container">Tinggi <span style="color: red">*</span></div>
            </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="tinggi" name="tinggi" placeholder="Tinggi Segitiga" required>
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">
                <div class="container" style="color: red">* <span>Wajib</span></div>
            </label>
            <div class="col-sm-10">
                <button type="submit" name="submit" value="hasil" class="btn btn-primary">Hitung</button>
            </div>
        </div>
    </form>
        <?php
        if (isset($_POST['submit'])) {
            if($_POST['submit']){
            $alas = $_POST['alas']; // membaca bil pertama dari form
            $tinggi = $_POST['tinggi']; // membaca bil kedua dari form
            
              (float)$hasil = (float)$alas * (float)$tinggi/2 ;
              echo "Alas: " .$alas; 
              echo "</br> Tinggi: " .$tinggi; 
              echo "</br> Luas Segitiga: ".$hasil; 
            }
        }
    ?>
    </body>
    
</div>
</section>
</div>
</body>
<?php
include 'footer.php';
?>
