<?php
  $id = $_GET['id'];
  $tampil = mysqli_query($koneksi,"SELECT * FROM siswa WHERE kode_siswa='$id'");
  $data = mysqli_fetch_array($tampil);
?>

<div class="alert alert-light" role="alert">
    <h2 align="center"> Ubah Data Siswa</h2>
    <form method="POST">
      <div class="from_group">
    <input type="hidden" name="kode_siswa" value="<?php echo $id ?>" required class="form-control" id= "exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama siswa">
    <label for="exampleInputEmail1">Nama Siswa</label>
    <input type="text" name="nama_siswa" value="<?php echo $data['nama_siswa'] ?>" required class="form-control" id="exampleInputEmail1"aria-describedby="emailHelp" placeholder="Masukan Nama Siswa">
  </div>
   <div class="from_group">
     <label for="exampleInputEmail1">Kelas</label>
    <input type="text" name="kelas" value="<?php echo $data['kelas'] ?>" required class="form-control" id="exampleInputEmail1"aria-describedby="emailHelp" placeholder="Masukan Kelas">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Tlp</label>
    <input type="number" name="tlp" value="<?php echo $data ['tlp'] ?>" required class="form-control" id="exampleInputPassword1" placeholder="tlp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir" value="<?php echo $data ['tanggal_lahir'] ?>" required class="form-control" id="exampleInputPassword1" placeholder="Tanggal Lahir">
  </div>
   <div class="from_group">
     <label for="exampleInputEmail1">Jurusan</label>
    <input type="text" name="jurusan" value="<?php echo $data['jurusan'] ?>" required class="form-control" id="exampleInputEmail1"aria-describedby="emailHelp" placeholder="Masukan Jurusan">
  </div>
   <div class="from_group">
     <label for="exampleInputEmail1">Jenis Kelamin</label>
    <input type="text" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'] ?>" required class="form-control" id="exampleInputEmail1"aria-describedby="emailHelp" placeholder="Masukan Jenis kelamin">
  </div>
    <input type="submit" name="ubah" class="btn btn-primary" value="simpan Perubahan">
   <a href="index.php?hal=siswa" class="btn btn-secondary">Batal</a>
</form>
</div>

<?php
  if(isset($_POST['ubah'])){
  $kode_siswa = $_POST['kode_siswa'];
  $nama_siswa = $_POST['nama_siswa'];
  $kelas = $_POST['kelas'];
  $tlp = $_POST['tlp'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $jurusan = $_POST['jurusan'];
  $jenis_kelamin = $_POST['jenis_kelamin'];

 $ubah = mysqli_query($koneksi, 'UPDATE siswa SET nama_siswa="'.$nama_siswa.'", kelas="'.$kelas.'" , tlp="'.$tlp.'" , tanggal_lahir="'.$tanggal_lahir.'", jurusan="'.$jurusan.'", jenis_kelamin="'.$jenis_kelamin.'" WHERE kode_siswa="'.$kode_siswa.'"');
  if ($ubah) {
    echo '
      <script>
      alert("Berhasil Mengubah Data Siswa");
      window.location="index.php?hal=siswa";//menuju ke halaman siswa
      </script
    ';
  }
  }
?>