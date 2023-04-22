<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Casino met gratis gokspellen, voor een aangenaam tijdverdrijf met interessante spellen. De site heeft online slots met uitstekende graphics en gemakkelijke toegang zonder registratie">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./js/main.js"></script>
  <title>Speel gratis perfecte gokspellen. Online casino met de beste mechanica.</title>
</head>

<body>
  <div class="page">
    <?php
    include 'header.php';
    ?>
    <main>
      <section class="popup active" id="popup">
        <div class="popup__close"></div>
        <div class="popup__body">
          <p class="popup__text">Onze spellen zijn bedoeld voor een VOLWASSEN publiek ouder dan 18 jaar. Klikken
            de knop
            Knop om uw leeftijd te bevestigen.</p>
          <button class="popup__btn button-v1">Hij is het er mee eens</button>
        </div>
      </section>
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__descr">
              <span class="hero__span text-v2">
                Casino online met gratis gokken
              </span>
              <h1 class="hero__title title-v1">
                Perfecte gratis gokkasten
              </h1>
              <p class="hero__text text-v1">
                <span>De spellen die op de site worden aangeboden, geven gebruikers geen kans om echt geld te
                  winnen.</span>
                De site biedt gebruikers geen vaardigheden die kunnen worden gebruikt bij echt gokken. De spellen zijn
                beschikbaar voor gebruikers van 18 jaar of ouder.
              </p>
              <a class="hero__link button-v1" href="#games">
                Toneelstuk
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="benefits" id="benefits">
        <div class="container">
          <h2 class="benefits__title title-v2">
            Voordelen van ons casino
          </h2>
          <div class="benefits__content">
            <ul class="benefits__list">
              <li class="benefits__item">
                <h3 class="benefits__subtitle title-v3">
                  Beste gokkasten
                </h3>
                <p class="benefits__text text-v2">
                  Een verscheidenheid aan slots met verschillende thema's en hoogwaardige mechanica.
                </p>
              </li>
              <li class="benefits__item">
                <h3 class="benefits__subtitle title-v3">
                  Geen registratie
                </h3>
                <p class="benefits__text text-v2">
                  U hoeft zich niet te registreren om het spel te starten. Begin gewoon met spelen.
                </p>
              </li>
              <li class="benefits__item">
                <h3 class="benefits__subtitle title-v3">
                  Geen verslaving
                </h3>
                <p class="benefits__text text-v2">
                  Games vereisen geen investeringen en er is geen afhankelijkheid, speel voor de lol.
                </p>
              </li>
            </ul>
            <div class="benefits__images">
              <div class="benefits__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/benefits-1.webp, ./img/benefits-1-x2.webp 2x"
                    type="image/webp">
                  <img src="./img/benefits-1.jpg" srcset="./img/benefits-1-x2.jpg 2x" loading="lazy" width="300"
                    height="300" alt="Image">
                </picture>
              </div>
              <div class="benefits__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/benefits-2.webp, ./img/benefits-2-x2.webp 2x"
                    type="image/webp">
                  <img src="./img/benefits-2.jpg" srcset="./img/benefits-2-x2.jpg 2x" loading="lazy" width="300"
                    height="300" alt="Image">
                </picture>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title title-v2">
            Over het gratis casino
          </h2>
          <p class="about__text text-v2">
            Online slots worden door veel casino's aangeboden. Wij zien het als onze taak om gratis spellen op één plek
            te combineren, dit zou het perfecte casino zijn. Kijk bovenaan het paginagedeelte van de pagina en u ziet
            een selectie van fabrikanten wiens gokautomaten wij aanbieden om te spelen. Ik zal je er niet aan herinneren
            dat al dit amusement gratis voor je is! Hier vind je de perfecte verzameling gratis casinospellen van
            verschillende genres en richtingen. Super cool, leuk en cool, de nieuwste en beste casinospellen zijn
            zorgvuldig door ons samengesteld voor jouw plezier. Speel nu online, zonder registratie en helemaal gratis!
            We zijn ervan overtuigd dat casinospellen iedereen kunnen plezieren, ongeacht de leeftijdscategorie van 2
            tot 88 jaar. Alle casinospellen kunnen gratis op volledig scherm worden gespeeld.
          </p>
        </div>
      </section>
      <section class="games" id="games">
        <div class="container">
          <h2 class="games__title title-v2">
            Casino spellen
          </h2>
          <ul class="games__list">
            <li class="games__item">
              <div class="games__image">
                <a href="game-1.php">
                  <picture>
                    <source media="(min-width: 320px)" srcset="./img/game-1.webp" type="image/webp">
                    <img src="./img/game-1.png" loading="lazy" width="10" height="10" alt="Icon">
                  </picture>
                </a>
              </div>
              <a class="games__link button-v2" href="game-1.php">
                Toneelstuk
                <img src="./img/play.svg" loading="lazy" width="10" height="10" alt="Icon">
              </a>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-2.php">
                  <picture>
                    <source media="(min-width: 320px)" srcset="./img/game-2.webp" type="image/webp">
                    <img src="./img/game-2.jpg" loading="lazy" width="10" height="10" alt="Icon">
                  </picture>
                </a>
              </div>
              <a class="games__link button-v2" href="game-2.php">
                Toneelstuk
                <img src="./img/play.svg" loading="lazy" width="10" height="10" alt="Icon">
              </a>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-3.php">
                  <picture>
                    <source media="(min-width: 320px)" srcset="./img/game-3.webp" type="image/webp">
                    <img src="./img/game-3.png" loading="lazy" width="10" height="10" alt="Icon">
                  </picture>
                </a>
              </div>
              <a class="games__link button-v2" href="game-3.php">
                Toneelstuk
                <img src="./img/play.svg" loading="lazy" width="10" height="10" alt="Icon">
              </a>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>
  </div>
</body>

</html>