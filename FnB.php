<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link href="FnB.css" rel="stylesheet"/>
</head>
<body>
        <div id="pageFnB">
            <div class="boxadmin">
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
                <div class="boxvalid">
                    <span class="textvalid">Validasi Breakfast</span>
                    <div class="imagevalid"></div>
                </div>
                <a href="update_FnB.php">
                    <div class="boxupdatefnb">
                        <span class="textupdatefnb">Input FnB<br>(Tamu Hotel)</span>
                        <div class="imageupdatefnb"></div>
                    </div>
                </a>
                    <div class="boxupdatefnb1">
                        <span class="textupdatefnb1">Input FnB<br>(Tamu Resto)</span>
                        <div class="imageupdatefnb1"></div>
                    </div>
            </div>
            <div class="validfnb">
                <span class="textvalidbreak">Valid Breakfast</span>
                <span class="textshow">Show</span>
                <div class="droplist">
                   <form name="formdroplist" action="" method="get">
                       <select name="">
                         <option value="lima" selected="selected">5</option>
                         <option value="sepuluh">10</option>
                         <option value="duapuluh">20</option>
                       </select>
                       </form>
                </div>
                <span class="textentries">entries</span>
             <form action="" method="post">
                <div class="search">
                <input type="text" name="search" id="guestlist">
                </div>
                <div class="buton">
                <input type="image" name="buton" id ="guestlist" src="image/search.png">
                 </div>
             </form>
             <table class="tabel">
                <thead>
                    <tr>
                        <th width="20px">
                         <input type="checkbox" name="select">
                        </th>
                        <th width="70px">
                            Tanggal
                        </th>
                        <th width="150px">
                            No Kamar
                        </th>
                        <th width="70px">
                            Nama Tamu
                        </th>
                        <th width="70px">
                            Status
                        </th>
                        <th width="70px">
                            Action
                        </th>
                    </tr>
                <tbody>
                <?php 
                require 'connect_si.php';
                $pengunjung = mysqli_query($conn, "SELECT * FROM register_tamu");
                while($panggil_pengunjung = mysqli_fetch_assoc($pengunjung)){
                ?>
                    <tr>
                    <td>
                        <input type="checkbox" name="select">
                    </td>
                    <td><?php echo $panggil_pengunjung['checkout']?></td>
                    <td><?php echo $panggil_pengunjung['nokamar']?></td>
                    <td><?php echo $panggil_pengunjung['firstname']. " " .$panggil_pengunjung['lastname']?></td>
                    <td><?php echo $panggil_pengunjung['validasi']?></td>
                    <td>
                        <a href="">
                            <div class="edit"></div>
                        </a> 
                        <a href="">
                            <div class="hapus"></div>
                        </a>
                    </td>
                   </tr>
                   <?php 
                }
                ?>
                 </div>
            </div> 
        </div>
</body>

</html> 