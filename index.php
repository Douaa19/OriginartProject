<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./style/header.css" />
  <link rel="stylesheet" href="./style/contact-us.css" />
  <link rel="stylesheet" href="./style/footer.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <title>Document</title>
</head>

<body>
  <header class="container">
    <nav>
      <img src="./images/Or logo-white.svg" alt="">
      <div class="link">
        <a href="#contact-us">Contact</a>
        <button class="theme-toggle-button">
          <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <title>theme-light-dark</title>
            <path
              d="M7.5,2C5.71,3.15 4.5,5.18 4.5,7.5C4.5,9.82 5.71,11.85 7.53,13C4.46,13 2,10.54 2,7.5A5.5,5.5 0 0,1 7.5,2M19.07,3.5L20.5,4.93L4.93,20.5L3.5,19.07L19.07,3.5M12.89,5.93L11.41,5L9.97,6L10.39,4.3L9,3.24L10.75,3.12L11.33,1.47L12,3.1L13.73,3.13L12.38,4.26L12.89,5.93M9.59,9.54L8.43,8.81L7.31,9.59L7.65,8.27L6.56,7.44L7.92,7.35L8.37,6.06L8.88,7.33L10.24,7.36L9.19,8.23L9.59,9.54M19,13.5A5.5,5.5 0 0,1 13.5,19C12.28,19 11.15,18.6 10.24,17.93L17.93,10.24C18.6,11.15 19,12.28 19,13.5M14.6,20.08L17.37,18.93L17.13,22.28L14.6,20.08M18.93,17.38L20.08,14.61L22.28,17.15L18.93,17.38M20.08,12.42L18.94,9.64L22.28,9.88L20.08,12.42M9.63,18.93L12.4,20.08L9.87,22.27L9.63,18.93Z" />
          </svg>
        </button>
      </div>
    </nav>
    <div class="hero-header">
      <div class="scrolled-images">
        <marquee behavior="scroll" direction="up" scrollamount="5" style="left: 10%;">
          <img src="./images/blfan.png" style="width: 35%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="2" style="left: 2%;">
          <img src="./images/0P8A9749.JPG" style="width: 30%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="5" style="left: 80%;">
          <img src="./images/18_12.jpg" style="width: 100%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="3" style="left: 20%;">
          <img src="./images/33-02.jpg" style="width: 45%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="5" style="left: 50%;">
          <img src="./images/AFFICHE.jpg" style="width: 55%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="4" style="left: 8%;">
          <img src="./images/agadir cultures.png" style="width: 25%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="3" style="left: 62%;">
          <img src="./images/Heritages .png" style="width: 58%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="4" style="left: 67%;">
          <img src="./images/7O4A0376.JPG" style="width: 90%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="2" style="left: 80%;">
          <img src="./images/artwork.png" style="width: 100%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="2" style="left: 45%;">
          <img src="./images/Copie de Post birthday 6 nov.jpg" style="width: 50%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="4" style="left: 42%;">
          <img src="./images/Hikayat.png" style="width: 35%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="2" style="left: 22%;">
          <img src="./images/MAC.png" style="width: 35%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="5" style="left: 15%;">
          <img src="./images/opm.jpg" style="width: 58%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="3" style="left: 1%;">
          <img src="./images/poster Qrayathon 3 .jpg" style="width: 30%;" alt="Natural" />
        </marquee>
      </div>
      <div class="shadow-section">
      </div>
      <div class="content">
        <h2 class="quotes">We set you free from routine</h2>
        <h2 class="quotes">We communicate your values</h2>
        <h2 class="quotes">We assert your identity</h2>
        <h2 class="quotes">We tell your story</h2>
        <h2 class="quotes">Origin'Art</h2>
      </div>
    </div>
  </header>
  <section class="contact-us">
    <div class="container" id="contact-us">
      <div class=" form">
        <h1>contact us</h1>
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
            <button type="submit" name="submit" class="custom-btn btn-5">submit</button>
          </div>
        </form>
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
        <img src="./images/Originart logo-white.svg" alt="">
        <p>L'originalité, c'est ce qui nous libère de la routine</p>
      </div>
      <div class="part-two">
        <img src="./images/Or logo-white.svg" alt="">
        <div class="copy-right">
          <span>©&nbsp</span>
          <span>2023</span>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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