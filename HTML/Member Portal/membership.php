<?php

include_once '../dbh.inc.php';

session_start();

$member_id = $_SESSION['member_id'];


if(!isset($member_id)){
  header('location:login.php');
}

$select_member = mysqli_query($conn, "SELECT * FROM `members` WHERE `Student ID` = '$member_id'") or die('query failed');
$member = mysqli_fetch_assoc($select_member);
$expirydate = date("Y-m-d", strtotime("+ 365 days", strtotime($member['Date Paid'])));
$now = date("Y-m-d", time());
$daysleft = abs(strtotime($expirydate) - strtotime($now));;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Membership</title>
    <link rel="icon" href="/Images/smalllogo.png" type="image/x-icon" />
    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />

    <link rel="stylesheet" href="../../CSS/portalstyle.css" />
    <link rel="stylesheet" href="../../CSS/membership.css" />
  </head>

  <body>
  <div class="container topnav__container">
      <ul class="topnav__menu">
        <li>
          <div class="profile_content">
            <img src="../../Images/profile.jpg" class="profileimg" width="30" />
            <a href="#" class="username"><?php echo $member['First Name']; ?><?php echo $member['Last Name']; ?></a>
          </div>

          <ul class="submenu">
            <li>
              <a href="myprofile.php"
                ><i class="uil uil-user-circle"></i>My Profile</a
              >
            </li>
            <li>
              <a href="../login.php"><i class="uil uil-signout"></i>Log Out</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    

    <!--END OF TOP NAV BAR-->

    <nav>
      <div class="container sidenav__container">
        <a href="dashboard.php"
          ><img src="../../Images/logo.png" class = "navimage" alt="SMS"
        /></a>
        <ul class="sidenav__menu">
          <h5 class = "navh5">Dashboard</h5>
          <li>
            <a href="dashboard.php"><i class="uil uil-estate"></i>Dashboard</a>
          </li>
          <hr>
          <h5 class = "navh5">Membership</h5>
          <li>
            <a href="membership.php"
              ><i class="uil uil-user-square"></i>My Membership</a
            >
          </li>
          <hr>
          <h5 class = "navh5">Bookings</h5>
          <li>
            <a href="eventbooking.php"
              ><i class="uil uil-music"></i>Event Booking</a
            >
          </li>
          <li>
            <a href="mybookings.php"
              ><i class="uil uil-shopping-cart"></i>My Bookings</a
            >
          </li>
        </ul>
        
        
        <div class="nav__socials">
          <hr>
          <h5 class = "navh5">Follow Us</h5>

          <div class="links">
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
          </div>
          
        </div>

        <div class="nav__discord">
          <li>
            <a href="https://discord.gg/xreWTUQk" target="_blank"
              ><img src="../../Images/discord.svg" width="100"
            /></a>
          </li>
        </div>

        <button id="Open-menu-btn"><i class="uil uil-bars"></i></button>
        <button id="Close-menu-btn"><i class="uil uil-times"></i></button>
      </div>
    </nav>
    <!--END OF SIDE NAV BAR-->

    <div class="content">
      <section class="membership__class">
        <h2>MY MEMBERSHIP</h2>
        <div class="container membership__container">
          <ul class="membership">
            <li>Date Renewed: <?php echo $member['Date Paid']; ?></li>
            <li>Expiry Date: <?php echo $expirydate?></li>
            <li>Days Left: <?php echo round($daysleft / (60 * 60 * 24));?></li>
          </ul>

          <a href="../payment.php" target="_blank"
            ><button class="btn btn-primary">Membership Renewal</button></a
          >
        </div>
      </section>
    </div>

    <!--END OF CONTENT-->
    <script src="../../JS/portalmain.js"></script>

  </body>
</html>