<?php

include_once 'dbh.inc.php';

if(isset($_POST['add'])){

    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $imail = mysqli_real_escape_string($conn, $_POST['EmailAddress']);
    $cimail = mysqli_real_escape_string($conn, $_POST['ConfirmEmailAddress']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    $cpass = mysqli_real_escape_string($conn, $_POST['confirmpassword']);
    $id = substr($imail, 0, 8);

    $select_members = mysqli_query($conn, "SELECT * FROM `members` WHERE `Imail` = '$imail' AND `Password`= '$pass'") or die('query failed');

    if(mysqli_num_rows($select_members) > 0){
        $message[] = 'user already exist';
    }else{

        if($imail != $cimail){
            $message[] = 'confirm imail not matched!';
        }else{
            if($pass != $cpass){
                $message[] = 'confirm password not matched!';
            }else{
                $sql = "INSERT INTO `members` (`Student ID`, `First Name`, `Last Name`, `Imail`, `Password`) 
            VALUES ('$id','$firstname', '$lastname','$imail', '$pass')";
            mysqli_query($conn, $sql) or die('query failed');

            $message[] = 'Registered successfully!';
            } 
        }
        
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
    <nav>
      <div class="container nav__container">
        <a href="index.php" class="navimage"
          ><img src="../Images/logo.png" alt="SMS"
        /></a>
      </div>
    </nav>

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

    <div class="container login__container">
      <div class="login__left">

        <h1>Register Membership</h1>

        <p>
          Fill in the official registration form to join our society, then fill
          the rest of the info to create a membership account on our website.
        </p>

        <a href="payment.php" target="_blank"
          ><button class="btn btn-primary">Pay Membership Fee</button></a
        >

        <form action="" method="post">
          <p class="warningtext">
            <i
              >*creating an account without paying membership fee (RM15/Year)
              will not make you an official member of our society.</i
            >
          </p>

          <div class="form__name">
            <p>First Name</p>
            <p>Last Name</p>
            <input
              type="text"
              name="firstname"
              placeholder="First Name"
              required
            />

            <input
              type="text"
              name="lastname"
              placeholder="Last Name"
              required
            />
          </div>

          <div class="form__imail">
            <p>Imail Address</p>
            <p>Confirm Imail</p>
            <input
              type="email"
              name="EmailAddress"
              placeholder="example@imail.edu.my"
              required
            />

            <input
              type="email"
              name="ConfirmEmailAddress"
              placeholder="example@imail.edu.my"
              required
            />
          </div>

          <div class="form__password">
            <p>Password</p>
            <p>Confirm Password</p>
            <input
              type="password"
              name="password"
              placeholder="Your password"
              required
            />

            <input
              type="password"
              name="confirmpassword"
              placeholder="Repeat your password"
              required
            />
          </div>
          <button type="submit" name="add" class="btn btn-primary">
            Create An Account
          </button>
          <a href="login.php">Log into your account</a>
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
