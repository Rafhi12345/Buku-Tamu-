<?php
$conn = mysqli_connect("localhost","root","","dbtamu");

if(!$conn){
    die("Koneksi gagal : ".mysqli_connect_error());
}

$nama         = mysqli_real_escape_string($conn,$_POST['nama']);
$instansi     = mysqli_real_escape_string($conn,$_POST['instansi']);
$tanggal      = date('Y-m-d H:i:s');
$tujuan       = mysqli_real_escape_string($conn,$_POST['tujuan']);
$keterangan   = mysqli_real_escape_string($conn,$_POST['keterangan']);
$tandatangan  = $_POST['tanda_tangan'];

$sql = "INSERT INTO buku_tamu
(nama,instansi,tanggal,tujuan,keterangan,tanda_tangan)
VALUES
('$nama','$instansi','$tanggal','$tujuan','$keterangan','$tandatangan')";

if(mysqli_query($conn,$sql)){
    echo "<script>
            alert('Data berhasil disimpan');
            window.location='index.php';
          </script>";
}else{
    echo "Gagal : ".mysqli_error($conn);
}
?>