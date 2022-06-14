<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link href="menuadmin.css" rel="stylesheet"/>
</head>
<body>
<?php 
    require 'connect_si.php';
    $id_karyawan = $_GET['id'];

    $panggil = mysqli_query($conn,"SELECT * FROM register_karyawan WHERE id_karyawan = '$id_karyawan' ");
    while ($data = mysqli_fetch_assoc($panggil)){
        $no_karyawan = $data["no_karyawan"];
        $nama_first =  $data["firstname"];
        $nama_last =  $data["lastname"];
        $email_karyawan= $data["email"];
        $no_telepon_karyawan = $data["telp"];
        $divisi = $data['divisi'];
        $alamat =  $data['alamat'];
        $status =  $data['status'];
    }
?>
        <div id="pageadmin">
            <div class="boxadmin">
                    <span class="textholmes">HOLMES</span>
                    <span class="header2">Admin</span>
                <a href="dasboard.php">
                <div class="boxmainmenu">
                    <span class="textmenu">Main Menu</span>
                    <div class="imagemainmenu"></div>
                </div>
                </a>
                <a href="index.php">
                    <div class="boxlogout">
                        <span class="textlogout">Logout</span>
                        <div class="imagelogout"></div>
                    </div>
                    </a>
                <div class="boxinput">
                    <span class="textinput">Input Employee</span>
                    <div class="imageinput"></div>
                </div>
                <a href="listemployee.php">
                <div class="boxemployee">
                    <span class="textemployee">Employee List</span>
                    <div class="imageemployee"></div>
                </div>
                </a>
            </div>
            <div class="formadmin">
                <form action="proses_edit_karyawan.php" method="post">
                <span class="textinputemployee">Edit Employee</span>
                <div class="imagedecor"></div>
                <div class="box_no_karyawan">
                <input type="hidden" name="id_karyawan" value="<?= $id_karyawan?>">
                    <div class="input_no_karyawan">
                        <input type="nomor" name="no_karyawan" id="admin" value="<?php echo $no_karyawan?>">
                    </div>
                        <span class="text_no_karyawan">No. Karyawan</span>
                </div>
                <div class="boxfn">
                    <div class="inputfn">
                        <input type="text" name="firstname" id="admin" value="<?php echo $nama_first?>">
                    </div>
                        <span class="textfn">First Name</span>
                </div>
                <div class="boxln">
                    <div class="inputln">
                        <input type="text" name="lastname" id="admin" value="<?php echo $nama_last?>">
                    </div>
                        <span class="textln">Last Name</span>
                </div>
                <div class="pos1">
                    <div class="inputtelp">
                        <input type="tel" name="telp" id="admin" value="<?php echo $no_telepon_karyawan?>">
                    </div>
                        <span class="texttelp">No. Telp</span>
                    <div class="inputemail">
                        <input type="email" name="email" id="admin" value="<?php echo $email_karyawan?>">
                    </div>
                        <span class="textemail">Email</span>
                </div>
                <div class="pos2">
                    <div class="posdivisi">
                        <input type="text" name="divisi" id="admin" value="<?php echo $divisi?>">
                    </div>
                        <span class="textposdivisi">Divisi</span>
                </div>
                <div class="posalamat">
                    <div class="inputalamat">
                        <input type="text" name="alamat" id="admin" value="<?php echo $alamat?>">
                    </div>
                    <span class="textalamat">Alamat</span>
                </div>
                <span class="textvalid">Status Karyawan</span>
                <div class="valid">
                    <select name="status" id="resep">
                        <option value="<?php echo $status?>" selected disabled>pilihan sebelumnya adalah <?php echo $status?></option>
                        <option value="super admin">Super Admin</option>
                        <option value="admin">Admin</option>
                        <option value="user">user</option>
                    </select>
                </div>
                <div class="possubmit">
                    <div class="buton">
                        <input type="submit" name="submit" value="Submit" id="admin">
                    </div>
                </div>
                </form>
            </div>
        </div>
</body>

</html> 