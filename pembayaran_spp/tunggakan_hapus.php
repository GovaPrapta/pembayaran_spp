<?php
  $id = $_GET['id'];
  $tampil = mysqli_query($koneksi,"SELECT * FROM tunggakan WHERE kode_tunggakan='$id'");
  $data = mysqli_fetch_array($tampil);
?>

<div class="alert alert-light" role="alert">
    <h2 align="center">Hapus Data Tunggakan</h2>
    <form method="POST">
      <div class="from_group">
      <div class="alert alert-danger" role="alert">
      <h6>Yakin Akan Menghapus Data Tunggakan<b><?php echo $data['kode_tunggakan'] ?></b> ?</h6>
      <input type="hidden" name="kode_tunggakan" value="<?php echo $id ?>" required class="form-control">
       <input type="submit" name="hapus" class="btn btn-primary" value="Hapus">
     <a href="index.php?hal=tunggakan" class="btn btn-secondary">Batal</a>
     </div> 
  </div>
</form>
</div>

<?php
  if(isset($_POST['hapus'])){
  $kode_tunggakan = $_POST['kode_tunggakan'];

  $ubah = mysqli_query($koneksi, 'DELETE FROM tunggakan WHERE kode_tunggakan="'.$kode_tunggakan.'"');
  if ($ubah){
    echo '
      <script>
      alert("Berhasil Menghapus Data Tunggakan");
      window.location="index.php?hal=tunggakan";//menuju ke halaman tunggakan
      </script
    ';
  }
  }
?>