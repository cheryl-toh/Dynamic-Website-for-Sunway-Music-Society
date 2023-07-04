<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forgot Password Page</title>
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
        <a href="index.php"><img src="../Images/logo.png" alt="SMS" /></a>
      </div>
    </header>
    <section>
      <div class="container forgotpassword__container">
        <h2>Forgot Password</h2>
        <p>
          An email will be sent to you with instructions of how to reset your
          password.
        </p>

        <form action="/HTML/createnewpassword.php">
          <!-- action will be added later on to lead to reset password php database-->
          <input type="email" placeholder="Enter your email address" />
          <button type="submit" class="btn btn-primary">
            Send me an email
          </button>
        </form>
      </div>
    </section>
  </body>
</html>
