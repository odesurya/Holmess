<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link href="pelaporan.css?<?php echo time(); ?>" rel="stylesheet"/>
</head>
<?php 
    require 'connect_si.php';
      
?>
<body>
        <div id="pelaporan">
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
            <div class="guestlist">
                <span class="textguestlist">Pelaporan</span>
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
                        <th width= "100px">
                            No Ktp
                        </th>
                        <th>
                            Nama
                        </th>
                        <th>
                            tanggal checkin & checkout
                        </th>
                        <th width="70px">
                            kamar
                        </th>
                        <th width="70px">
                            Biaya kamar
                        </th>
                        <th width="70px">
                            breakfast validation
                        </th>
                        <th width="100px">
                            biaya loundry
                        </th>
                        <th width="120px">
                           TOTAL yang dibayarkan
                        </th>
    
                    </tr>
                <tbody>
                    <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                   </tr>
            </div>
        </div>
</body>
    
 </html> 