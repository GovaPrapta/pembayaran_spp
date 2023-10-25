<?php
  $id   = $_GET['id'];
  $tampil2 = mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE kode_bayar = '$id'");
  $data2  = mysqli_fetch_array($tampil2);
?>

  <div class="alert alert-light" role="alert">
    <h2 align="center">From Ubah Data Pembayaran</h2>
    <form method="POST">
      <div class="form-group">
         <input type="hidden" name="kode_bayar" value="<?php echo $id ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
        <label for="exampleInputEmail1">Nama Pegawai</label>
              <select name="kode_pegawai" class="form-control" id="exampleInputEmail1">
              <?php
              $tampil = mysqli_query($koneksi, "SELECT * FROM pegawai");
              while($data=mysqli_fetch_array($tampil))
                if($data['kode_pegawai']==$data2['kode_pegawai'])
              {
              echo '<option selected="selected" value="'.$data[kode_pegawai].'">'.$data[nama_pegawai].'</option>';
              } else {
              echo '<option value="'.$data[kode_pegawai].'">'.$data[nama_pegawai].'</option>';
              }
              ?>
            </select>
        </div>
        <div class="form-group">
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
        <label for="exampleInputEmail1">Jumlah Bayar</label>
        <input type="text" name="jumlah_bayar" value="<?php echo $data2['jumlah_bayar'] ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Jumlah Bayar">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Tanggal Bayar</label>
        <input type="date" name="tanggal_bayar" value="<?php echo $data2['tanggal_bayar'] ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan tgl_bayar">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Status</label>
        <input type="text" name="status_lunas" value="<?php echo $data2['status_lunas'] ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan status">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Semester</label>
        <input type="text" name="semester" value="<?php echo $data2['semester'] ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan semester">
      </div>
      <input type="submit" name="ubah" class="btn btn-primary" value="Simpan Perubahan">
      <a href="index.php?hal=pembayaran" class="btn btn-secondary">Batal</a>
    </form>   
  </div>

  <?php
    if (isset($_POST['ubah'])) {
    $kode_bayar    = $_POST['kode_bayar'];
        $kode_pegawai  = $_POST['kode_pegawai'];
        $kode_siswa    = $_POST['kode_siswa'];
        $jumlah_bayar     = $_POST['jumlah_bayar'];
        $tanggal_bayar     = $_POST['tanggal_bayar'];
        $status_lunas  = $_POST['status_lunas'];
        $semester      = $_POST['semester'];


    $ubah = mysqli_query ($koneksi, 'UPDATE pembayaran SET kode_pegawai="'.$kode_pegawai.'", kode_siswa="'.$kode_siswa.'",  jumlah_bayar="'.$jumlah_bayar.'", tanggal_bayar="'.$tanggal_bayar.'", status_lunas="'.$status_lunas.'", semester="'.$semester.'" WHERE kode_bayar="'.$kode_bayar.'"');
    if ($ubah){
      echo '
        <script>
          alert ("Berhasil Mengubah Data Pembayaran");
          window.location="index.php?hal=pembayaran"; //menuju ke halaman pembayaran
        </script>
      ';
      }
    }
  ?>

