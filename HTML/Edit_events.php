<?php

include_once 'dbh.inc.php';
session_start();

if(isset($_POST['add'])){

  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $fee = $_POST['fee'];
  $Date = $_POST['date'];
  $starttime = $_POST['starttime'];
  $endtime = $_POST['endtime'];
  $venue = mysqli_real_escape_string($conn, $_POST['venue']);
  $spots = $_POST['spots'];

  $select_title = mysqli_query($conn, "SELECT `Event Name` FROM `events` WHERE `Event Name` = '$name'") or die('query failed');

  if(mysqli_num_rows($select_title) > 0){
    $message[] = 'event already added';
  }else{
    $sql = "INSERT INTO `events` (`Event Name`, `Fee`, `Date`, `Start Time` ,`End Time`, `Venue`, `Spots Left`) 
    VALUES ('$name','$fee', '$Date', '$starttime', '$endtime', '$venue', '$spots')";
      mysqli_query($conn, $sql) or die('query failed');
      $message[] = 'event added!';
  }
  
}

if(isset($_GET['delete'])){
  $delete_id = $_GET['delete'];
  mysqli_query($conn, "DELETE FROM events WHERE `Event ID` = '$delete_id'") or
  die('query failed');
}

if(isset($_POST['update_event'])){

  $update_id = $_POST['update_c_id'];
  $update_name = $_POST['update_name'];
  $update_fee = $_POST['update_fee'];
  $update_date = $_POST['update_date'];
  $update_starttime = $_POST['update_starttime'];
  $update_endtime = $_POST['update_endtime'];
  $update_venue = $_POST['update_venue'];
  $update_spots = $_POST['update_spots'];

  mysqli_query($conn, "UPDATE events SET `Event Name` = '$update_name', `Fee` = '$update_fee', `Date` = '$update_date' , `Start Time` = '$update_starttime', `End Time` = '$update_endtime', `Venue` = '$update_venue', `Spots Left` = '$update_spots' WHERE `Event ID` = '$update_id'") or die('query failed');

  header('location: Edit_events.php');
}

if(isset($_GET['view'])){

  $eventid = $_GET['view'];
  

  $select_event = mysqli_query($conn, "SELECT * FROM `events` WHERE `Event ID` = '$eventid'") or die('query failed');

  if(mysqli_num_rows($select_event) > 0){
      $row = mysqli_fetch_assoc($select_event);

      $_SESSION['event_id'] = $row['Event ID'];

      header('location:Event_member.php');

  }else{
      $message[] = 'Event not found!';
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel/Edit Events</title>

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
      
<div class="content">
      <div class="container content_container">
          <h2>Events</h2>
        <div class="details">
          <div class="add_content">

              <form action="" method = "POST" enctype = "multipart/form-data">
                <h3>Add New Event</h3>
                <input type="text" name = "name" class="box" placeholder = "enter event title" required>
                <input type="number" min="0.00" step="0.1" name = "fee" class="box" placeholder = "enter event fee" required>
                <input type="date" name = "date" class="box" placeholder = "event date" required>
                <input type="time" name = "starttime" class="box" placeholder = "event start time" required>
                <input type="time" name = "endtime" class="box" placeholder = "event end time" required>
                <input type="text" name = "venue" class="box" placeholder = "enter event venue" required>
                <input type="number" name = "spots" class="box" placeholder = "enter event participants maximum capacity" required>
                
            <button type="submit" name = "add" class="btn btn-primary">Add Event</button>
              </form>
              
          </div>

          <section class="show_content">

            <div class="box_container">


              <?php

              $sql = "SELECT * FROM events;";

              $result = mysqli_query($conn, $sql);
              $resultCheck = mysqli_num_rows($result);

              if($resultCheck > 0){
                while($row = mysqli_fetch_assoc($result)){
              
                  ?>
                
              <div class="box">
                  
              <div class="show_content__left">
              <h4><?php echo $row['Event Name']; ?></h4>
              <ul>
                <li>Time: <?php echo $row['Start Time']; ?> - <?php echo $row['End Time']; ?></li>
                <li>Date: <?php echo $row['Date']; ?></li>
                <li>Venue: <?php echo $row['Venue']; ?></li>
                <li>Spots Left: <?php echo $row['Spots Left']; ?> </li>
              </ul>
            </div>

            <div class="show_content_right">
            
            <a href="Edit_events.php?view=<?php echo $row['Event ID'];?>" class="btn btn-primary">participants</a>
              <a href="Edit_events.php?update=<?php echo $row['Event ID'];?>" class="btn btn-primary">update</a>
              <a href="Edit_events.php?delete=<?php echo $row['Event ID'];?>" class="btn btn-primary" onclick="return confirm('Delete this event?')">delete</a>
                  
              
              
            </div>
                  
              </div>
              <?php

                }
              }else{
                echo '<p class="empty">no event added yet!</p>';
              }
              ?>
            </div>
          </section>


          <section class="edit">

          <?php
          if(isset($_GET['update'])){

            $update_id = $_GET['update'];
            $update_query = mysqli_query($conn, "SELECT * FROM `events` WHERE `Event ID` = '$update_id'") or die('query failed');
            if(mysqli_num_rows($update_query)>0){
              while($fetch_update = mysqli_fetch_assoc($update_query)){
          

          ?>
          <form action="" method = "POST" enctype = "multipart/form-data" >

            <input type="hidden" name="update_c_id" value="<?php echo $fetch_update['Event ID']; ?>">
            <input type="text" name="update_name" value="<?php echo $fetch_update['Event Name']; ?>" class="box" placeholder="enter event title" required>
            <input type="number" min="0.00" step="0.1" name="update_fee" value="<?php echo $fetch_update['Fee']; ?>" class="box" required placeholder="content">
            <input type="date" name = "update_date" class="box" placeholder = "event date" required>
            <input type="time" name = "update_starttime" class="box" placeholder = "event start time" required>
            <input type="time" name = "update_endtime" class="box" placeholder = "event end time" required>
            <input type="text" name = "update_venue" class="box" placeholder = "enter event venue" required>
            <input type="number" name = "update_spots" class="box" placeholder = "enter event participants maximum capacity" required>

            <input type="submit" value="update" name="update_event" class="btn btn-primary">
            <input type="reset" value="cancel" id="close-update" class="btn btn-primary">
          </form>
          <?php
              }
            }
          }else{
            echo  '<script>document.querySelector(".edit").style.display = "none";</script>';
          }
          
          ?>
          </section>
        </div>
      </div>
</div>
<script src="../JS/editevent_script.js"></script>
<script src="../JS/portalmain.js"></script>
</body>
</html>