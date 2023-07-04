<?php

include_once '../dbh.inc.php';

session_start();

$member_id = $_SESSION['member_id'];


if(!isset($member_id)){
  header('location:login.php');
}

$select_member = mysqli_query($conn, "SELECT * FROM `members` WHERE `Student ID` = '$member_id'") or die('query failed');
$member = mysqli_fetch_assoc($select_member);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="icon" href="/Images/smalllogo.png" type="image/x-icon" />
   <!--Font-->
   <link rel="preconnect" href="https://fonts.googleapis.com" />
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
   <link
     href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
     rel="stylesheet"
   /><link
     rel="stylesheet"
     href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
   />

   <link rel="stylesheet" href="../../CSS/portalstyle.css" />
   <link rel="stylesheet" href="../../CSS/dashboard.css" />
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
      <section class="monthevent">
        <h2>THIS MONTH'S EVENT</h2>

        <div class="container monthevent__container">

        <?php

                $sql = "SELECT * FROM events;";

                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0){
                while($row = mysqli_fetch_assoc($result)){

            ?>
            <article class="month__event">
                <h4><?php echo $row['Event Name']; ?></h4>
                <p>
                    <ul>
                        <li>Time: <?php echo $row['Start Time']; ?> to <?php echo $row['End Time']; ?></li>
                        <li>Date: <?php echo $row['Date']; ?></li>
                        <li>Venue: <?php echo $row['Venue']; ?></li>
                        <li>Entry Fee: RM<?php echo $row['Fee']; ?></li>
                    </ul>
                </p>
            </article>
            <?php
                }
                }else{
                echo '<p class="empty">no product added yet!</p>';
                }
            ?>
            
            <a href="eventbooking.php"><button class="btn btn-primary" >Book Event here</button></a>
        </div>
    </section>

    <section class="announcement__class">
        <h2>ANNOUNCEMENT</h2>
        <div class="container announcement__container">

            <?php

                $sql = "SELECT * FROM announcement;";

                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0){
                while($row = mysqli_fetch_assoc($result)){

            ?>

            <article class="announcement">
                <h4><?php echo $row['Announcement Title']; ?></h4>
                <p>
                <?php echo $row['Announcement Content']; ?>
                </p>
            </article>
            <?php
                }
                }else{
                echo '<p class="empty">no product added yet!</p>';
                }
            ?>
            
        </div>
    </section>
  </div>
    
     <!--END OF CONTENT-->
     <script src="../../JS/portalmain.js"></script>
  </body>
</html>
