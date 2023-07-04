<?php

include_once 'dbh.inc.php';

session_start();

$event_id = $_SESSION['event_id'];


if(!isset($event_id)){
  header('location:Edit_events.php');
}

$select_event = mysqli_query($conn, "SELECT * FROM `event_bookings` WHERE `Event ID` = '$event_id'") or die('query failed');
$event = mysqli_fetch_assoc($select_event);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel/<?php echo $event['Event Name'];?></title>

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

    <link rel="stylesheet" href="../CSS/portalstyle.css" />
    <link rel="stylesheet" href="../CSS/admincontent.css" />
    
</head>

<body>

<nav>
      <div class="container sidenav__container">
        <a href="Edit_Announcement.php"
          ><img src="../Images/logo.png" class = "navimage" alt="SMS"
        /></a>
        <ul class="sidenav__menu">
          <h5 class = "navh5">Dashboard</h5>
          <li>
            <a href="Edit_Announcement.php"><i class="uil uil-estate"></i>Edit Announcement</a>
          </li>
          <hr>
          <h5 class = "navh5">Membership</h5>
          <li>
            <a href="Edit_members.php"
              ><i class="uil uil-user-square"></i>Edit Members</a
            >
          </li>
          <li>
            <a href="Edit_admin.php"
              ><i class="uil uil-user-square"></i>Edit Admins</a
            >
          </li>
          <hr>
          <h5 class = "navh5">Events</h5>
          <li>
            <a href="Edit_events.php"
              ><i class="uil uil-music"></i>Edit Events</a
            >
          </li>
      
        </ul>

        <button id="Open-menu-btn"><i class="uil uil-bars"></i></button>
        <button id="Close-menu-btn"><i class="uil uil-times"></i></button>
      </div>
    </nav>
    <!--END OF SIDE NAV BAR-->

    <div class="content">
      <div class="table_container">
        <h1>Members</h1> 
        <div class="table">
          <table>
          <tr>
            <th>Student ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Imail</th>
            <th>Phone Number</th>
            
          </tr>
          
          <?php

$sql = "SELECT m.* FROM members m, event_bookings ebk WHERE ebk.`Event ID` = '$event_id' AND m.`Student ID` = ebk.`Student ID`;";

            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0){
              while($row = mysqli_fetch_assoc($result)){

            ?>

          <tr>
            <td><?php echo $row['Student ID']; ?></td>
            <td><?php echo $row['First Name']; ?></td>
            <td><?php echo $row['Last Name']; ?></td>
            <td><?php echo $row['Imail']; ?></td>
            <td><?php echo $row['Phone Number']; ?></td>
            
            
            
          </tr>
          <?php

              }
            }else{
              echo '<p class="empty">no member yet!</p>';
            }
          ?>
         
          </table>

          
        </div> 
        <script src="../JS/portalmain.js"></script>
    </body>
</html>