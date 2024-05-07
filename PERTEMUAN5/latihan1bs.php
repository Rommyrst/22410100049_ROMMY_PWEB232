<!DOCTYPE html>
<html lang="en">
<head>
  <title>TOKO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="http://localhost/pweb232/assets/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://localhost/pweb232/assets/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>
<body>

<nav class="navbar navbar-expand-sm bg-success navbar-dark">
  <div class="container-fluid">
    <a  class="navbar-brand" href="#">
        <img src="http://localhost/pweb232/assets/img/toko.png" style="width:50px" class="rounded-pill">
    </a>

<button class="navbar-toggler" type="button" 
                data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
</button>

    <div class="collapse navbar-collapse" id="collasibleNavbar">
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" >Login</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item">Login</a></li>
            <li><a class="dropdown-item">Logout</a></li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" >Master</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" type="button" id="listkaryawan">Karyawan</a></li>
            <li><a class="dropdown-item" type="button" id="listbarang">Barang</a></li>
            <li><a class="dropdown-item">Supplier</a></li>
            <li><a class="dropdown-item">Konsumen</a></li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" >Transaksi</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item">Penjualan</a></li>
            <li><a class="dropdown-item">Pembelian</a></li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" >Laporan</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item">Laba Rugi</a></li>
            <li><a class="dropdown-item">Persediaan</a></li>
        </ul>
      </li>

    </ul>
  </div>
  </div>
</nav>

<div class="container-fluid">
  <div id="isiutama"></div>
</div>


        <script>
            $("document").ready(function(){
               
                $("#listbarang").click(function()
                {    $('#isiutama').load('barang/listbarang.php'); });
            });
        </script>

</body>
</html>
