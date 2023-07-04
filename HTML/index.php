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

    <header>
      <div class="container header__container">
        <div class="header__left">
          <h1>Never Too Late To Jam!</h1>

          <p>
            Sunway Music Society is a place where all Music Lover in Sunway
            University/College unites and jam.
          </p>

          <a href="login.php" target="_blank" class="btn btn-primary"
            >Go To Member's Portal</a
          >
        </div>

        <div class="header__right">
          <img src="../Images/homeheader.svg" width="450" />
        </div>
      </div>
    </header>

    <br />

    <!-- END OF HEADER -->

    <section class="events">
      <h2>Upcoming Events</h2>

      <div class="container events__container">
        <article class="event">
          <div class="events__image">
            <img src="../Images/welcomesession.jpg" />
          </div>
          <div class="event__info">
            <h4>Welcome Session</h4>
            <a href="welcomesession.php" class="btn btn-primary">Learn More</a>
          </div>
        </article>

        <article class="event">
          <div class="events__image">
            <img src="../Images/guitarworkshop.jpg" />
          </div>
          <div class="event__info">
            <h4>Guitar Workshop</h4>
            <a href="guitarworkshop.php" class="btn btn-primary">Learn More</a>
          </div>
        </article>

        <article class="event">
          <div class="events__image">
            <img src="../Images/musicevent.jpg" />
          </div>
          <div class="event__info">
            <h4>World's Music Day</h4>
            <a href="musicdayevent.php" class="btn btn-primary">Learn More</a>
          </div>
        </article>
        <a href="events.php">More Events Here...</a>
      </div>
    </section>

    <br />

    <!--END OF EVENTS-->

    <section class="faqs">
      <h2>Frequently Asked Question</h2>

      <div class="container faq__container">
        <article class="faq">
          <div class="faq__icon"><i class="uil uil-plus"></i></div>
          <div class="question__answer">
            <h4>How do I register to become a member?</h4>
            <p>Go to member's portal and register.</p>
          </div>
        </article>

        <article class="faq">
          <div class="faq__icon"><i class="uil uil-plus"></i></div>
          <div class="question__answer">
            <h4>Do I need to be a member of SMS to attend any events?</h4>
            <p>
              Most probably, yes. But we do organise some events that are open
              to all Sunwayians to attend.
            </p>
          </div>
        </article>

        <article class="faq">
          <div class="faq__icon"><i class="uil uil-plus"></i></div>
          <div class="question__answer">
            <h4>
              Are there any extra activities other than the events mentioned?
            </h4>
            <p>
              We do have some small meet ups from time to time like rehearsals
              and practises. You can always hang out with other members in SMS
              personally anyways ;)
            </p>
          </div>
        </article>

        <article class="faq">
          <div class="faq__icon"><i class="uil uil-plus"></i></div>
          <div class="question__answer">
            <h4>What happen when I missed out an event that I have booked?</h4>
            <p>
              Your absence will be recorded and if you don't attend half the
              events that you have booked for a year, you will be listed as an
              inactive member which will make you incompetent to join the SMS
              Committee.
            </p>
          </div>
        </article>

        <article class="faq">
          <div class="faq__icon"><i class="uil uil-plus"></i></div>
          <div class="question__answer">
            <h4>
              How to know if I am qualified to register for becoming a committee
              member?
            </h4>
            <p>
              According to our club SOP, you must be an active member for at
              least 6 months and must have a year of studies in Sunway
              University/College ahead to be qualified to join our committee.
            </p>
          </div>
        </article>

        <article class="faq">
          <div class="faq__icon"><i class="uil uil-plus"></i></div>
          <div class="question__answer">
            <h4>
              Can I join the society if I do not have any musical background and
              experience?
            </h4>
            <p>
              Ofcourse! We accept anyone that love music in Sunway into our
              society! Don't hesitate and JOIN US NOW!
            </p>
          </div>
        </article>

        <a href="contact.php">Ask a question here...</a>
      </div>
    </section>

    <!--END OF FAQ-->

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

    <script src="../JS/main.js"></script>
  </body>
</html>
