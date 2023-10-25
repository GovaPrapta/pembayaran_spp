
<h2 align="center" >Data Pegawai</h2>

<form action="index.php?hal=pegawai&" method="get">
  <div class="form-row align-item-center">
  	<div class="col-sm-3 my-1">
  		<label class="sr-only" for="inlineFormInputName">Name</label>
  		<input type="text" name="caripeg" class="form-control" id="inlineFormInputName" placeholder="Pencarian Nama Pegawai">
  	</div>
  	<div class="col-auto my-1">
  		<button type="submit" class="btn btn-success"> Cari Pegawai</button>
  	</div>
   <div class="col-sm-3 my-1">
   		<a href="index.php?hal=pegtambah" class="btn btn-primary">Tambah Pegawai</a>
   </div> 
  </div>
</form>

<?php
	if(isset($_GET['caripeg'])){
	$cari	=$_GET['caripeg'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
	}
	?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Kode Pegawai</th>
      <th scope="col">Nama Pegawai</th>
      <th scope="col">Tlp</th>
      <th scope="col">Jenis Kelamin</th>
     <th scope="col">user</th>
        <th scope="col">password</th>
        <th scope="col">Aksi</th>
  </tr>
  </thead>
  <?php
  	if (isset($_GET['caripeg'])) {
  		$cari = $_GET['caripeg'];
  		$tampil = mysqli_query($koneksi,"SELECT * FROM pegawai WHERE nama_pegawai like '%".$cari."%'");
  	}else{
  		$tampil = mysqli_query($koneksi,"SELECT * FROM pegawai");
  	}
  	while ($data = mysqli_fetch_array($tampil)){
  	?>
  	<tbody>
  		<tr>
  			<th scope="row"><?php echo $data ['kode_pegawai']; ?></th>
  			<td><?php echo $data ['nama_pegawai'];?></td>
  			<td><?php echo $data ['tlp'];?></td>
        <td><?php echo $data ['jenis_kelamin'];?></td>
        <td><?php echo $data ['user'];?></td>
        <td><?php echo $data ['password'];?></td>
  			<td>
  				<?php
  				echo'
  				<a href=index.php?hal=pegedit&id='.$data['kode_pegawai'].'" class="btn btn-warning">Edit</a>
  				<a href=index.php?hal=peghapus&id='.$data['kode_pegawai'].'" class="btn btn-danger">Hapus</a>
  			';?>
  			</td>
  		</tr>
  	</tbody>	
  <?php
  	}
  ?>
 </table>