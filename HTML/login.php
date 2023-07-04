<?php

include_once 'dbh.inc.php';
session_start();

if(isset($_POST['add'])){

    $imail = mysqli_real_escape_string($conn, $_POST['EmailAddress']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    $id = substr($imail, 0, 8);

    $select_members = mysqli_query($conn, "SELECT * FROM `members` WHERE `Imail` = '$imail' AND `Password`= '$pass'") or die('query failed');
    $select_admin = mysqli_query($conn, "SELECT * FROM `admin` WHERE `Email` = '$imail' AND `Password` = '$pass'") or die('query failed');

    if(mysqli_num_rows($select_members) > 0){
        $row = mysqli_fetch_assoc($select_members);

        $_SESSION['member_name'] = $row['First Name'];
        $_SESSION['member_imail'] = $row['Imail'];
        $_SESSION['member_id'] = $row['Student ID'];

        header('location:Member Portal/dashboard.php');

    }elseif(mysqli_num_rows($select_admin) > 0){
        $row = mysqli_fetch_assoc($select_admin);

        $_SESSION['admin_email'] = $row['Email'];
        $_SESSION['admin_id'] = $row['Admin ID'];
        header('location:Edit_Announcement.php');

    }else{
        $message[] = 'User not found!';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Member's Portal</title>
    <link rel="icon" href="/Images/smalllogo.png" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />

    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="stylesheet" href="../CSS/registerandlogin.css" />

    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>

  <?php
  if(isset($message)){
    foreach($message as $message){
      echo '
      <div class="message">
        <span>'.$message.'</span>
        <i class="uil uil-times"onclick="this.parentElement.remove();"></i>
      
      </div>
      ';
    }
  }
  ?>

    <nav>
      <div class="container nav__container">
        <a href="index.php" class="navimage"
          ><img src="../Images/logo.png" alt="SMS"
        /></a>
      </div>
    </nav>

    <div class="container login__container">
      <div class="login__left">
        <h1>Welcome Back!</h1>
        <p>Fill in your email and password to log in.</p>

        <form action="" method="post">
          <div class="login__input">
            <p>Imail</p>
            <input
              type="email"
              name="EmailAddress"
              placeholder="example@imail.edu.my"
              required
            />
            <p>Password</p>
            <input
              type="password"
              name="password"
              placeholder="your password"
              required
            />
          </div>
          <button type="submit" name="add" class="btn btn-primary">Login</button>
          <a href="forgotpassword.php">Forgot password?</a>

          <a href="register.php">Not a member yet? Register here...</a>
        </form>
      </div>

      <div class="login__right">
        <img src="../Images/login pic.jpg" width="350" />
      </div>
    </div>

    <footer class="footer">
      <div class="container footer__container">
        <div class="footer__1">
          <a href="index.php"><h4>SUNWAY MUSIC SOCIETY</h4> </a>
          <p>Never Too Late to Jam!</p>
          <div class="footer__discord">
            <li>
              <a href="https://discord.gg/xreWTUQk" target="_blank"
                ><img src="../Images/discord.svg" width="100"
              /></a>
            </li>
          </div>
        </div>

        <div class="footer__2">
          <p>
            Email:
            <a href="mailto:">sunwaymusicsocietyofficial@gmail.com</a>
          </p>
          <p>
            Location: 5, Jalan Universiti, Bandar Sunway, 47500 Petaling Jaya,
            Selangor
          </p>
          <ul class="footer__socials">
            <li>
              <a
                href="https://www.instagram.com/sunwaymusicsociety/"
                target="_blank"
                ><i class="uil uil-instagram"></i
              ></a>
            </li>
            <li>
              <a
                href="https://www.facebook.com/sunwaymusicsociety"
                target="_blank"
                ><i class="uil uil-facebook"></i
              ></a>
            </li>
            <li>
              <a
                href="https://www.youtube.com/channel/UCRjgtQFxKOy8lXGl0SiKj1g"
                target="_blank"
                ><i class="uil uil-youtube"></i
              ></a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
  </body>
</html>
