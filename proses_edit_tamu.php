<?php 
 require 'connect_si.php';

 $id_tamu = $_POST['id_tamu'];
 $no_ktp =  $_POST["ktp"];
 $nama_first = $_POST["firstname"];
 $nama_last =  $_POST["lastname"];
 $email_pengunjung = $_POST["email"];
 $no_telepon_pengunjung = $_POST["telp"];
 $tanggalcheckin =  $_POST["checkin"];
 $tanggalcheckout = $_POST["checkout"];
 $alamat_pengunjung = $_POST["alamat"];
 $validasi = $_POST["validasi"];
 $kamar = $_POST["kamar"];
 

 $update = mysqli_query($conn,"UPDATE `register_tamu` SET 
 `id_tamu` = '$id_tamu', 
 `ktp` = '$no_ktp', 
 `firstname` = '$nama_first', 
 `lastname` = '$nama_last', 
 `email` = '$email_pengunjung', 
 `telp` = '$no_telepon_pengunjung', 
 `alamat` = '$alamat_pengunjung', 
 `validasi` = '$validasi',
 `checkin` = '$tanggalcheckin', 
 `checkout` = '$tanggalcheckout',
 `nokamar` = '$kamar'
 WHERE `register_tamu`.`id_tamu` = '$id_tamu'
 ");


if ($update){
    header("location: guestlist.php?update=sukses");
} else {
    header("location: guestlist.php?update=gagal");
 }

$id_tamu         = $_GET['id'];

$delete =  mysqli_query($conn,"DELETE FROM `register_tamu` WHERE id_tamu = '$id_tamu'");

if ($delete){
    header("location: guestlist.php?delete=sukses");
} else {
    header("location: guestlist.php?delete=gagal");
}

?>