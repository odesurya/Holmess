<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link href="laundryservice.css" rel="stylesheet"/>
</head>
<body>
        <div id="lnservice">
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
                <a href="laundry.php">
                <div class="cost">
                    <span class="textcost">Cost Estimate</span>
                    <div class="imagecost"></div>
                </div>
                </a>
                <div class="service">
                    <span class="textservice">Laundry Service</span>
                    <div class="imageservice"></div>
                </div>
            </div>
            <div class="laundryservice">
                <span class="textlaundryservice">Laundry Service</span>
            </div>
            <form name="formdroplist" action="" method="get">
                <div class="boxdroplist"> 
                    <div class="berat">
                      <span>Berat /KG</span>
                      <input type="number" value="kg" id="berat" min="0" max="20">
                   </div>
                    <div class="paket">
                        <span>Paket</span>
                            <select name="paket">
                              <option value="paketa">Paket A</option>
                              <option value="paketb">Paket B</option>
                              <option value="paketc">Paket C</option>
                            </select>
                     </div>
                     <div class="jenis">
                         <span>Jenis Pakaian</span>
                        <select name="jenis">
                          <option value="jenisex" selected="selected" disabled="disabled">Jenis Pakaian</option>
                          <option value="jenisa">Pakaian</option>
                          <option value="jenisb">Celana</option>
                          <option value="jenisc">Bad Cover</option>
                        </select>
                     </div>
                     <div class="submit">
                      <input type="submit" name="submit" id="laundryservice" value="Add Order">
                     </div>
                </div> 
            </form>   
        </div>
</body>

</html> 