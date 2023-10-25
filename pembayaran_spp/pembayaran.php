<h2 align="center" >Data Pembayaran</h2>

<form action="index.php?hal=pembayaran&" method="get">
  <div class="form-row align-item-center">
  	<div class="col-sm-3 my-1">
  		<label class="sr-only" for="inlineFormInputName">Name</label>
  		<input type="text" name="caripem" class="form-control" id="inlineFormInputName" placeholder="Pencarian Pembayaran">
  	</div>
  	<div class="col-auto my-1">
  		<button type="submit" class="btn btn-success"> Cari pembayaran</button>
  	</div>
   <div class="col-sm-3 my-1">
   		<a href="index.php?hal=pemtambah" class="btn btn-primary">Tambah Pembayaran</a>
   </div> 
  </div>
</form>

<?php
	if(isset($_GET['caripem'])){
	$cari	=$_GET['caripem'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
	}
	?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Kode Bayar</th>
      <th scope="col">Nama Pegawai</th>
      <th scope="col">Nama Siswa</th>
      <th scope="col">Jumlah Uang</th>
      <th scope="col">Tanggal Bayar</th>
      <th scope="col">Status Lunas</th>
      <th scope="col">Semester</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <?php
  	if (isset($_GET['caripem'])) {
  		$cari = $_GET['caripem'];
  		$tampil = mysqli_query($koneksi,"SELECT * FROM viewpembayaran WHERE nama_siswa like '%".$cari."%' ORDER BY kode_bayar DESC");
  	}else{
  		$tampil = mysqli_query($koneksi,"SELECT * FROM viewpembayaran ORDER BY kode_bayar DESC");
  	}
  	while ($data = mysqli_fetch_array($tampil)){
  	?>
  	<tbody>
  		<tr>
  			<th scope="row"><?php echo $data ['kode_bayar']; ?></th>
  			<td><?php echo $data ['nama_pegawai']; ?></td>
        <td><?php echo $data ['nama_siswa']; ?></td>
        <td><?php echo $data ['jumlah_uang']; ?></td>
        <td><?php echo $data ['tanggal_bayar']; ?></td>
        <td><?php echo $data ['status_lunas']; ?></td>
  			<td><?php echo $data ['semester']; ?></td>
  			<td>
  				<?php
  				echo'
  				<a href=index.php?hal=pemedit&id='.$data['kode_bayar'].'" class="btn btn-warning">Edit</a>
  				<a href=index.php?hal=pemhapus&id='.$data['kode_bayar'].'" class="btn btn-danger">Hapus</a>
  			';?>
  			</td>
  		</tr>
  	</tbody>	
  <?php
  	}
  ?>
 </table>