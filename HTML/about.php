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
    <link rel="stylesheet" href="../CSS/about.css" />

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

    <section class="about__decription">
      <div class="container about__description-container">
        <div class="about__description-left">
          <h1>About</h1>
          <p>
            Sunway Music Society is one of the first Club and Societies formed
            in Sunway University and Sunway College (since 2015). It has been
            shut down for a total of 3 times due to different surcumstances. In
            the year 2022, with the new formed committee members, the society is
            successfully revived and manage to gain 40 members in the first few
            days prior the revive.
          </p>
        </div>

        <div class="about__description-right">
          <img src="../Images/about.svg"/>
        </div>

        </div>
      </div>
    </section>
<!--END OF DESCRIPTION-->



<section class="team">
    <h2>COMMITTEE LINE-UP</h2>
    <div class="container team__container-top">
        <article class="team__member">
            <div class="team__member-image">
                <img src="../Images/Cheryl.jpg" width = 200 alt="Cheryl" />
            </div>
    
            <div class="team__member-info">
                <h4>Cheryl Toh</h4>
                <p>President</p>
            </div>
        </article>

        <article class="team__member">
            <div class="team__member-image">
                <img src="../Images/Angel.jpg" width = 200 alt="Angel" />
            </div>
    
            <div class="team__member-info">
                <h4>Angel Yap</h4>
                <p>Vice President</p>
            </div>
        </article>

        <article class="team__member">
            <div class="team__member-image">
                <img src="../Images/Wong.jpg" width = 200 alt="Wong" />
            </div>
    
            <div class="team__member-info">
                <h4>Wong Shun Kang</h4>
                <p>Secretary</p>
            </div>
        </article>
        </div>
        <div class="container team__container-bottom">
        <article class="team__member">
            <div class="team__member-image">
                <img src="../Images/CS.jpg" width = 200 alt="CS" />
            </div>
    
            <div class="team__member-info">
                <h4>Ooi Chun Sien</h4>
                <p>Vice Secretary</p>
            </div>
        </article>

        <article class="team__member">
            <div class="team__member-image">
                <img src="../Images/Sheron.jpg" width = 200 alt="Sheron" />
            </div>
    
            <div class="team__member-info">
                <h4>Sheron Tan</h4>
                <p>Treasurer</p>
            </div>
        </article>

        <article class="team__member">
            <div class="team__member-image">
                <img src="../Images/Aaron.jpg" width = 200 alt="Aaron" />
            </div>
    
            <div class="team__member-info">
                <h4>Aaron Moses</h4>
                <p>Public Relation Director</p>
            </div>
        </article>

        <article class="team__member">
            <div class="team__member-image">
                <img src="../Images/Emmanuel.jpg" width = 200 alt="Emmanuel" />
            </div>
    
            <div class="team__member-info">
                <h4>Emmanuel Wong</h4>
                <p>Audio Engineering Director</p>
            </div>
        </article>


    </div>
</section>

<!--END OF COMMITTEE LINEUP-->



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
