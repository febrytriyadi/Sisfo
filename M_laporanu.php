<?php 
	include("conn.php");
  if( (isset($_POST['nama'])) && (isset($_POST['id_uang'])) && (isset($_POST['jumlah'])) && (isset($_POST['tanggal'])) && (isset($_POST['total'])) && (isset($_POST['sisa'])) && (isset($_POST['id'])) ){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $id_uang = $_POST['id_uang'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];
    $total = $_POST['total'];
    $sisa = $_POST['sisa'];
    $update = "update laporanuang set nama='$nama', id_uang='$id_uang', jumlah=$jumlah, tanggal='$tanggal', total=$total, sisa=$sisa where no_laporan=$id";
    mysqli_query($conn,$update);
    header("location: datalaporanu.php");
  }else{
    echo "gagal";
  }
 ?>