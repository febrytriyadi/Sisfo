<?php 
	include("conn.php");
  if( (isset($_POST['jabatan'])) && (isset($_POST['id'])) && (isset($_POST['nama'])) && (isset($_POST['status'])) && (isset($_POST['no_tlp'])) && (isset($_POST['tanggal'])) && (isset($_POST['gaji'])) && (isset($_POST['id'])) ){
    $id = $_POST['id'];
    $jabatan = $_POST['jabatan'];
    $identitas = $_POST['identitas'];
    $nama = $_POST['nama'];
    $status = $_POST['status'];
    $no_tlp = $_POST['no_tlp'];
    $tanggal = $_POST['tanggal'];
    $gaji = $_POST['gaji'];
    $update = "update laporansdm set jabatan='$jabatan', identitas='$identitas', nama='$nama', status='$status', no_tlp='$no_tlp', tanggal='$tanggal', gaji=$gaji where no_laporan=$id";
    mysqli_query($conn,$update);
    header("location: datalaporans.php");
  }else{
    echo "gagal";
  }
 ?>