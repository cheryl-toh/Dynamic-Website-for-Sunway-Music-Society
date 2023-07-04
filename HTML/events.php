<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About SMS</title>
    <link rel="icon" href="/Images/smalllogo.png" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />

    <link rel="stylesheet" href="../CSS/style.css" />
    <style>
      .events {
        margin-top: 1rem;
      }
    </style>

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
        <ul class="nav__menu">
          <li><a href="index.php">Home</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>

        <ul class="nav__portal">
          <li>
            <a href="login.php" class="btn btn-portal ms-auto"
              >Go To Member's Portal</a
            >
          </li>
        </ul>

        <button id="Open-menu-btn"><i class="uil uil-bars"></i></button>
        <button id="Close-menu-btn"><i class="uil uil-multiply"></i></button>
      </div>
    </nav>
    <!-- END OF NAV BAR-->

    <section class="events">
      <div class="container events__container">
        <article class="event">
          <span class="events__image"
            ><img src="../Images/welcomesession.jpg"
          /></span>
          <div class="event__info">
            <h4>Welcome Session</h4>
            <a href="welcomesession.php" class="btn btn-primary">Learn More</a>
          </div>
        </article>

        <article class="event">
          <span class="events__image"
            ><img src="../Images/guitarworkshop.jpg"
          /></span>
          <div class="event__info">
            <h4>Guitar Workshop</h4>
            <a href="guitarworkshop.php" class="btn btn-primary">Learn More</a>
          </div>
        </article>

        <article class="event">
          <span class="events__image"
            ><img src="../Images/musicevent.jpg"
          /></span>
          <div class="event__info">
            <h4>World's Music Day Event</h4>
            <a href="musicdayevent.php" class="btn btn-primary">Learn More</a>
          </div>
        </article>

        <article class="event">
          <span class="events__image"
            ><img src="../Images/voxbootcamp.jpg"
          /></span>
          <div class="event__info">
            <h4>Vocalist BootCamp</h4>
            <a href="voxbootcamp.php" class="btn btn-primary">Learn More</a>
          </div>
        </article>

        <article class="event">
          <span class="events__image"><img src="../Images/jam.jpg" /></span>
          <div class="event__info">
            <h4>Weekly Jamming Session</h4>
            <a href="jam session.php" class="btn btn-primary">Learn More</a>
          </div>
        </article>

        <article class="event">
          <span class="events__image"><img src="../Images/rec.jpg" /></span>
          <div class="event__info">
            <h4>Recording Session</h4>
            <a href="recordsession.php" class="btn btn-primary">Learn More</a>
          </div>
        </article>
      </div>
    </section>

    <!--END OF EVENTS-->

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
