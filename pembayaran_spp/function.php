

<?php
function menu(){
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">App Pembayaram Spp </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Beranda<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php?hal=pegawai">Pegawai</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php?hal=siswa">Siswa</a>
      </li>
        <li class="nav-item active">
        <a class="nav-link" href="index.php?hal=pembayaran">Pembayaran</a>
      </li>
     <li class="nav-item active">
        <a class="nav-link" href="index.php?hal=tunggakan">Tunggakan</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="logout.php">LOG OUT</a>
      </li>
    </ul>
  </div>
</nav>
<?php
}

function beranda(){
 ?>
 <div class="alert alert-light" role="alert" align="center">
  Selamat Datang di Aplikasi Pembayaran <br>
  <hr>
 Silakan Melakukan Pembayaran Spp
</div>
<?php
}

function footer(){
  ?>
  <div class="alert alert-primary" role="alert" align="center">
 &copy LSP RPL SMKN 1 SUKAWATI
</div>
<?php
}
?>
