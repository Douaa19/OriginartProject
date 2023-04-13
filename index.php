<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./style/header.css" />
  <link rel="stylesheet" href="./style/contact-us.css" />
  <link rel="stylesheet" href="./style/footer.css" />
  <link rel="stylesheet" href="./style/theme.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <title>Document</title>
</head>

<body class="dark">
  <header class="container">
    <nav>
      <img id="nav-logo" src="./images/Or-logo-white.svg" alt="" />
      <div class="link">
        <a href="#contact-us">Contact</a>
        <button class="theme-toggle-button">
          <i class="fa-regular fa-sun icon" id="theme"></i>
        </button>
      </div>
    </nav>
    <div class="hero-header">
      <div class="scrolled-images">
        <marquee behavior="scroll" direction="up" scrollamount="3" style="left: 62%">
          <img src="./images/Heritages.png" style="width: 45%" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="5" style="left: 10%">
          <img src="./images/blfan.png" style="width: 35%" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="2" style="left: 2%">
          <img src="./images/0P8A9749.JPG" style="width: 30%" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="5" style="left: 80%">
          <img src="./images/18_12.jpg" style="width: 100%" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="5" style="left: 50%">
          <img src="./images/AFFICHE.jpg" style="width: 55%" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="4" style="left: 67%">
          <img src="./images/7O4A0376.JPG" style="width: 90%" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="2" style="left: 70%">
          <img src="./images/artwork.png" style="width: 100%" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="2" style="left: 45%">
          <img src="./images/Copie de Post birthday 6 nov.jpg" style="width: 50%" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="4" style="left: 42%">
          <img src="./images/Hikayat.png" style="width: 35%" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="2" style="left: 22%">
          <img src="./images/MAC.png" style="width: 35%" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="5" style="left: 15%">
          <img src="./images/opm.jpg" style="width: 58%" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="3" style="left: 1%">
          <img src="./images/poster Qrayathon 3.jpg" style="width: 30%" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="4" style="left: 12%">
          <img src="./images/agadir cultures.png" style="width: 32%" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="3" style="left: 20%">
          <img src="./images/33-02.jpg" style="width: 50%" alt="Natural" />
        </marquee>
      </div>
      <div class="shadow-section"></div>
      <div class="content">
        <h2 class="quotes">We communicate your values</h2>
        <h2 class="quotes">We assert your identity</h2>
        <h2 class="quotes">We tell your story</h2>
        <h2 class="quotes">Origin'Art</h2>
      </div>
    </div>
  </header>
  <section class="contact-us">
    <div class="container" id="contact-us">
      <div class="form">
        <div class="content">
          <div class="content-form">
            <form action="./email.php" method="post">
              <div class="error-message">
                <?php
                if (isset($_GET["error"])) {
                  echo $_GET["error"];
                }
                ?>
              </div>
              <div class="name">
                <input type="text" name="name" placeholder="name" />
              </div>
              <div class="company">
                <input type="text" name="company" placeholder="company" />
              </div>
              <div class="email">
                <input type="email" name="email" placeholder="email" />
              </div>
              <div class="subject">
                <input type="text" name="subject" placeholder="subject" />
              </div>
              <div class="message">
                <textarea name="message" id="message" cols="35" rows="5" placeholder="message"></textarea>
              </div>
              <div class="btn">
                <button type="submit" name="submit" class="custom-btn btn-5">
                  submit
                </button>
              </div>
            </form>
          </div>
          <div class="text">
            <span> We're just a click away</span>
            <span> ready to hear from you</span>
            <span> & bring your ideas to life!</span>
          </div>
        </div>
      </div>
      <div class="follow-us">
        <h1>follow us</h1>
        <div class="icons">
          <a href="https://www.facebook.com/0riginart"><i class="fa-brands fa-3x fa-square-facebook"></i></a>
          <a href="https://www.instagram.com/0rigin_art"><i class="fab fa-3x fa-instagram"></i></a>
          <a href="https://www.linkedin.com/in/0riginart/"><i class="fab fa-3x fa-linkedin"></i></a>
          <a href="https://www.youtube.com/@0riginart/"><i class="fa-brands fa-3x fa-youtube"></i></a>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="part-one">
        <img id="footer-big-logo" src="./images/Originart-logo-white.svg" alt="" />
        <p>Originality sets you free from routine</p>
      </div>
      <div class="part-two">
        <img id="footer-small-logo" src="./images/Or-logo-white.svg" alt="" />
        <div class="copy-right">
          <span>©&nbsp</span>
          <span>2023</span>
          <span><i class="fa-solid fa-brightness icon"></i></span>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="./script/script.js"></script>
  <script>
    (function () {
      var quotes = $(".quotes");
      var quoteIndex = -1;

      function showNextQuote() {
        ++quoteIndex;
        quotes
          .eq(quoteIndex % quotes.length)
          .fadeIn(2000)
          .delay(2000)
          .fadeOut(2000, showNextQuote);
      }

      showNextQuote();
    })();
  </script>
</body>

</html>