<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link href="guestlist.css?<?php echo time(); ?>" rel="stylesheet"/>
</head>
<?php 
require'connect_si.php';
if(isset($_GET['input']))
{
    $input = $_GET['input'];
}

if(isset($_GET['delete']))
{
    $delete = $_GET['delete'];
}

if(isset($_GET['update']))
{
    $update = $_GET['update'];;
}



if(isset($input) == 'sukses')
{
    echo '<div class="notif" >Input Berhasil</div>';

}elseif(isset($delete) == 'sukses')
{
    echo '<div class="notif" >delete Berhasil</div>';
}
elseif(isset($update) == 'sukses')
{
    echo '<div class="notif" >update Berhasil</div>';
}
?>

<body>
        <div id="pageguestlistresep">
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
                <a href="menuresepsionis.php">
                <div class="boxinput">
                    <span class="textinput">Input Guest</span>
                    <div class="imageinput"></div>
                </div>
                </a>
                <div class="boxguest">
                    <span class="textguest">Guest List</span>
                    <div class="imageguest"></div>
                </div>
            </div>
            <div class="guestlist">
                <span class="textguestlist">Guest List</span>
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
                        <th width= "40px">
                            No kamar
                        </th>
                        <th>
                            First Name
                        </th>
                        <th>
                            Last Name
                        </th>
                        <th width="70px">
                            Alamat
                        </th>
                        <th width="70px">
                            Tanggal Check-in
                        </th>
                        <th width="70px">
                            Tanggal Check-out
                        </th>
                        <th width="100px">
                            No. Telepon
                        </th>
                        <th width="120px">
                           Email
                        </th>
                        <th width="70px">
                            Breakfast Validation
                        </th>
                        <th>
                            Edit
                        </th>
                        <th>
                            Delete
                        </th>
                        <th>
                            Invoice
                        </th>
                    </tr>
                <tbody>
                <?php 
                $pengunjung = mysqli_query($conn, "SELECT * FROM register_tamu");
                while($panggil_pengunjung = mysqli_fetch_assoc($pengunjung)){
                ?>
                    <tr>
                    <td><?php echo $panggil_pengunjung['nokamar']?></td>
                    <td><?php echo $panggil_pengunjung['firstname']?></td>
                    <td><?php echo $panggil_pengunjung['lastname']?></td>
                    <td><?php echo $panggil_pengunjung['alamat']?></td>
                    <td><?php echo $panggil_pengunjung['checkin']?></td>
                    <td><?php echo $panggil_pengunjung['checkout']?></td>
                    <td><?php echo $panggil_pengunjung['telp']?></td>
                    <td><?php echo $panggil_pengunjung['email']?></td>
                    <td><?php echo $panggil_pengunjung['validasi']?></td>
                    <td>
                        <a href="editguestlist.php?id=<?php echo $panggil_pengunjung['id_tamu']?>">
                            <div class="edit">Edit</div>
                        </a> 
                    </td>
                    <td>
                        <a href="proses_edit_tamu.php?id=<?php echo $panggil_pengunjung['id_tamu']?>">
                            <div class="hapus">Delete</div>
                        </a>
                    </td>
                    <td>
                        <a href="invoice.php?id=<?php echo $panggil_pengunjung['id_tamu']?>">
                            <div class="invoice">
                                <img src="image/invoice\ 1.png" alt="invoice">
                            </div>
                        </a>
                    </td>
                   </tr>
                <?php 
                }
                ?>
            </div>
        </div>
</body>
    
 </html> 