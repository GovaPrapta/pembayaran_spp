<div class="alert alert-light" role="alert">
  <h2 align="center">Tambah Data Tunggakan</h2>
  <form method="POST">
     <div class="form-group">
      <label for="exampleInputEmail1">Nama Siswa</label>
      <select name="kode_siswa" class="form-control" id="exampleFormControlSelect1">
        <?php
        $tampil = mysqli_query($koneksi, "SELECT * FROM siswa");
        while($data=mysqli_fetch_array($tampil))
        {
        ?>
        <option value="<?php echo $data['kode_siswa'] ?>"><?php echo $data['nama_siswa'] ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Jumlah Tunggakan</label>
    <input type="number" name="jumlah_tunggakan" required class="form-control" id="exampleInputPassword1" placeholder="Jumlah Tunggakan">
    </div>
    <input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
    <a href="index.php?hal=tunggakan" class="btn b
    tn-secondary">Batal</a>
  </form>
</div>

<?php
  if(isset($_POST['simpan'])){
    $kode_siswa = $_POST['kode_siswa'];
    $jumlah_tunggakan  = $_POST['jumlah_tunggakan'];



     $simpan = mysqli_query($koneksi, 'INSERT INTO tunggakan(kode_siswa,jumlah_tunggakan) VALUES ("'.$kode_siswa.'","'.$jumlah_tunggakan.'")');
  if ($simpan) {
      echo '
      <script>
        alert("Berhasil Menambah Data Tunggakan");
        window.location="index.php?hal=tunggakan"; //menuju ke halaman tunggakan
      </script>
      ';
    } 
  }
?>