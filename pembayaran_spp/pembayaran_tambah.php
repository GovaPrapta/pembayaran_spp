<div class="alert alert-light" role="alert">
  <h2 align="center">Tambah Data Pembayaran</h2>
  <form method="POST">
    <div class="form-group">
      <label for="exampleInputEmail1">Nama Pegawai</label>
      <select name="kode_pegawai" class="form-control" id="exampleFormControlSelect1">
        <?php
        $tampil = mysqli_query($koneksi, "SELECT * FROM pegawai");
        while($data=mysqli_fetch_array($tampil))
        {
        ?>
        <option value="<?php echo $data['kode_pegawai'] ?>"><?php echo $data['nama_pegawai'] ?></option>
        <?php } ?>
      </select>
    </div>

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
    <label for="exampleInputPassword1">Jumlah Uang</label>
    <input type="number" name="jumlah_uang" required class="form-control" id="exampleInputPassword1" placeholder="Jumlah Uang">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Tanggal Bayar</label>
    <input type="date" name="tanggal_bayar" required class="form-control" id="exampleInputPassword1" placeholder="Tanggal Bayar">
  </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Status Lunas</label>
      <input type="text" name="status_lunas" class="form-control" required id="exampleInputPassword1" placeholder="Status Lunas">
    </div>
   <div class="form-group">
      <label for="exampleInputPassword1">Semester</label>
      <input type="text" name="semester" class="form-control" required id="exampleInputPassword1" placeholder="Semester">
    </div>
    <input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
    <a href="index.php?hal=pembayaran" class="btn btn-secondary">Batal</a>
  </form>
</div>

<?php
  if(isset($_POST['simpan'])){
    $kode_pegawai = $_POST['kode_pegawai'];
    $kode_siswa = $_POST['kode_siswa'];
    $jumlah_uang      = $_POST['jumlah_uang'];
    $tanggal_bayar  = $_POST['tanggal_bayar'];
    $status_lunas = $_POST['status_lunas'];
    $semester = $_POST['semester'];


     $simpan = mysqli_query($koneksi, 'INSERT INTO pembayaran(kode_pegawai,kode_siswa,jumlah_uang,tanggal_bayar,status_lunas,semester) VALUES ("'.$kode_pegawai.'","'.$kode_siswa.'","'.$jumlah_uang.'","'.$tanggal_bayar.'","'.$status_lunas.'" , "'.$semester.'")');
  if ($simpan) {
      echo '
      <script>
        alert("Berhasil Menambah Data Pembayaran");
        window.location="index.php?hal=pembayaran"; //menuju ke halaman pembayaran
      </script>
      ';
    }
  }
?>