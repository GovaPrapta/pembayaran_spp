<?php
  $id = $_GET['id'];
  $tampil = mysqli_query($koneksi,"SELECT * FROM pegawai WHERE kode_pegawai='$id'");
  $data = mysqli_fetch_array($tampil);
?>

<div class="alert alert-light" role="alert">
    <h2 align="center">From Ubah Data pegawai</h2>
    <form method="POST">
      
      <div class="from_group">
    <input type="hidden" name="kode_pegawai" value="<?php echo $id ?>" required class="form-control" id= "exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama Pegawai">
    <label for="exampleInputEmail1">Nama pegawai</label>
    <input type="text" name="nama_pegawai" value="<?php echo $data['nama_pegawai'] ?>" required class="form-control" id="exampleInputEmail1"aria-describedby="emailHelp" placeholder="Masukan Nama Pegawai">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Tlp</label>
    <input type="number" name="tlp" value="<?php echo $data ['tlp'] ?>" required class="form-control" id="exampleInputPassword1" placeholder="tlp">
  </div>
  
  <div class="from_group">
     <label for="exampleInputEmail1">Jenis Kelamin</label>
    <input type="text" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'] ?>" required class="form-control" id="exampleInputEmail1"aria-describedby="emailHelp" placeholder="Masukan Jenis Kelamin">
  </div>
   

   <div class="from_group">
     <label for="exampleInputEmail1">user</label>
    <input type="text" name="user" value="<?php echo $data['user'] ?>" required class="form-control" id="exampleInputEmail1"aria-describedby="emailHelp" placeholder="Masukan User">
  </div>
   
   <div class="from_group">
     <label for="exampleInputEmail1">password</label>
    <input type="password" name="password" value="<?php echo $data['password'] ?>" required class="form-control" id="exampleInputEmail1"aria-describedby="emailHelp" placeholder="Masukan pasword">
  </div>
    
    <input type="submit" name="ubah" class="btn btn-primary" value="simpan Perubahan">
   <a href="index.php?hal=pegawai" class="btn btn-secondary">Batal</a>
</form>
</div>

<?php
  if(isset($_POST['ubah'])){
  $kode_pegawai = $_POST['kode_pegawai'];
  $nama_pegawai = $_POST['nama_pegawai'];
  $tlp = $_POST['tlp'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $user = $_POST['user'];
  $password = $_POST['password'];

 $ubah = mysqli_query($koneksi, 'UPDATE pegawai SET nama_pegawai="'.$nama_pegawai.'",tlp="'.$tlp.'" ,jenis_kelamin="'.$jenis_kelamin.'",user="'.$user.'",password="'.$password.'" WHERE kode_pegawai="'.$kode_pegawai.'"');
  if ($ubah) {
    echo '
      <script>
      alert("Berhasil Mengubah Data Pegawai");
      window.location="index.php?hal=pegawai";//menuju ke halaman pegawai
      </script
    ';
  }
  }
?>