<?php 
 require 'connect_si.php';

 $id_karyawan = $_POST['id_karyawan'];
 $no_karyawan = $_POST["no_karyawan"];
 $nama_first =  $_POST["firstname"];
 $nama_last =  $_POST["lastname"];
 $email_karyawan = $_POST["email"];
 $no_telepon_karyawan = $_POST["telp"];
 $divisi = $_POST['divisi'];
 $alamat =  $_POST['alamat'];
 $status =  $_POST['status'];


 $update = mysqli_query($conn,"UPDATE `register_karyawan` SET `id_karyawan` = '$id_karyawan', `no_karyawan` = '$no_karyawan', `firstname` = '$nama_first', `lastname` = '$nama_last', `email` = '$email_karyawan', `telp` = '$no_telepon_karyawan', `divisi` = '$divisi', `alamat` = '$alamat', `status` = '$status' WHERE `register_karyawan`.`id_karyawan` = '$id_karyawan'
 ");

if ($update){
    header("location: listemployee.php?update=sukses");
} else {
    header("location: listemployee.php?update=gagal");
 }


$id_karyawan          = $_GET['id'];

$delete =  mysqli_query($conn,"DELETE FROM `register_karyawan` WHERE id_karyawan = '$id_karyawan'");

if ($delete){
    header("location: listemployee.php?delete=sukses");
} else {
    header("location: listemployee.php?delete=gagal");
}

?>