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
          <span>Contact</span>
        </div>
      </nav>
      <!-- <div class="hero-header">
        <div class="scrolling_img">
          <img class="img1" src="./images/33-02.jpg" alt="" /> -->
          <!-- <img class="img2" src="./images/A4 hikayat.jpg" alt="" /> -->
          <!-- <img
            class="img3"
            src="./images/Affiche A4 blfan Final-02.jpg"
            alt=""
          /> -->
          <!-- <img class="img4" src="./images/affiche B_LFEN 2.jpg" alt="" /> -->
          <!-- <img class="img5" src="./images/affiche f.jpg" alt="" />
          <img class="img6" src="./images/AFFICHE.jpg" alt="" /> -->
        </div>
      </div>
    </header>
    <section class="contact-us">
      <div class="container">
        <div class="form">
          <h1>contact us</h1>
          <form action="./email.php" method="post">
            <div class="name">
              <input type="text" name="name" placeholder="name" />
            </div>
            <div class="company">
              <input type="text" name="company" placeholder="company" />
            </div>
            <div class="email">
              <input type="email" name="email" placeholder="email" />
            </div>
            <div class="message">
              <textarea
                name="message"
                id="message"
                cols="35"
                rows="5"
                placeholder="message"
              ></textarea>
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