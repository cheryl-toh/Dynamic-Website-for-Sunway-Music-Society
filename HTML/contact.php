<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sunway Music Society</title>
    <link rel="icon" href="/Images/smalllogo.png" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />

    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="stylesheet" href="../CSS/contact.css" />

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

    <!--END OF NAV BAR-->

    <section class="contact">
      <div class="container contact__container">
        <aside class="contact__aside">
          <div class="aside__image">
            <img src="../Images/contact.svg" width="200" />
          </div>

          <h2>Contact Us</h2>

          <p>
            Ask away the questions you have in your mind by filling the form
            here. We promise we will try our best to clear off any doubt you
            have about our society!
          </p>

          <ul class="contact__details">
            <li>
              <i class="uil uil-at"></i>
              <h5>sunwaymusicsocietyofficial@gmail.com</h5>
            </li>

            <li>
              <i class="uil uil-map-marker"></i>
              <h5>
                5, Jalan Universiti, Bandar Sunway, 47500 Petaling Jaya,
                Selangor
              </h5>
            </li>
          </ul>

          <ul class="contact__socials">
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
            <li>
              <a href="https://discord.gg/xreWTUQk" target="_blank"
                ><i class="uil uil-discord"></i
              ></a>
            </li>
          </ul>
        </aside>

        <form>
          <div class="form__name">
            <input
              type="text"
              name="first name"
              placeholder="First Name"
              required
            />
            <input
              type="text"
              name="last name"
              placeholder="Last Name"
              required
            />
          </div>
          <input
            type="email"
            name="Email Address"
            placeholder="Email Address"
            required
          />
          <textarea
            name="Message"
            rows="7"
            placeholder="Message"
            required
          ></textarea>
          <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
      </div>
    </section>

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
