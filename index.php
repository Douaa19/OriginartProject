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
        <marquee behavior="scroll" direction="up" scrollamount="3" style="left: 20%;">
          <img src="./images/33-02.jpg" style="width: 50%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="4" style="left: 2%;">
          <img src="./images/A4 hikayat.jpg" style="width: 20%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="4" style="left: 80%;">
          <img src="./images/Affiche A4 blfan Final-02.jpg" style="width: 90%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="1" style="left: 50%;">
          <img src="./images/affiche B_LFEN 2.jpg" style="width: 50%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="2" style="left: 35%;">
          <img src="./images/affiche f.jpg" style="width: 55%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="3" style="left: 5%;">
          <img src="./images/AFFICHE.jpg" style="width: 25%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="4" style="left: 18%;">
          <img src="./images/Alwan Poster aout-02.jpg" style="width: 25%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="2" style="left: 15%;">
          <img src="./images/Artb 2.png" style="width: 25%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="4" style="left: 58%;">
          <img src="./images/Artb1.png" style="width: 42%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="3" style="left: 80%;">
          <img src="./images/Artbo 3.png" style="width: 85%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="3" style="left: 75%;">
          <img src="./images/Artboard 1.png" style="width: 80%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="2" style="left: 72%;">
          <img src="./images/Artboard 2.png" style="width: 50%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="1" style="left: 20%;">
          <img src="./images/Artboard 3.png" style="width: 35%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="3" style="left: 33%;">
          <img src="./images/blfan copy.jpg" style="width: 50%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="2" style="left: 44%;">
          <img src="./images/Hikayat.png" style="width: 50%;" alt="Natural" />
        </marquee>
        <marquee behavior="scroll" direction="up" scrollamount="2" style="left: 1%;">
          <img src="./images/illustration1 .jpg" style="width: 25%;" alt="Natural" />
        </marquee>
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
          <a href="/"><img src="./images/icons/icons8-facebook.svg" alt=""></a>
          <a href="/"><img src="./images/icons/icons8-instagram-vieux-logo.svg" alt=""></a>
          <a href="/"><img src="./images/icons/icons8-linkedin-2.svg" alt=""></a>
          <a href="/"><img src="./images/icons/icons8-youtube-encadré.svg" alt=""></a>
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