<?php 
require 'connect_si.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="dasboard.css?<?php echo time();?> ">
        
    </head>
        
        <body>
            <div class="layout">
                <div class="boxheader">
                    <div class="box1"></div>
                    <span class="texthotel">Hotel Management System (HOLMES)</span>
                    <a href="index.php">
                    <div class="posisilogout">
                        <div class="posisiresepsionis">
                        </div>
                    </div>
                    </a>
                    <form action="" method="post"> 
                    <span class="textresepsionis1">
                    <?php echo "<a>" . $_SESSION['username'] . "</a>"; ?>
                    </span>
                    </form>
                </div>
                <a href="menuresepsionis.php">
                <div class="boxresepsionis">
                    <div class="resepdecoration">
                        <div class="resep1"></div>
                        <div class="resep2"></div>
                    </div>
                    <span class="textresepsionis">Resepsionis</span>
                        <div class="posisiimage"></div>
                </div>
                </a>
                <a href="FnB.php">
                <div class="boxfood">
                    <div class="fooddecoration">
                        <div class="food1"></div>
                        <div class="food2"></div>
                    </div>
                    <span class="textfood">Food N’ Beverage</span>
                        <div class="posisiimage1"></div>
                </div>
                </a>
                <a href="menuadmin.php">
                <div class="boxadmin">
                    <div class="admindecoration">
                        <div class="admin1"></div>
                        <div class="admin2"></div>
                    </div>
                    <span class="textadmin">Admin</span>
                        <div class="posisiimage2"></div>
                </div>
                </a>
                <a href="laundry.php">
                <div class="boxlaundry">
                    <div class="laundrydecoration">
                        <div class="laun1"></div>
                        <div class="laun2"></div>
                    </div>
                        <span class="textlaundry">Laundry</span>
                        <div class="posisiimage3"></div>
                </div>
                </a>
            </div>
        </body>
    </html> 