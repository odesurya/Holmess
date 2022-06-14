
<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link href="listemployee.css?<?php echo time(); ?>" rel="stylesheet"/>
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
        <div id="pageemployee">
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
                <a href="menuadmin.php">
                <div class="boxinput">
                    <span class="textinput">Input Employee</span>
                    <div class="imageinput"></div>
                </div>
                </a>
                <div class="boxemployee">
                    <span class="textemployee">Employee List</span>
                    <div class="imageemployee"></div>
                </div>
                <a href="pelaporan.php">
                <div class="boxlap">
                    <span class="textlap">Laporan</span>
                    <div class="imagelap"></div>
                </div>
                </a>
            </div>
            <div class="employeelist">
                <span class="textemployeelist">Employee List</span>
             <table class="tabel">
                <thead>
                    <tr>
                        <th width="20px">
                         <input type="checkbox" name="select">
                        </th>
                        <th width="70px">
                            No. Karyawan
                        </th>
                        <th width="70px">
                            Divisi
                        </th>
                        <th width="150px">
                            Nama
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
                $karyawan = mysqli_query($conn, "SELECT * FROM register_karyawan");
                while($panggil_karyawan = mysqli_fetch_assoc($karyawan)){
                ?>
                    <tr>
                    <td>
                        <input type="checkbox" name="select">
                    </td>
                    <td><?php echo $panggil_karyawan['no_karyawan']?></td>
                    <td><?php echo $panggil_karyawan['divisi']?></td>
                    <td><?php echo $panggil_karyawan['firstname']. " " .$panggil_karyawan['lastname']?></td>
                    <td><?php echo $panggil_karyawan['status']?></td>
                    <td>
                        <a href="editemployeelist.php?id=<?php echo $panggil_karyawan['id_karyawan']?>">
                            <div class="edit"></div>
                        </a> 
                        <a href="proses_edit_karyawan.php?id=<?php echo $panggil_karyawan['id_karyawan']?>">
                            <div class="hapus"></div>
                        </a>
                    </td>
                   </tr>
            </div>
            <?php 
                }
            ?>
        </div>
</body>