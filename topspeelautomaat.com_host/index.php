<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Breng comfortabel tijd door in een vijfsterrenhotel met een perfect uitzicht. Geniet van de bezienswaardigheden van de stad en het uitstekende casino op het terrein.">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Lato-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/ReemKufiInk-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Telex-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./js/main.js"></script>
  <title>Hilton Amsterdam is een casinohotel met ideale voorwaarden en aanvullende services.</title>
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
            <span class="hero__span text-v2">
              Vijfsterrenhotel met perfect uitzicht over de stad
            </span>
            <h1 class="hero__title title-v1">
              Hilton Amsterdam hotel
            </h1>
            <p class="hero__text text">
              Ideaal gelegen hotel in de hoofdstad van Nederland. Het centrum van Amsterdam ligt op 3 km van het hotel
              en het Vondelpark ligt op een paar minuten rijden.
            </p>
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
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title title-v2">
            Over ons
          </h2>
          <div class="about__content">
            <ul class="about__images">
              <li class="about__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/image-1.webp, ./img/image-1-x2.webp 2x"
                    type="image/webp">
                  <img src="./img/image-1.jpg" srcset="./img/image-1-x2.jpg 2x" loading="lazy" width="300" height="300"
                    alt="Image">
                </picture>
              </li>
              <li class="about__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/image-2.webp, ./img/image-2-x2.webp 2x"
                    type="image/webp">
                  <img src="./img/image-2.jpg" srcset="./img/image-2-x2.jpg 2x" loading="lazy" width="300" height="300"
                    alt="Image">
                </picture>
              </li>
              <li class="about__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/image-3.webp, ./img/image-3-x2.webp 2x"
                    type="image/webp">
                  <img src="./img/image-3.jpg" srcset="./img/image-3-x2.jpg 2x" loading="lazy" width="300" height="300"
                    alt="Image">
                </picture>
              </li>
              <li class="about__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/image-4.webp, ./img/image-4-x2.webp 2x"
                    type="image/webp">
                  <img src="./img/image-4.jpg" srcset="./img/image-4-x2.jpg 2x" loading="lazy" width="300" height="300"
                    alt="Image">
                </picture>
              </li>
            </ul>
            <div class="about__descr">
              <p class="about__text text">
                Het hotel ligt bijna in het centrum van Amsterdam en staat bekend om zijn locatie, aangezien het aan de
                oevers van de gracht ligt, bekend als de plaats van het beroemde protest van John Lennon en Yoko Ono
                tegen de "overnachting", gelegen in een van de rustige wijken van Amsterdam, op twee kilometer van het
                Museumpleinpark waar het Rijksmuseum en het Van Gogh Museum zijn gevestigd, en onze fietsverhuur maakt
                het gemakkelijk om de omgeving te verkennen.
              </p>
              <p class="about__text text">
                Het biedt een bar, een zonneterras en een zonneterras. Gasten hebben toegang tot het fitnesscentrum.
              </p>
              <p class="about__text text">
                Elke ochtend behaagt het hotel de gasten met een Amerikaans ontbijt. Voor het diner serveert Roberto's
                Restaurant internationale gerechten. Het hotel heeft ook een traditionele bar. Er wordt elke ochtend een
                uitgebreid ontbijt geserveerd in de eetzaal van het hotel voor EUR 28 per persoon per nacht.

              </p>
              <p class="about__text text">
                Authentieke Italiaanse gerechten worden geserveerd in het Roberto's Restaurant en tijdens zomeravonden
                kunt u ontspannen op het tuinterras met uitzicht op het Norder Amstelkanaal.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="benefits" id="benefits">
        <div class="benefits__top">
          <div class="container">
            <h2 class="benefits__title title-v2">
              Voorzieningen
            </h2>
            <p class="benefits__text benefits__text_2 text">
              Het hotel heeft veel voordelen, breng uw vakantie met perfecte gevoelens door.
            </p>
          </div>
        </div>
        <div class="benefits__bottom">
          <div class="container">
            <ul class="benefits__list">
              <li class="benefits__item">
                <h3 class="benefits__subtitle title-v3">
                  Komen vaak voor
                </h3>
                <ul class="benefits__sublist">
                  <li class="benefits__subitem">
                    <span class="benefits__icon">
                      <img src="./img/icon.svg" loading="lazy" width="10" height="10" alt="Icon">
                    </span>
                    <p class="benefits__text text">
                      Gratis wifi
                    </p>
                  </li>
                  <li class="benefits__subitem">
                    <span class="benefits__icon">
                      <img src="./img/icon.svg" loading="lazy" width="10" height="10" alt="Icon">
                    </span>
                    <p class="benefits__text text">
                      Parkeren
                    </p>
                  </li>
                  <li class="benefits__subitem">
                    <span class="benefits__icon">
                      <img src="./img/icon.svg" loading="lazy" width="10" height="10" alt="Icon">
                    </span>
                    <p class="benefits__text text">
                      Bagage opslag
                    </p>
                  </li>
                  <li class="benefits__subitem">
                    <span class="benefits__icon">
                      <img src="./img/icon.svg" loading="lazy" width="10" height="10" alt="Icon">
                    </span>
                    <p class="benefits__text text">
                      24-uurs service
                    </p>
                  </li>
                  <li class="benefits__subitem">
                    <span class="benefits__icon">
                      <img src="./img/icon.svg" loading="lazy" width="10" height="10" alt="Icon">
                    </span>
                    <p class="benefits__text text">
                      Maaltijden / Drankjes
                    </p>
                  </li>
                  <li class="benefits__subitem">
                    <span class="benefits__icon">
                      <img src="./img/icon.svg" loading="lazy" width="10" height="10" alt="Icon">
                    </span>
                    <p class="benefits__text text">
                      Sportschool / fitness
                    </p>
                  </li>
                  <li class="benefits__subitem">
                    <span class="benefits__icon">
                      <img src="./img/icon.svg" loading="lazy" width="10" height="10" alt="Icon">
                    </span>
                    <p class="benefits__text text">
                      Spa en lichaamsverzorging
                    </p>
                  </li>
                </ul>
              </li>
              <li class="benefits__item">
                <h3 class="benefits__subtitle title-v3">
                  Diensten
                </h3>
                <ul class="benefits__sublist">
                  <li class="benefits__subitem">
                    <span class="benefits__icon">
                      <img src="./img/icon.svg" loading="lazy" width="10" height="10" alt="Icon">
                    </span>
                    <p class="benefits__text text">
                      Room service
                    </p>
                  </li>
                  <li class="benefits__subitem">
                    <span class="benefits__icon">
                      <img src="./img/icon.svg" loading="lazy" width="10" height="10" alt="Icon">
                    </span>
                    <p class="benefits__text text">
                      Kamer schoon maken
                    </p>
                  </li>
                  <li class="benefits__subitem">
                    <span class="benefits__icon">
                      <img src="./img/icon.svg" loading="lazy" width="10" height="10" alt="Icon">
                    </span>
                    <p class="benefits__text text">
                      Autoverhuur
                    </p>
                  </li>
                  <li class="benefits__subitem">
                    <span class="benefits__icon">
                      <img src="./img/icon.svg" loading="lazy" width="10" height="10" alt="Icon">
                    </span>
                    <p class="benefits__text text">
                      Fietsverhuur
                    </p>
                  </li>
                  <li class="benefits__subitem">
                    <span class="benefits__icon">
                      <img src="./img/icon.svg" loading="lazy" width="10" height="10" alt="Icon">
                    </span>
                    <p class="benefits__text text">
                      De was
                    </p>
                  </li>
                  <li class="benefits__subitem">
                    <span class="benefits__icon">
                      <img src="./img/icon.svg" loading="lazy" width="10" height="10" alt="Icon">
                    </span>
                    <p class="benefits__text text">
                      Stomerij
                    </p>
                  </li>
                  <li class="benefits__subitem">
                    <span class="benefits__icon">
                      <img src="./img/icon.svg" loading="lazy" width="10" height="10" alt="Icon">
                    </span>
                    <p class="benefits__text text">
                      Gidsdiensten / Ticketboeking
                    </p>
                  </li>
                  <li class="benefits__subitem">
                    <span class="benefits__icon">
                      <img src="./img/icon.svg" loading="lazy" width="10" height="10" alt="Icon">
                    </span>
                    <p class="benefits__text text">
                      Welkomstcocktail
                    </p>
                  </li>
                </ul>
              </li>
              <li class="benefits__item">
                <h3 class="benefits__subtitle title-v3">
                  Voeding
                </h3>
                <ul class="benefits__sublist">
                  <li class="benefits__subitem">
                    <span class="benefits__icon">
                      <img src="./img/icon.svg" loading="lazy" width="10" height="10" alt="Icon">
                    </span>
                    <p class="benefits__text text">
                      Ontbijt op de kamer
                    </p>
                  </li>
                  <li class="benefits__subitem">
                    <span class="benefits__icon">
                      <img src="./img/icon.svg" loading="lazy" width="10" height="10" alt="Icon">
                    </span>
                    <p class="benefits__text text">
                      Restaurant
                    </p>
                  </li>
                  <li class="benefits__subitem">
                    <span class="benefits__icon">
                      <img src="./img/icon.svg" loading="lazy" width="10" height="10" alt="Icon">
                    </span>
                    <p class="benefits__text text">
                      Bar / zithoek
                    </p>
                  </li>
                  <li class="benefits__subitem">
                    <span class="benefits__icon">
                      <img src="./img/icon.svg" loading="lazy" width="10" height="10" alt="Icon">
                    </span>
                    <p class="benefits__text text">
                      Speciale dieetmenu's
                    </p>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="contacts" id="contacts">
        <div class="contacts__container container">
          <div class="contacts__descr">
            <h2 class="contacts__title title-v2">
              Neem contact met ons op
            </h2>
            <p class="contacts__text text">
              Jeśli masz jakieś pytania, po prostu wypełnij formularz i wyślij do nas zapytanie. Nasi menedżerowie
              skontaktują się z Tobą i odpowiedzą na wszystkie Twoje pytania.
            </p>
          </div>
          <form class="contacts__form form" action="#!" name="form" autocomplete="on">
            <div class="form__top">
              <input class="form__input text" type="text" name="name" id="name" placeholder="Uw naam..." required>
              <input class="form__input text" type="text" name="email" id="email" placeholder="Email..." required>
            </div>
            <textarea class="form__textarea text" name="textarea" id="textarea" placeholder="Het nieuws..."></textarea>
            <button class="form__button button-v1" type="submit">Versturen</button>
          </form>
        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>
  </div>
</body>

</html>