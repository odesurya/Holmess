<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link href="menuresepsionis.css?<?php echo time(); ?>" rel="stylesheet"/>
</head>
<?php 
    require 'connect_si.php';
    $id_tamu = $_GET['id'];

    $panggil = mysqli_query($conn,"SELECT * FROM register_tamu WHERE id_tamu = '$id_tamu' ");
    while ($data = mysqli_fetch_assoc($panggil)){
        $no_ktp =  $data["ktp"];
        $nama_first =  $data["firstname"];
        $nama_last =   $data["lastname"];
        $email_pengunjung = $data["email"];
        $no_telepon_pengunjung = $data["telp"];
        $tanggalcheckin =  $data["checkin"];
        $tanggalcheckout = $data["checkout"];
        $alamat_pengunjung = $data["alamat"];
        $validasi = $data["validasi"];
        $kamar = $data["nokamar"];
    }
?>
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
                <form action="proses_edit_tamu.php" method="post">
                <span class="textinputguest">Input Guest</span>
                <div class="imagedecor"></div>
                <input type="hidden" name="id_tamu" value="<?= $id_tamu?>">
                <div class="boxktp">
                    <div class="inputktp">
                        <input type="tel" name="ktp" id="resep" value="<?= $no_ktp?>">
                    </div>
                        <span class="textktp">No. KTP</span>
                </div>
                <div class="boxfn">
                    <div class="inputfn">
                        <input type="text" name="firstname" id="resep" value="<?= $nama_first?>">
                    </div>
                        <span class="textfn">First Name</span>
                </div>
                <div class="boxln">
                    <div class="inputln">
                        <input type="text" name="lastname" id="resep" value="<?= $nama_last?>">
                    </div>
                        <span class="textln">Last Name</span>
                </div>
                <div class="pos1">
                    <div class="inputtelp">
                        <input type="tel" name="telp" id="resep" value="<?= $no_telepon_pengunjung?>">
                    </div>
                        <span class="texttelp">No. Telp</span>
                    <div class="inputemail">
                        <input type="email" name="email" id="resep" value="<?= $email_pengunjung?>">
                    </div>
                        <span class="textemail">Email</span>
                </div>
                <div class="pos2">
                    <div class="postci">
                        <input type="date" name="checkin" id="resep" value="<?= $tanggalcheckin?>">
                    </div>
                        <span class="textpostci">Tanggal Check-in</span>
                    <div class="postco">
                        <input type="date" name="checkout" id="resep" value="<?= $tanggalcheckout?>">
                    </div>
                        <span class="textpostco">Tanggal Check-out</span>
                </div>
                <div class="posalamat">
                    <div class="inputalamat">
                        <input type="text" name="alamat" id="resep" value="<?= $alamat_pengunjung?>">
                    </div>
                    <span class="textalamat">Alamat</span>
                </div>
                <span class="textvalid">Validasi Breakfast</span>
                <div class="valid">
                    <select name="validasi" id="resep" >
                        <option value="<?php echo $validasi?>" selected disabled>pilihan sebelumnya adalah <?php echo $validasi?></option>
                        <option value="valid">Valid</option>
                        <option value="invalid">Invalid</option>
                    </select>
                </div>
                <div class="nokamar">
                    <div class="inputkamar">
                        <input type="number" name="kamar" id="resep" max="20" min="0" value="<?= $kamar?>">
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
</body>

</html> 
