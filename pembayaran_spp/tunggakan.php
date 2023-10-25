<h2 align="center" >Data Tunggakan</h2>

<form action="index.php?hal=tunggakan&" method="get">
  <div class="form-row align-item-center">
  	<div class="col-sm-3 my-1">
  		<label class="sr-only" for="inlineFormInputName">Name</label>
  		<input type="text" name="caritun" class="form-control" id="inlineFormInputName" placeholder="Pencarian Pembayaran">
  	</div>
  	<div class="col-auto my-1">
  		<button type="submit" class="btn btn-success"> Cari tunggakan</button>
  	</div>
   <div class="col-sm-3 my-1">
   		<a href="index.php?hal=tuntambah" class="btn btn-primary">Tambah tunggakan</a>
   </div> 
  </div>
</form>

<?php
	if(isset($_GET['cariptun'])){
	$cari	=$_GET['caritun'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
	}
	?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Kode Tunggakan</th>
      <th scope="col">Nama Siswa</th>
      <th scope="col">Jumlah Tunggakan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <?php
  	if (isset($_GET['caritun'])) {
  		$cari = $_GET['caritun'];
  		$tampil = mysqli_query($koneksi,"SELECT * FROM viewtunggakan WHERE nama_siswa like '%".$cari."%' ORDER BY kode_tunggakan DESC");
  	}else{
  		$tampil = mysqli_query($koneksi,"SELECT * FROM viewtunggakan ORDER BY kode_tunggakan DESC");
  	}
  	while ($data = mysqli_fetch_array($tampil)){
  	?>
  	<tbody>
  		<tr>
  			<th scope="row"><?php echo $data ['kode_tunggakan']; ?></th>
        <td><?php echo $data ['nama_siswa']; ?></td>
        <td><?php echo $data ['jumlah_tunggakan']; ?></td>
  			<td>
  				<?php
  				echo'
  				<a href=index.php?hal=tunedit&id='.$data['kode_tunggakan'].'" class="btn btn-warning">Edit</a>
  				<a href=index.php?hal=tunhapus&id='.$data['kode_tunggakan'].'" class="btn btn-danger">Hapus</a>
  			';?>
  			</td>
  		</tr>
  	</tbody>	
  <?php
  	}
  ?>
 </table>