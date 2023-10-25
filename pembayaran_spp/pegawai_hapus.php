<?php
  $id = $_GET['id'];
  $tampil = mysqli_query($koneksi,"SELECT * FROM pegawai WHERE kode_pegawai='$id'");
  $data = mysqli_fetch_array($tampil);
?>

<div class="alert alert-light" role="alert">
    <h2 align="center">Hapus Data Pegawai</h2>
    <form method="POST">
      <div class="from_group">
      <div class="alert alert-danger" role="alert">
      <h6>Yakin Akan Menghapus Data Pegawai<b><?php echo $data['nama_pegawai'] ?></b> ?</h6>
      <input type="hidden" name="kode_pegawai" value="<?php echo $id ?>" required class="form-control">
       <input type="submit" name="hapus" class="btn btn-primary" value="Hapus">
     <a href="index.php?hal=pegawai" class="btn btn-secondary">Batal</a>
     </div> 
  </div>
</form>
</div>

<?php
  if(isset($_POST['hapus'])){
  $kode_pegawai = $_POST['kode_pegawai'];

  $ubah = mysqli_query($koneksi, 'DELETE FROM pegawai WHERE kode_pegawai="'.$kode_pegawai.'"');
  if ($ubah){
    echo '
      <script>
      alert("Berhasil Menghapus Data Pegawai");
      window.location="index.php?hal=pegawai";//menuju ke halaman pegawai
      </script
    ';
  }
  }
?>