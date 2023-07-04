<?php

include_once 'dbh.inc.php';

if(isset($_POST['add'])){

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
  
    $select_title = mysqli_query($conn, "SELECT `Email` FROM `admin` WHERE `Email` = '$email'") or die('query failed');
  
    if(mysqli_num_rows($select_title) > 0){
      $message[] = 'admin already added';
    }else{
      $sql = "INSERT INTO `admin` (`Email`, `Password`) 
      VALUES ('$email','$password')";
        mysqli_query($conn, $sql) or die('query failed');
        $message[] = 'admin added!';
    }
    
  }

  if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM `admin` WHERE `Admin ID` = '$delete_id'") or
    die('query failed');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel/Edit Admins</title>
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
            <h1>Admins</h1>
            <div class="add_content">

              <form action="" method = "POST" enctype = "multipart/form-data">
                <h3>Add New Admin</h3>
                <input type="email" name = "email" class="box" placeholder = "enter email address" required>
                <input type="password" name = "password" class="box" placeholder = "enter password" required>
                
                <button type="submit" name = "add" class="btn btn-primary">Add Admin</button>
              </form>
              
            </div> 

            <div class="table">
                <table>
                    <tr>
                        <th>Admin ID</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>#</th>
                        
                    </tr>
                    
                    <?php

                        $sql = "SELECT * FROM `admin`;";

                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);

                        if($resultCheck > 0){
                        while($row = mysqli_fetch_assoc($result)){

                        ?>

                    <tr>
                        <td><?php echo $row['Admin ID']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['Password']; ?></td>
                        <td>
                            <a href="Edit_admin.php?delete=<?php echo $row['Admin ID'];?>" class="btn btn-primary" onclick="return confirm('Delete this admin?')">delete</a>
                        </td>
                        
                        
                    </tr>
                    <?php

                        }
                        }else{
                        echo '<p class="empty">no admin yet!</p>';
                        }
                    ?>
        
                </table>
            </div>

        </div>


        
    </div>
  
    <script src="../JS/editmembers_script.js"></script>
    <script src="../JS/portalmain.js"></script>
</body>
</html>