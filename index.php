<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./style/header.css" />
  <link rel="stylesheet" href="./style/contact-us.css" />
  <link rel="stylesheet" href="./style/footer.css" />
  <title>Document</title>
</head>

<body>
  <header class="container">
    <nav>
      <img src="./images/Or logo-white.svg" alt="">
      <div class="link">
        <a href="#contact-us"><span>Contact</span></a>
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
        <marquee behavior="scroll" direction="up" scrollamount="4" style="left: 67%;">
          <img src="./images/7O4A0376.JPG" style="width: 55%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="2" style="left: 80%;">
          <img src="./images/artwork.png" style="width: 100%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="2" style="left: 45%;">
          <img src="./images/Copie de Post birthday 6 nov.jpg" style="width: 40%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="3" style="left: 62%;">
          <img src="./images/Heritages .png" style="width: 58%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="4" style="left: 42%;">
          <img src="./images/Hikayat.png" style="width: 35%;" alt="Natural" />
        </marquee>
        <!-- <marquee behavior="scroll" direction="up" scrollamount="2" style="left: 22%;">
          <img src="./images/MAC.png" style="width: 35%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="5" style="left: 115%;">
          <img src="./images/opm.jpg" style="width: 58%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="3" style="left: 1%;">
          <img src="./images/poster Qrayathon 3 .jpg" style="width: 24%;" alt="Natural" />
        </marquee> -->
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
          <a href="https://www.facebook.com/0riginart"><img src="./images/icons/icons8-facebook.svg" alt=""></a>
          <a href="https://www.instagram.com/0rigin_art"><img src="./images/icons/icons8-instagram-vieux-logo.svg"
              alt=""></a>
          <a href="https://www.linkedin.com/in/0riginart/"><img src="./images/icons/icons8-linkedin-2.svg" alt=""></a>
          <a href="https://www.youtube.com/@0riginart/"><img src="./images/icons/icons8-youtube-encadré.svg" alt=""></a>
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
</body>

</html>