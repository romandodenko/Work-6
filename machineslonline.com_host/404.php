<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Design-5-Sterne-Hotel mit eleganten Zimmern im Zentrum von Wien. Das Hotel verfügt über alle Annehmlichkeiten zum Erholen und Wohnen sowie erstklassigen Service.">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Sarala-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/WorkSans-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Shanti-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./js/main.js"></script>
  <title>Das Hilton Vienna Plaza Hotel ist ein Luxushotel im Zentrum von Wien mit Casino in Österreich</title>
</head>

<body>
  <div class="page">
    <?php
    include 'header.php';
    ?>
    <main>
      <section class="hero">
        <div class="hero__container container">
          <div class="hero__left">
            <div class="hero__descr">
              <h1 class="hero__title title-v1">
                Hilton Vienna Plaza Hotel - Wien
              </h1>
              <p class="hero__text text-v1">
                Das Hotel befindet sich mitten im Zentrum von Wien und bietet die fabelhafteste Aussicht auf die
                Hauptstadt. Genau hier befindet sich das neue Austrian Casino.
              </p>
              <ul class="hero__list">
                <li class="hero__item">
                  <a class="hero__linl hero__linl_1 button-v1" href="#contacts">
                    Kontakte
                  </a>
                </li>
                <li class="hero__item">
                  <a class="hero__linl hero__linl_2 button-v2" href="#about">
                    Über das Hotel
                  </a>
                </li>
              </ul>
            </div>
            <ul class="hero-benefits">
              <li class="hero-benefits__item">
                <p class="hero-benefits__text text-v1">
                  Komfortable Lage
                </p>
              </li>
              <li class="hero-benefits__item">
                <p class="hero-benefits__text text-v1">
                  Zimmer für jedes Budget
                </p>
              </li>
              <li class="hero-benefits__item">
                <p class="hero-benefits__text text-v1">
                  Kasino im Hotel
                </p>
              </li>
            </ul>
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
            Entschuldigung, diese Seite wurde nicht gefunden!
          </h1>
          <p class="no-found__text">
            Lieber Nutzer. Diese Seite konnte nicht gefunden werden, bitte gehen Sie zur Hauptseite.
          </p>
          <a class="no-found__link" href="index.php">
            Hauptseite
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