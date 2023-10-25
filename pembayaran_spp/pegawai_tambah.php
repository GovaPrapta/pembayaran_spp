 <div class="alert alert-light" role="alert">
    <h2 align="center">Tambah Data Pegawai</h2>
    <form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Pegawai</label>
    <input type="text" name="nama_pegawai" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pegawai">
   </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Tlp</label>
    <input type="number" name="tlp" required class="form-control" id="exampleInputPassword1" placeholder="tlp">
  </div>
    
    <div class="form-group">
    <label for="exampleInputEmail1">Jenis Kelamin</label>
    <input type="text" name="jenis_kelamin" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jenis Kelamin">
   </div>
     <div class="form-group">
    <label for="exampleInputEmail1">user</label>
    <input type="text" name="user" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">password</label>
    <input type="password" name="password" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pasword">
  </div>
    <input type="submit"name="simpan" class="btn btn-primary" value="simpan">
   <a href="index.php?hal=penerbit" class="btn btn-secondary">Batal</a>
</form>
</div>

<?php
  if(isset($_POST['simpan'])){
  $nama_pegawai = $_POST['nama_pegawai'];
  $tlp = $_POST['tlp'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $user = $_POST['user'];
  $password = $_POST['password'];

  $simpan = mysqli_query($koneksi, 'INSERT INTO pegawai(nama_pegawai,tlp,jenis_kelamin,user,password) VALUES ("'.$nama_pegawai.'","'.$tlp.'","'.$jenis_kelamin.'","'.$user.'","'.$password.'")');
  if ($simpan) {
    echo '
      <script>
      alert("Berhasil Menambah Data Pegawai");
      window.location="index.php?hal=pegawai";//menuju ke halaman pegawai
      </script
    ';
  }
  }
?>
