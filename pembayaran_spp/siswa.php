<h2 align="center" >Data Siswa</h2>

<form action="index.php?hal=siswa&" method="get">
  <div class="form-row align-item-center">
  	<div class="col-sm-3 my-1">
  		<label class="sr-only" for="inlineFormInputName">Name</label>
  		<input type="text" name="carisis" class="form-control" id="inlineFormInputName" placeholder="Pencarian Nama Siswa">
  	</div>
  	<div class="col-auto my-1">
  		<button type="submit" class="btn btn-success"> Cari Siswa</button>
  	</div>
   <div class="col-sm-3 my-1">
   		<a href="index.php?hal=sistambah" class="btn btn-primary">Tambah Siswa</a>
   </div> 
  </div>
</form>

<?php
	if(isset($_GET['carisis'])){
	$cari	=$_GET['carisis'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
	}
	?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Kode siswa</th>
      <th scope="col">Nama Siswa</th>
      <th scope="col">kelas</th>
      <th scope="col">tlp</th>
     <th scope="col">tanggal lahir</th>
     <th scope="col">jurusan</th>
      <th scope="col">jenis kelamin</th>
      <th scope="col">Aksi</th>
  </tr>
  </thead>
  <?php
  	if (isset($_GET['carisis'])) {
  		$cari = $_GET['carisis'];
  		$tampil = mysqli_query($koneksi,"SELECT * FROM siswa WHERE nama_siswa like '%".$cari."%'");
  	}else{
  		$tampil = mysqli_query($koneksi,"SELECT * FROM siswa");
  	}
  	while ($data = mysqli_fetch_array($tampil)){
  	?>
  	<tbody>
  		<tr>
  			<th scope="row"><?php echo $data ['kode_siswa']; ?></th>
  			<td><?php echo $data ['nama_siswa'];?></td>
  			<td><?php echo $data ['kelas'];?></td>
        <td><?php echo $data ['tlp'];?></td>
        <td><?php echo $data ['tanggal_lahir'];?></td>
        <td><?php echo $data ['jurusan'];?></td>
        <td><?php echo $data ['jenis_kelamin'];?></td>
  			<td>
  				<?php
  				echo'
  				<a href=index.php?hal=sisedit&id='.$data['kode_siswa'].'" class="btn btn-warning">Edit</a>
  				<a href=index.php?hal=sishapus&id='.$data['kode_siswa'].'" class="btn btn-danger">Hapus</a>
  			';?>
  			</td>
  		</tr>
  	</tbody>	
  <?php
  	}
  ?>
 </table>