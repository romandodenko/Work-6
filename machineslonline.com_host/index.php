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
      <section class="benefits" id="benefits">
        <div class="container">
          <div class="benefits__titles">
            <h2 class="benefits__title title-v2">
              Vorteile für Hilton Honors-Besucher
            </h2>
            <h3 class="benefits__subtitle title-v3">
              Vorteile
            </h3>
          </div>
          <ul class="benefits__list">
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon-1.svg" loading="lazy" width="30" height="30" alt="Icon">
              </span>
              <p class="benefits__text text-v2">
                Hilton Honors Reduzierter Preis
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon-2.svg" loading="lazy" width="30" height="30" alt="Icon">
              </span>
              <p class="benefits__text text-v2">
                Zeigt kostenlose Übernachtungen und mehr an
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon-3.svg" loading="lazy" width="30" height="30" alt="Icon">
              </span>
              <p class="benefits__text text-v2">
                Wählen Sie Ihre Nummer
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon-4.svg" loading="lazy" width="30" height="30" alt="Icon">
              </span>
              <p class="benefits__text text-v2">
                Digitaler Check-in
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon-5.svg" loading="lazy" width="30" height="30" alt="Icon">
              </span>
              <p class="benefits__text text-v2">
                Hilton würdigt Erfahrungen
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon-6.svg" loading="lazy" width="30" height="30" alt="Icon">
              </span>
              <p class="benefits__text text-v2">
                Digitaler Schlüssel
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="about" id="about">
        <div class="about__container container">
          <div class="about__image about__image_1">
            <picture>
              <source media="(min-width: 320px)" srcset="./img/about-1.webp, ./img/about-1-x2.webp 2x"
                type="image/webp">
              <img src="./img/about-1.jpg" srcset="./img/about-1-x2.jpg 2x" loading="lazy" width="300" height="300"
                alt="Image">
            </picture>
          </div>
          <div class="about__content">
            <div class="about__titles">
              <h2 class="about__title title-v2">
                Neues Casino mit Casino Austria
              </h2>
              <h3 class="about__subtitle title-v3">
                Über das Hotel
              </h3>
            </div>
            <div class="about__bottom">
              <div class="about__image about__image_2">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/about-2.webp, ./img/about-2-x2.webp 2x"
                    type="image/webp">
                  <img src="./img/about-2.jpg" srcset="./img/about-2-x2.jpg 2x" loading="lazy" width="300" height="300"
                    alt="Image">
                </picture>
              </div>
              <div class="about__descr">
                <p class="about__text text-v1">
                  Das Interessanteste am Reisen und Entspannen ist die Erkundung der Gegend, daher ist dieses Hotel
                  ideal gelegen, um alle interessanten Orte der Stadt zu besuchen. Das Hotel liegt direkt im Zentrum von
                  Wien, nicht weit von der historischen Hauptstadt entfernt.
                </p>
                <p class="about__text text-v1">
                  Das Hotel verfügt über exklusive Kunstwerke und exquisite architektonische Elemente, die das Hotel
                  schmücken und ihm eine besondere Ästhetik und Luxus verleihen.Entspannen Sie sich in einem der 254
                  Zimmer, die über Highspeed-Internetzugang, einen Arbeitsbereich und ein bequemes Bett verfügen.
                  Probieren Sie die Meisterwerke der französischen und österreichischen Küche im Restaurant „Brasserie“.
                  Trainieren Sie im großzügigen Fitnessraum mit modernsten Geräten und einer Sauna.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="about about_2" id="restorans">
        <div class="about__container about__container_2 container">
          <div class="about__image about__image_1">
            <picture>
              <source media="(min-width: 320px)" srcset="./img/restorans-1.webp, ./img/restorans-1-x2.webp 2x"
                type="image/webp">
              <img src="./img/restorans-1.jpg" srcset="./img/restorans-1-x2.jpg 2x" loading="lazy" width="300" height="300"
                alt="Image">
            </picture>
          </div>
          <div class="about__content">
            <div class="about__titles">
              <h2 class="about__title about__title_2 title-v2">
                Restaurants und Getränke im Hotel-Casino
              </h2>
              <h3 class="about__subtitle about__subtitle_2 title-v3">
                Restaurants
              </h3>
            </div>
            <div class="about__bottom about__bottom_2">
              <div class="about__image about__image_2">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/restorans-2.webp, ./img/restorans-2-x2.webp 2x"
                    type="image/webp">
                  <img src="./img/restorans-2.jpg" srcset="./img/restorans-2-x2.jpg 2x" loading="lazy" width="300" height="300"
                    alt="Image">
                </picture>
              </div>
              <div class="about__descr">
                <p class="about__text about__text_2 text-v1">
                  The elegant 1920s-style Émile Restaurant & Bar serves Austrian and international cuisine. Here you can enjoy breakfast, lunch and dinner after visiting the new online casino in Austria, as well as cocktails and fine champagnes at the bar.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="contacts" id="contacts">
        <div class="contacts__container container">
          <h2 class="contacts__title title-v2">
            Kontaktiere uns
          </h2>
          <p class="contacts__text text-v1">
            Füllen Sie das Formular aus, um uns zu kontaktieren. Wir werden uns mit Ihnen in Verbindung setzen und alle Ihre Fragen beantworten.
          </p>
          <form class="contacts__form form" action="#!" name="form" autocomplete="on">
            <div class="form__top">
              <input class="form__input" type="text" name="text" id="text" placeholder="Your name..." required>
              <input class="form__input" type="email" name="email" id="email" placeholder="Your email..." required>
            </div>
            <textarea class="form__textarea" name="textarea" id="textarea" placeholder="Message..."></textarea>
          <button class="form__button button-v1" type="submit">Masse senden</button>
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