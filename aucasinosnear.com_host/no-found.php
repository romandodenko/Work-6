<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Luxury vacation in a luxury hotel in the heart of the business district. Excellent rooms with a gorgeous view of the Australian nature and an excellent Australian offline casino">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/NotoSans-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/WorkSans-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./js/main.js"></script>
  <title>Hilton Sydney Casino Hotel. Great vacation with online casino and casino at the hotel</title>
</head>

<body>
  <div class="page">
    <?php
    include 'header.php';
    ?>
    <main>
      <section class="hero">
        <div class="hero__container container">
          <div class="hero__descr">
            <span class="hero__span">
              EXPLORE SYDNEY WITH HILTON
            </span>
            <h1 class="hero__title">
              Hilton Sydney
              <span>Casino Hotel</span>
            </h1>
            <p class="hero__text">
              Five star casino hotel where you can book a room online
            </p>
            <a class="hero__link" href="index.php#contacts">
              Contacts
            </a>
          </div>
          <div class="hero__image">
            <picture>
              <source media="(min-width: 320px)" srcset="./img/hero.webp, ./img/hero-x2.webp 2x" type="image/webp">
              <img src="./img/hero.jpg" srcset="./img/hero-x2.jpg 2x" loading="lazy" width="300" height="300"
                alt="Image">
            </picture>
          </div>
        </div>
      </section>
      <section class="no-found">
        <div class="container">
          <h1 class="no-found__title">
            Sorry, this page was not found!
          </h1>
          <p class="no-found__text">
            Dear user. This page was not found, go to the main page.
          </p>
          <a class="no-found__link" href="index.php">
            Main page
          </a>
        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>
  </div>
</body>

</html>