<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link href="invoice.css?<?php echo time(); ?>" rel="stylesheet"/>
</head>
<?php 
    require 'connect_si.php';
    $id_tamu = $_GET['id'];

    $panggil = mysqli_query($conn,"SELECT * FROM register_tamu WHERE id_tamu = '$id_tamu'");
    $loundry = mysqli_query($conn,"SELECT * FROM laundry WHERE id_tamu = '$id_tamu'");
    $fnb = mysqli_query($conn,"SELECT * FROM fnb WHERE id_tamu = '$id_tamu'");

    $data = mysqli_fetch_assoc($panggil);
    $loundry_data = mysqli_fetch_assoc($loundry);
    $fnb_data = mysqli_fetch_assoc($fnb);
      
?>
<script>javascript:window.print()</script>
<body>
        
            
            
            
             <div class="invoice">
             <form action="" method="get">
                 <div class="invoicetext"> Invoice </div>
                 <input type="hidden" name="id_tamu" value="<?= $id_tamu?>">
                 <div class="profile">
                 <table>
                     <tbody>
                         <tr>
                            <td>Holmes</td>
                         </tr>
                         <tr> 
                             <td>Griya Tegeh Kuta</td>
                        </tr>
                         <tr><td>kuta badung </td></tr>
                         <tr><td>indonesia</td></tr>
                         <tr><td>801211</td></tr>
                     </tbody>
                 </table>
                 </div>
                 <div class="tamuinclude">
                 <table>
                     <tbody>
                         <tr><td>Nama : <?php echo $data["firstname"]." ".$data["lastname"] ?></td></tr>
                         <tr><td>Room : <?php echo $data["nokamar"] ?></td></tr>
                         <tr><td>2days/1night</td></tr>
                         <tr><td><?php echo $data["validasi"] ?></td></tr>
                         <tr><td><?php echo $data["checkin"]."/".$data["checkout"] ?></td></tr>
                     </tbody>
                 </table>
                 </div>
                 <div class="booktext"> book invoice</div>
                 <table border="1" class="invroom">
                     <thead>
                         <tr>
                         <th width="auto">Service</th>
                         <th width="auto">Charger Amount</th>
                         <th width="auto">Discount</th>
                         <th width="auto">Line Total</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td>Pesan kamar <?php echo $data["checkin"] ." sampai ".$data["checkout"]  ?></td>
                             <td>Rp.500.000</td>
                             <td>-</td>
                             <td>Rp.500.000</td>
                         </tr>
                         <?php if($data["validasi"] == "valid"){ ?>
                         <tr>
                             <td><?php echo $fnb_data["makanan"] ." dan ".$fnb_data["minuman"]  ?></td>
                             <td>0</td>
                             <td>0</td>
                             <td>0</td>
                         </tr>
                         <?php } ?>
                     </tbody>
                 </table>
                <?php if(!empty($loundry_data)){ ?>
                 <div class="loundrytext"> loundry invoice</div>
                 <table border="1" class="loundry">
                     <thead>
                         <tr>
                         <th width="auto">Loundry</th>
                         <th width="auto">Berat</th>
                         <th width="auto">Discount</th>
                         <th width="auto">Total loundry</th>
                         </tr>
                     </thead>
                     <tbody>
                     <?php 
                     $tot_loundry = 500000;
                     while($loundry_data = mysqli_fetch_assoc($loundry)){
                        $tot_loundry += $loundry_data["perhitungan"]
                       ?>
                         <tr>
                             <td><?php echo $loundry_data["paket"]?></td>
                             <td><?php echo $loundry_data["berat"]?></td>
                             <td>0</td>
                             <td><?php echo $loundry_data["perhitungan"]?></td>
                         </tr>
                        <?php } ?>
                     </tbody>
                 </table>
                 <?php } ?>
                 <table class="foot" border="1">
                 <tfoot>
                         <tr>
                             <td >Grand Total</td>
                             <td ><?php echo  $tot_loundry ?></td>
                         </tr>
                     </tfoot>
                 </table>

                
                </form>
             </div>
            
        
        
</body>

</html> 