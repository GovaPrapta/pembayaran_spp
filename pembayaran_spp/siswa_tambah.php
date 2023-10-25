

 <div class="alert alert-light" role="alert">
    <h2 align="center">Tambah Data Siswa</h2>
    <form method="POST">
      <div class="form-group">
    <label for="exampleInputEmail1">Nama Siswa</label>
    <input type="text" name="nama_siswa" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama siswa">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">kelas</label>
    <input type="text" name="kelas" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="kelas">
   </div>
     <div class="form-group">
    <label for="exampleInputPassword1">Tlp</label>
    <input type="number" name="tlp" required class="form-control" id="exampleInputPassword1" placeholder="tlp">
  </div>
     <div class="form-group">
    <label for="exampleInputPassword1">Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir" required class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp" placeholder="tanggal_lahir">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Jurusan</label>
    <input type="text" name="jurusan" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="jurusan">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Jenis Kelamin</label>
    <input type="text" name="jenis_kelamin" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="jenis_kelamin">
  </div>
    <input type="submit"name="simpan" class="btn btn-primary" value="simpan">
   <a href="index.php?hal=siswa" class="btn btn-secondary">Batal</a>
</form>
</div>

<?php
  if(isset($_POST['simpan'])){
  $nama_siswa = $_POST['nama_siswa'];
  $kelas = $_POST['kelas'];
  $tlp = $_POST['tlp'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $jurusan = $_POST['jurusan'];
  $jenis_kelamin = $_POST['jenis_kelamin'];

  $simpan = mysqli_query($koneksi, 'INSERT INTO siswa(nama_siswa,kelas,tlp,tanggal_lahir,jurusan,jenis_kelamin) VALUES ("'.$nama_siswa.'","'.$kelas.'","'.$tlp.'","'.$tanggal_lahir.'","'.$jurusan.'","'.$jenis_kelamin.'")');
  if ($simpan) {
    echo '
      <script>
      alert("Berhasil Menambah Data siswa");
      window.location="index.php?hal=siswa";//menuju ke halaman siswa
      </script
    ';
  }
  }
?>
