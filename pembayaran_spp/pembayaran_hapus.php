<?php
  $id = $_GET['id'];
  $tampil = mysqli_query($koneksi,"SELECT * FROM pembayaran WHERE kode_bayar='$id'");
  $data = mysqli_fetch_array($tampil);
?>

<div class="alert alert-light" role="alert">
    <h2 align="center">Hapus Data pembayaran</h2>
    <form method="POST">
      <div class="from_group">
      <div class="alert alert-danger" role="alert">
      <h6>Yakin Akan Menghapus Data Pembayaran<b><?php echo $data['kode_bayar'] ?></b> ?</h6>
      <input type="hidden" name="kode_bayar" value="<?php echo $id ?>" required class="form-control">
       <input type="submit" name="hapus" class="btn btn-primary" value="Hapus">
     <a href="index.php?hal=pembayaran" class="btn btn-secondary">Batal</a>
     </div> 
  </div>
</form>
</div>

<?php
  if(isset($_POST['hapus'])){
  $kode_bayar = $_POST['kode_bayar'];

  $ubah = mysqli_query($koneksi, 'DELETE FROM pembayaran WHERE kode_bayar="'.$kode_bayar.'"');
  if ($ubah){
    echo '
      <script>
      alert("Berhasil Menghapus Data Pembayaran");
      window.location="index.php?hal=pembayaran";//menuju ke halaman pembayaran
      </script
    ';
  }
  }
?>