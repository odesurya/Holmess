<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link href="update_FnB.css" rel="stylesheet"/>
</head>
<body>
        <div id="pageFnB">
            <div class="boxadmin">
            <input type="hidden" name="id_tamu" value="<?= $id_tamu?>">
                    <span class="textholmes">HOLMES</span>
                    <span class="header2">FnB</span>
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
                <a href="FnB.php">
                <div class="boxvalid">
                    <span class="textvalid">Validasi Breakfast</span>
                    <div class="imagevalid"></div>
                </div>
                </a>
                <div class="boxupdatefnb">
                    <span class="textupdatefnb">Input FnB<br>(Tamu Hotel)</span>
                    <div class="imageupdatefnb"></div>
                </div>
                <div class="boxupdatefnb1">
                    <span class="textupdatefnb1">Input FnB<br>(Tamu Resto)</span>
                    <div class="imageupdatefnb1"></div>
                </div>
            </div>
            <div class="updatefnb">
                <span class="textupfnb">Input Fn'B (Breakfast untuk Tamu Hotel)</span>
            </div>
            <form name="formdroplist" action="" method="post">
                <div class="boxdroplist"> 
                <div class="nama">
                        <span>Nama</span>
                            <select name="nama">
                            <option value="nama" selected disabled ="disabled">Nama Tamu Valid</option>
                            <?php 
                             require 'connect_si.php';
                             $panggil = mysqli_query($conn,"SELECT * FROM register_tamu WHERE validasi = 'valid' ");
                             while ($data = mysqli_fetch_assoc($panggil)){
                             ?>
                                 <option value="<?php echo $data['id_tamu']?>">
                                 <?php echo $data['firstname']. " " .$data['lastname']?></option>
                            <?php
                             }
                             ?>
                            </select>

                     </div>
                    <div class="paketmakanan" >
                        <span>Paket Makanan</span>
                            <select name="makan">
                              <option value="Nasi Goreng">Nasi Goreng</option>
                              <option value="Kentang Goreng">Kentang Goreng</option>
                              <option value="Salad">Salad</option>
                            </select>
                     </div>
                     <div class="jenisminuman">
                         <span>Jenis Minuman</span>
                        <select name="jenis">
                          <option value="jenisex" selected="selected" disabled="disabled">Jenis minuman</option>
                          <option value="Air mineral">air mineral</option>
                          <option value="Teh">Teh</option>
                          <option value="Coffe">Coffe</option>
                        </select>
                     </div>
                     <div class="submit">
                      <input type="submit" name="submit" id="submit" value="Submit">
                     </div>
                </div> 
            </form>
        </div>
</body>
<?php
    if(isset($_POST["submit"])){
	if(fnb($_POST) > 0){
		echo"<script>
		alert('pesanan baru berhasil ditambahkan');
		</script>";
	} else {
		echo mysqli_error($conn);
	}
}
   ?>
</html> 