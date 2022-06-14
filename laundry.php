<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link href="laundry.css?<?php echo time(); ?>" rel="stylesheet"/>
  
</head>
<body>
        <div id="laundry">
            <div class="boxadmin">
                    <span class="textholmes">HOLMES</span>
                    <span class="header2">Laundry</span>
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
                <div class="cost">
                    <span class="textcost">Cost Estimate</span>
                    <div class="imagecost"></div>
                </div>
                <a href="laundryservice.php">
                <div class="service">
                    <span class="textservice">Laundry Service</span>
                    <div class="imageservice"></div>
                </div>
                </a>
            </div>
            <div class="servicecost">
                <span class="textservicecost">Service Cost Estimate</span>
            </div>
            <form name="formdroplist" action="" method="get">
                <div class="boxdroplist"> 
                <div class="nama">
                        <span>Nama</span>
                            <select name="nama" >
                            <option value="nama" selected disabled ="disabled" >Nama Tamu</option>

                            <?php 
                             require 'connect_si.php';
                             $panggil = mysqli_query($conn,"SELECT * FROM register_tamu");
                             while ($data = mysqli_fetch_assoc($panggil)){
                             ?>
                                <option value="<?php echo $data['id_tamu']?>" 
                                <?php 
                                    if(isset($_GET['nama']) )
                                    {
                                        if($_GET['nama'] == $data['id_tamu'])
                                        {
                                            echo "selected";
                                        } 
                                    } 
                                ?>

                                ><?php echo $data['firstname']. " " .$data['lastname']?></option>
                            <?php
                             }
                             ?>
                            </select>

                     </div>
                    <div class="berat">
                      <span>Berat /KG</span>
                      <input type="number" value="<?php if(isset($_GET['submit']) == "Estimate"){echo $_GET['berat'];}else{echo 0;} ?>" id="berat" min="0" max="20" name="berat">
                   </div>
                    <div class="paket">
                        <span>Paket</span>
                            <select name="paket">
                              <option value="paketa_10000">Paket A</option>
                            </select>
                     </div>
                     <!-- <div class="jenis">
                         <span>Jenis Pakaian</span>
                        <select name="jenis">
                          <option value="jenisex" selected="selected" disabled="disabled">Jenis Pakaian</option>
                          <option value="jenisa">Pakaian</option>
                          <option value="jenisb">Celana</option>
                          <option value="jenisc">Bad Cover</option>
                        </select>
                     </div> -->
                     <div class="submit">
                      <input type="submit" name="submit" id="submit"   value="Estimate">
                     </div>

                     <?php 

                        if(isset($_GET['submit']) == "Estimate")
                        {
                            $berat = $_GET['berat'];
                            $paket = explode("_", $_GET['paket']);
                            $harga_paket = $paket[1];
                            if($_GET['submit'] == "Estimate")
                            {
                                $status = "up";
                            }elseif($_GET['submit'] == "Cancel"){
                                $status = "down";
                            }else{
                                $status = "";
                            }

                            $perhitungan = $berat*$harga_paket;

                            echo '<div class="popup '.$status.' " > 
                            
                                <div class="container">
                                <div class="estimate">Cost Estimate</div>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td width="20%" >ID Tamu</td>
                                            <td width="20%" class="center" >:</td>
                                            <td width="75%" >'.$_GET['nama'].'</td>
                                        </tr>
                                        <tr>
                                            <td>Berat</td>
                                            <td width="20%" class="center">:</td>
                                            <td>'.$_GET['berat'].' kg </td>
                                        </tr>
                                        <tr>
                                            <td>Paket</td>
                                            <td width="20%" class="center">:</td>
                                            <td>'.$paket[0].'</td>
                                        </tr>
                                        <tr>
                                            <td>Perhitungan</td>
                                            <td width="20%" class="center">:</td>
                                            <td>'.$berat .' x '.$harga_paket.'</td>
                                        </tr>
                                        <tr>
                                            <td>Total Harga</td>
                                            <td width="20%" class="center">:</td>
                                            <td> Rp.'.$perhitungan.'</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                <div class="kirim">
                                <input type="submit" name="submit" id="submit" value="Kirim">
                                </div>
                                <div class="cancel">
                                    <input type="submit" name="submit" id="submit" value="Cancel">
                                </div>
                
                                </div>

                            </div>';
                        }
                    ?>
                <?php 

                    if(isset($_GET['submit']))
                    {
                        if($_GET['submit'] == "Kirim")
                        {
                           
                            laundry($_GET['nama'], $berat, $paket[0], $perhitungan);

                            echo"<script>
                            alert('pesanan laundry berhasil diinput');
                            </script>";
                        }
                    }
                ?>

                </div> 
            </form>   
        </div>

        
</body>

</html> 