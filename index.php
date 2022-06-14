<?php
require 'connect_si.php';

session_start();
 
if (isset($_POST['submit'])) {
    $username_admin = $_POST['username'];
    $password_admin = $_POST['password'];
 
    $sql = "SELECT * FROM admin_login WHERE username_admin='$username_admin' AND password_admin ='$password_admin'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: dasboard.php");
    } 
    $error = true ;
}
?>

<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Baloo+2&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link href="login.css" rel="stylesheet">
    </head>
    <body>
        <div id="layout">
            <div class="headerlogin">
                <div class="boxheader"></div>
                <span class="textheader">Hotel Management System (HOLMES)</span>
            </div>
        <form action="" method="post">
            <div class="boxlogin1"> 
                <a href="dasboard.html">
                <div class="imagedecor"></div>
               </a>
                <div class="usernamebox">
                <?php if(isset($error)) : ?>
                 <p style ="color : red; font-style: italic;"> username/password salah!!</p>
                <?php endif; ?>
                    <div class="username">
                        <div class="usernameimage"></div>
                        <input type="text" name="username" id="login" placeholder="Username">
                    </div>
                </div>
                <div class="passwordbox">
                    <div class="password">
                        <div class="passwordimage"></div>
                        <input type="Password" name="password" id="login" placeholder="Password">
                    </div>
                </div>
                <span class="textlogin">LOGIN</span>
            </div>
                <div class="loginbuton">
                    <span class="loginbutontext"> <input type="submit" name="submit" value="Login" id="login"></span>
                </div>
        </form>
    </div>
</body>
</html> 

