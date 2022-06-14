<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link href="menuadmin.css?<?php echo time(); ?>" rel="stylesheet"/>
</head>
<?php 
require'connect_si.php';
?>
<body>
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
                <a href="pelaporan.php">
                <div class="boxlap">
                    <span class="textlap">Laporan</span>
                    <div class="imagelap"></div>
                </div>
                </a>
            </div>
            <div class="formadmin">
                <form action="" method="post">
                <span class="textinputemployee">Input Employee</span>
                <div class="imagedecor"></div>
                <div class="box_no_karyawan">
                    <div class="input_no_karyawan">
                        <input type="nomor" name="no_karyawan" id="admin">
                    </div>
                        <span class="text_no_karyawan">No. Karyawan</span>
                </div>
                <div class="boxfn">
                    <div class="inputfn">
                        <input type="text" name="firstname" id="admin">
                    </div>
                        <span class="textfn">First Name</span>
                </div>
                <div class="boxln">
                    <div class="inputln">
                        <input type="text" name="lastname" id="admin">
                    </div>
                        <span class="textln">Last Name</span>
                </div>
                <div class="pos1">
                    <div class="inputtelp">
                        <input type="tel" name="telp" id="admin">
                    </div>
                        <span class="texttelp">No. Telp</span>
                    <div class="inputemail">
                        <input type="email" name="email" id="admin">
                    </div>
                        <span class="textemail">Email</span>
                </div>
                <div class="pos2">
                    <div class="posdivisi">
                        <input type="text" name="divisi" id="admin">
                    </div>
                        <span class="textposdivisi">Divisi</span>
                </div>
                <div class="posalamat">
                    <div class="inputalamat">
                        <input type="text" name="alamat" id="admin">
                    </div>
                    <span class="textalamat">Alamat</span>
                </div>
                <span class="textvalid">Status Karyawan</span>
                <div class="valid">
                    <select name="status" id="resep">
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
<?php
    if(isset($_POST["submit"])){
	if(register_1($_POST) > 0){
		echo"<script>
		alert('Karyawan baru berhasil ditambahkan');
		</script>";
	} else {
		echo mysqli_error($conn);
	}
}
   ?>
</body>

</html> 