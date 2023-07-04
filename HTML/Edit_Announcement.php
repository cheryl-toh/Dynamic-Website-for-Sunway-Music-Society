<?php

include_once 'dbh.inc.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
  header('location:login.php');
}

if(isset($_POST['add'])){

  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $content = mysqli_real_escape_string($conn, $_POST['content']);

  $select_title = mysqli_query($conn, "SELECT `Announcement Title` FROM `announcement` WHERE `Announcement Title` = '$name'") or die('query failed');

  if(mysqli_num_rows($select_title) > 0){
    $message[] = 'announcement already added';
  }else{
    $sql = "INSERT INTO `announcement` (`Announcement Content`, `Announcement Title`) VALUES ('$content','$name')";
      mysqli_query($conn, $sql) or die('query failed');
      $message[] = 'announcement added!';
  }
  
}

if(isset($_GET['delete'])){
  $delete_id = $_GET['delete'];
  mysqli_query($conn, "DELETE FROM announcement WHERE `Announcement ID` = '$delete_id'") or
  die('query failed');
}

if(isset($_POST['update_announcement'])){

  $update_id = $_POST['update_c_id'];
  $update_name = $_POST['update_name'];
  $update_content = $_POST['update_content'];

  mysqli_query($conn, "UPDATE announcement SET `Announcement Title` = '$update_name', `Announcement Content` = '$update_content' WHERE `Announcement ID` = '$update_id'") or die('query failed');

  header('location: Edit_Announcement.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel/Edit Announcement</title>

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
          <h2>Announcements</h2>
        <div class="details">
          <div class="add_content">

              <form action="" method = "POST" enctype = "multipart/form-data">
                <h3>Add New Announcement</h3>
                <input type="text" name = "name" class="box" placeholder = "enter announcement title" required>
                <textarea
              name="content"
              rows="7"
              placeholder="Content"
              class="box"
              required
            ></textarea>
            <button type="submit" name = "add" class="btn btn-primary">Add Announcement</button>
              </form>
              
          </div>

          <section class="show_content">

            <div class="box_container">


              <?php

              $sql = "SELECT * FROM announcement;";

              $result = mysqli_query($conn, $sql);
              $resultCheck = mysqli_num_rows($result);

              if($resultCheck > 0){
                while($row = mysqli_fetch_assoc($result)){
              
                  ?>
                
              <div class="box">
                  
                  <div class="show_content_left">
                    <div class="content_title"><?php echo $row['Announcement Title']; ?></div>
                    <div><?php echo $row['Announcement Content']; ?></div>
                  </div>
                  
                  <div class="show_content_right">
                    <a href="Edit_Announcement.php?update=<?php echo $row['Announcement ID'];?>" class="btn btn-primary">update</a>
                    <a href="Edit_Announcement.php?delete=<?php echo $row['Announcement ID'];?>" class="btn btn-primary" onclick="return confirm('Delete this announcement?')">delete</a>
                  </div>
                  
              </div>
              <?php

                }
              }else{
                echo '<p class="empty">no product added yet!</p>';
              }
              ?>
            </div>
          </section>


          <section class="edit">

          <?php
          if(isset($_GET['update'])){

            $update_id = $_GET['update'];
            $update_query = mysqli_query($conn, "SELECT * FROM `announcement` WHERE `Announcement ID` = '$update_id'") or die('query failed');
            if(mysqli_num_rows($update_query)>0){
              while($fetch_update = mysqli_fetch_assoc($update_query)){
          

          ?>
          <form action="" method = "POST" enctype = "multipart/form-data" >

            <input type="hidden" name="update_c_id" value="<?php echo $fetch_update['Announcement ID']; ?>">
            <input type="text" name="update_name" value="<?php echo $fetch_update['Announcement Title']; ?>" class="box" placeholder="enter announcement title" required>
            <input type="text" name="update_content" value="<?php echo $fetch_update['Announcement Content']; ?>" class="box" required placeholder="content">
            <input type="submit" value="update" name="update_announcement" class="btn btn-primary">
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
<script src="../JS/admin_script.js"></script>
<script src="../JS/portalmain.js"></script>
</body>
</html>



