<?php
$conn = mysqli_connect("sql313.epizy.com","epiz_31898225","pWNRCFDLTa5", "epiz_31898225_uas_si");

function register($data){
    global $conn;
    $no_ktp = mysqli_real_escape_string($conn, $data["ktp"]);
    $nama_first =  mysqli_real_escape_string($conn, $data["firstname"]);
    $nama_last =  mysqli_real_escape_string($conn, $data["lastname"]);
    $email_pengunjung = strtolower(stripcslashes($data["email"]));
    $no_telepon_pengunjung = mysqli_real_escape_string($conn, $data["telp"]);
    $tanggalcheckin = mysqli_real_escape_string($conn, $data["checkin"]);
    $tanggalcheckout = mysqli_real_escape_string($conn, $data["checkout"]);
    $alamat_pengunjung = mysqli_real_escape_string($conn, $data["alamat"]);
    $validasi = mysqli_real_escape_string($conn, $data["validasi"]);
    $kamar = mysqli_real_escape_string($conn, $data["kamar"]);
    //cek kamar
     $result = mysqli_query($conn, "SELECT nokamar FROM register_tamu WHERE nokamar = '$kamar'");
     if(mysqli_fetch_assoc($result)){
         echo"<script>
         alert('maaf kamar telah ditempati!');
         </script>";
         return false;
     }
    //tambahkan ke db
    mysqli_query($conn, "INSERT INTO register_tamu VALUES('','$no_ktp','$nama_first', '$nama_last', '$email_pengunjung','$no_telepon_pengunjung','$tanggalcheckin','$tanggalcheckout', '$alamat_pengunjung','$validasi','$kamar')");
    return mysqli_affected_rows($conn);
}

function register_1($data){
    global $conn;
    $no_karyawan = mysqli_real_escape_string($conn, $data["no_karyawan"]);
    $nama_first =  mysqli_real_escape_string($conn, $data["firstname"]);
    $nama_last =  mysqli_real_escape_string($conn, $data["lastname"]);
    $email_karyawan= strtolower(stripcslashes($data["email"]));
    $no_telepon_karyawan = mysqli_real_escape_string($conn, $data["telp"]);
    $divisi =  mysqli_real_escape_string($conn, $data['divisi']);
    $alamat =  mysqli_real_escape_string($conn, $data['alamat']);
    $status =  mysqli_real_escape_string($conn, $data['status']);

    
    //tambahkan ke db
    mysqli_query($conn, "INSERT INTO register_karyawan VALUES('','$no_karyawan','$nama_first', '$nama_last', '$email_karyawan','$no_telepon_karyawan','$divisi','$alamat',' $status')");
    return mysqli_affected_rows($conn);
}

function laundry($id_tamu, $berat, $paket, $perhitungan){
    global $conn;
    $id_tamu = mysqli_real_escape_string($conn, $id_tamu);
    $berat =  mysqli_real_escape_string($conn, $berat);
    $paket =  mysqli_real_escape_string($conn, $paket);
    $perhitungan =  mysqli_real_escape_string($conn, $perhitungan);

    
    //tambahkan ke db
    mysqli_query($conn, "INSERT INTO laundry VALUES('','$id_tamu','$berat', '$paket', '$perhitungan')");
    

    
}

function fnb($data){
    global $conn;
    $nama = mysqli_real_escape_string($conn, $data["nama"]);
    $makanan =  mysqli_real_escape_string($conn, $data["makan"]);
    $minuman=  mysqli_real_escape_string($conn, $data["jenis"]);
  

    
    //tambahkan ke db
    mysqli_query($conn, "INSERT INTO fnb VALUES('','$nama','$makanan', '$minuman')");
    return mysqli_affected_rows($conn);
}

