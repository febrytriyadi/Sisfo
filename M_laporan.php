<?php 
	include("conn.php");
  if( (isset($_POST['nama'])) && (isset($_POST['nama_barang'])) && (isset($_POST['tanggal'])) && (isset($_POST['jumlah'])) && (isset($_POST['total'])) && (isset($_POST['id'])) ){
  	$id=$_POST['id'];
    $nama = $_POST['nama'];
    $nama_barang = $_POST['nama_barang'];
    $tanggal = $_POST['tanggal'];
    $jumlah = $_POST['jumlah'];
    $total = $_POST['total'];
    $INSERT = "update laporanbarang set nama='$nama', nama_barang='$nama_barang', tanggal='$tanggal', jumlah=$jumlah, total=$total where no_laporan=$id";
    echo $INSERT;
    mysqli_query($conn,$INSERT);
    header("location: datalaporan.php");
  }else{
    echo "gagal";
  }
 ?>