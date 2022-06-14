<?php
require 'connect_si.php';

?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link href="menuresepsionis.css?<?php echo time(); ?>" rel="stylesheet"/>
</head>
<body>
        <div id="pageresep">
            <div class="boxresep">
                    <span class="textholmes">HOLMES</span>
                    <span class="header2">Resepsionis</span>
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
                    <span class="textinput">Input Guest</span>
                    <div class="imageinput"></div>
                </div>
                <a href="guestlist.php">
                <div class="boxguest">
                    <span class="textguest">Guest List</span>
                    <div class="imageguest"></div>
                </div>
                </a>
            </div>
            <div class="formresep">
                <form action="" method="post">
                <span class="textinputguest">Input Guest</span>
                <div class="imagedecor"></div>
                <div class="boxktp">
                    <div class="inputktp">
                        <input type="tel" name="ktp" id="resep">
                    </div>
                        <span class="textktp">No. KTP</span>
                </div>
                <div class="boxfn">
                    <div class="inputfn">
                        <input type="text" name="firstname" id="resep">
                    </div>
                        <span class="textfn">First Name</span>
                </div>
                <div class="boxln">
                    <div class="inputln">
                        <input type="text" name="lastname" id="resep">
                    </div>
                        <span class="textln">Last Name</span>
                </div>
                <div class="pos1">
                    <div class="inputtelp">
                        <input type="tel" name="telp" id="resep">
                    </div>
                        <span class="texttelp">No. Telp</span>
                    <div class="inputemail">
                        <input type="email" name="email" id="resep">
                    </div>
                        <span class="textemail">Email</span>
                </div>
                <div class="pos2">
                    <div class="postci">
                        <input type="date" name="checkin" id="resep">
                    </div>
                        <span class="textpostci">Tanggal Check-in</span>
                    <div class="postco">
                        <input type="date" name="checkout" id="resep">
                    </div>
                        <span class="textpostco">Tanggal Check-out</span>
                </div>
                <div class="posalamat">
                    <div class="inputalamat">
                        <input type="text" name="alamat" id="resep">
                    </div>
                    <span class="textalamat">Alamat</span>
                </div>
                <span class="textvalid">Validasi Breakfast</span>
                <div class="valid">
                    <select name="validasi" id="resep">
                        <option value="valid">Valid</option>
                        <option value="invalid">Invalid</option>
                    </select>
                </div>
                <div class="nokamar">
                    <div class="inputkamar">
                        <input type="number" name="kamar" id="resep" max="20" min="0">
                    </div>
                        <span class="textkamar">No Kamar</span>
                </div>
                <div class="possubmit">
                    <div class="buton">
                        <input type="submit" name="register" value="Submit" id="resep">
                    </div>
                </div>
                </form>
            </div>
        </div>
    <?php
    if(isset($_POST["register"])){
	if(register($_POST) > 0){
		echo"<script>
		alert('Pengunjung baru berhasil ditambahkan');
		</script>";
	} else {
		echo mysqli_error($conn);
	}
}
   ?>
</body>

</html> 