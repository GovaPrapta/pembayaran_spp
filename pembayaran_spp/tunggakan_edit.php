<?php
  $id   = $_GET['id'];
  $tampil2 = mysqli_query($koneksi, "SELECT * FROM tunggakan WHERE kode_tunggakan = '$id'");
  $data2  = mysqli_fetch_array($tampil2);
?>

  <div class="alert alert-light" role="alert">
    <h2 align="center">From Ubah Data Tunggakan</h2>
    <form method="POST">
      <div class="form-group">
         <input type="hidden" name="kode_tunggakan" value="<?php echo $id ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            <label for="exampleInputEmail1">Nama Siswa</label>
              <select name="kode_siswa" class="form-control" id="exampleInputEmail1">
                <?php
                $tampil = mysqli_query($koneksi, "SELECT * FROM siswa");
                while($data=mysqli_fetch_array($tampil))
                  if($data['kode_siswa']==$data2['kode_siswa'])
                {
                echo '<option selected="selected" value="'.$data[kode_siswa].'">'.$data[nama_siswa].'</option>';
                } else {
                echo '<option value="'.$data[kode_siswa].'">'.$data[nama_siswa].'</option>';
                }
                ?>
              </select>
           </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Jumlah Tunggakan</label>
        <input type="number" name="jumlah_tunggakan" value="<?php echo $data2['jumlah_tunggakan'] ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Jumlah Tunggakan">
      </div>
     
      <input type="submit" name="ubah" class="btn btn-primary" value="Simpan Perubahan">
      <a href="index.php?hal=tunggakan" class="btn btn-secondary">Batal</a>
    </form>   
  </div>

  <?php
    if (isset($_POST['ubah'])) {
    $kode_tunggakan    = $_POST['kode_tunggakan'];
        $kode_siswa    = $_POST['kode_siswa'];
        $jumlah_tunggakan    = $_POST['jumlah_tunggakan'];
       

    $ubah = mysqli_query ($koneksi, 'UPDATE tunggakan SET kode_siswa ="'.$kode_siswa.'",  jumlah_tunggakan ="'.$jumlah_tunggakan.'" WHERE kode_tunggakan="'.$kode_tunggakan.'"');
    if ($ubah){
      echo '
        <script>
          alert ("Berhasil Mengubah Data Tunggakan");
          window.location="index.php?hal=
          tunggakan"; //menuju ke halaman pembayaran
        </script>
      ';
      }
    }
  ?>