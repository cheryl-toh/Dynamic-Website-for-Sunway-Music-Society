<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create New Password</title>
    <link rel="icon" href="/Images/smalllogo.png" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />

    <link rel="stylesheet" href="../CSS/portalstyle.css" />
    <link rel="stylesheet" href="../CSS/forgetpassword.css" />

    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <div class="container signinpage__container">
        <a href="index.php"
          ><img src="../Images/logo.png" width="100" alt="SMS"
        /></a>
      </div>
    </header>
    <section>
      <div class="container forgotpassword__container">
        <h2>Reset Password</h2>

        <form action="/HTML/Member Portal/dashboard.php">
          <input type="password" placeholder="Enter new password" />
          <input type="password" placeholder="Confirm new password" />
          <button type="submit" class="btn btn-primary">Reset Password</button>
        </form>
      </div>
    </section>
  </body>
</html>
