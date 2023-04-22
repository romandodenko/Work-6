<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Hotel wypoczynkowy w mieście Sopot, w którym spędzisz niezapomniane wakacje. W hotelu jest wszystko co potrzebne do relaksu spa, restauracje, siłownia i wyplacalne kasyna. Do Państwa dyspozycji jest cała wieczorna rozrywka.">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Jost-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Kanit-Medium.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Kanit-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Shanti-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./js/main.js"></script>
  <title>Resort hotel z wyplacanym kasyno i najlepszym hazardem. hotelu w Sopocie.</title>
</head>

<body>
  <div class="page">
    <?php
    include 'header.php';
    ?>
    <main>
      <section class="hero">
        <div class="hero__container container">
          <div class="hero__image">
            <picture>
              <source media="(min-width: 320px)" srcset="./img/image.webp, ./img/image-x2.webp 2x" type="image/webp">
              <img src="./img/image.jpg" srcset="./img/image-x2.png 2x" loading="lazy" width="300" height="300"
                alt="Picture">
            </picture>
          </div>
          <div class="hero__descr">
            <div class="hero__top">
              <span class="hero__icon">
                <img src="./img/icon.svg" loading="lazy" width="40" height="21" alt="Icon">
              </span>
            </div>
            <h1 class="hero__title">
              Sofitel Grand Sopot
            </h1>
            <p class="hero__text">
              Pięciogwiazdkowy hotel wypoczynkowy w Sopocie. Z rozrywką premium i płatnymi kasynami
            </p>
            <ul class="hero__list">
              <li class="hero__item">
                <a class="hero__link hero__link_1" href="#about">
                  O nas
                </a>
              </li>
              <li class="hero__item">
                <a class="hero__link hero__link_2" href="#contacts">
                  Kontakt
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="benefits" id="benefits">
        <div class="container">
          <ul class="benefits__list">
            <li class="benefits__item">
              <div class="benefits__wrapper-icon">
                <span class="benefits__icon">
                  <img src="./img/s-icon.svg" alt="Icon">
                </span>
              </div>
              <p class="benefits__text">
                Płatny prywatny parking na miejscu
              </p>
            </li>
            <li class="benefits__item">
              <div class="benefits__wrapper-icon">
                <span class="benefits__icon">
                  <img src="./img/s-icon-2.svg" alt="Icon">
                </span>
              </div>
              <p class="benefits__text">
                Darmowe wifi
              </p>
            </li>
            <li class="benefits__item">
              <div class="benefits__wrapper-icon">
                <span class="benefits__icon">
                  <img src="./img/s-icon-3.svg" alt="Icon">
                </span>
              </div>
              <p class="benefits__text">
                Wyplacalne kasyno i hazard
              </p>
            </li>
            <li class="benefits__item">
              <div class="benefits__wrapper-icon">
                <span class="benefits__icon">
                  <img src="./img/s-icon-4.svg" alt="Icon">
                </span>
              </div>
              <p class="benefits__text">
                Opieka nad dziećmi
              </p>
            </li>
            <li class="benefits__item">
              <div class="benefits__wrapper-icon">
                <span class="benefits__icon">
                  <img src="./img/s-icon-5.svg" alt="Icon">
                </span>
              </div>
              <p class="benefits__text">
                Basen z pięknym widokiem
              </p>
            </li>
            <li class="benefits__item">
              <div class="benefits__wrapper-icon">
                <span class="benefits__icon">
                  <img src="./img/s-icon-6.svg" alt="Icon">
                </span>
              </div>
              <p class="benefits__text">
                Przebieralnie w centrach fitness i spa
              </p>
            </li>
            <li class="benefits__item">
              <div class="benefits__wrapper-icon">
                <span class="benefits__icon">
                  <img src="./img/s-icon-7.svg" alt="Icon">
                </span>
              </div>
              <p class="benefits__text">
                Wieczorna rozrywka
              </p>
            </li>
            <li class="benefits__item">
              <div class="benefits__wrapper-icon">
                <span class="benefits__icon">
                  <img src="./img/s-icon-8.svg" alt="Icon">
                </span>
              </div>
              <p class="benefits__text">
                Kryty plac zabaw dla dzieci
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title">
            O hotelu z wyplacanym kasyno
          </h2>
          <div class="about__content">
            <div class="about__left">
              <div class="about__left-item about__left-item_1">
                <div class="about__image about__image_1">
                  <picture>
                    <source media="(min-width: 320px)" srcset="./img/about-1.webp, ./img/about-1-x2.webp 2x"
                      type="image/webp">
                    <img src="./img/about-1.jpg" srcset="./img/about-1-x2.jpg 2x" loading="lazy" width="300"
                      height="300" alt="Picture">
                  </picture>
                </div>
              </div>
              <div class="about__left-item about__left-item_2">

              </div>
            </div>
            <div class="about__right">
              <div class="about__right-top">
                <div class="about__image about__image_2" data-da=".about__left-item_2, 991, 0">
                  <picture>
                    <source media="(min-width: 320px)" srcset="./img/about-2.webp, ./img/about-2-x2.webp 2x"
                      type="image/webp">
                    <img src="./img/about-2.jpg" srcset="./img/about-2-x2.jpg 2x" loading="lazy" width="300"
                      height="300" alt="Picture">
                  </picture>
                </div>
                <p class="about__text">
                  Sofitel Grand Sopot to doskonały hotel dla turystów przyjeżdżających do Sopotu. Możesz cieszyć się
                  komfortem i wszystkimi udogodnieniami hotelu, a wszystko to w dobrej cenie. Jeśli chcesz spędzić
                  romantyczny wieczór, hotel jest do tego idealny, romantyczna atmosfera i usługi mają na celu
                  uprzyjemnić pobyt tutaj. Ważną częścią udanego wypoczynku jest zwiedzanie, w pobliżu hotelu znajduje
                  się wiele interesujących miejsc.
                </p>
              </div>
              <div class="about__right-bottom">
                <div class="about__image about__image_3" data-da=".about__left-item_2, 991, 1">
                  <picture>
                    <source media="(min-width: 320px)" srcset="./img/about-3.webp, ./img/about-3-x2.webp 2x"
                      type="image/webp">
                    <img src="./img/about-3.jpg" srcset="./img/about-3-x2.jpg 2x" loading="lazy" width="300"
                      height="300" alt="Picture">
                  </picture>
                </div>
                <div class="about__descr">
                  <p class="about__text">
                    Hotel zapewnia wszelkie wygody, pokoje z telewizorem z płaskim ekranem, klimatyzacją i minibarem. O
                    połączenie z Internetem nie musisz się martwić, ponieważ hotel oferuje bezpłatne Wi-Fi.
                  </p>
                  <p class="about__text">
                    Warto zwrócić uwagę na restauracje, które znajdują się na terenie hotelu. Wyśmienita kuchnia czeka
                    na Ciebie w Sliwce w Kompot, Monte Vino i Toscana Restauran, popularnych włoskich restauracjach w
                    Sopocie.
                  </p>
                  <p class="about__text">
                    Jeśli szukasz wieczornej rozrywki, hotel z przyjemnością zaoferuje Ci wyplacalne kasyna, w których
                    panuje niezapomniana atmosfera podniecenia.
                    Twój komfort i satysfakcja są najważniejsze dla pracowników Sofitel Grand Sopot. Czekamy na Ciebie w
                    Sopocie.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="hotel">
        <div class="container">
          <h2 class="hotel__title">
            Oferty w hotelu z wyplacanym kasyno
          </h2>
          <ul class="hotel__list">
            <li class="hotel__item">
              <div class="hotel__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-1.webp, ./img/hotel-1-x2.webp 2x"
                    type="image/webp">
                  <img src="./img/hotel-1.jpg" srcset="./img/hotel-1-x2.jpg 2x" loading="lazy" width="" height=""
                    alt="">
                </picture>
              </div>
              <h3 class="hotel__subtitle">
                RESTAURACJA
              </h3>
              <p class="hotel__text">
                Kuchnia polska to wyrafinowany i wyrafinowany smak, który roztopi zmysły przy szumie fal. Delektuj się
                morskimi przysmakami i owocami morza przy szumie fal w wykwintnym inspirującym wnętrzu i wspaniałej
                atmosferze w Grand Blue, a wizyta w Le Bar sprawi, że każdy wieczór będzie niezapomniany.
              </p>
            </li>
            <li class="hotel__item">
              <div class="hotel__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-2.webp, ./img/hotel-2-x2.webp 2x"
                    type="image/webp">
                  <img src="./img/hotel-2.jpg" srcset="./img/hotel-2-x2.jpg 2x" loading="lazy" width="" height=""
                    alt="">
                </picture>
              </div>
              <h3 class="hotel__subtitle">
                SPOTKANIA
              </h3>
              <p class="hotel__text">
                Ważne negocjacje i spotkania powinny odbywać się w specjalnie do tego wyznaczonych miejscach. W hotelu
                znajduje się piękna sala konferencyjna o powierzchni 500 m² z inspirującą salą balową. Każde spotkanie
                lub wakacje będą niezapomniane.
              </p>
            </li>
            <li class="hotel__item">
              <div class="hotel__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-3.webp, ./img/hotel-3-x2.webp 2x"
                    type="image/webp">
                  <img src="./img/hotel-3.jpg" srcset="./img/hotel-3-x2.jpg 2x" loading="lazy" width="" height=""
                    alt="">
                </picture>
              </div>
              <h3 class="hotel__subtitle">
                Wyplacalne kasyna
              </h3>
              <p class="hotel__text">
                Wspaniała sala z atmosferą ekscytacji pozwoli zanurzyć się w świat gier i miło spędzić wieczór.
                Bezpłatne kasyno jest dostępne na miejscu przez całą dobę i możesz je odwiedzić w dowolnym momencie.
              </p>
            </li>
            <li class="hotel__item">
              <div class="hotel__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-4.webp, ./img/hotel-4-x2.webp 2x"
                    type="image/webp">
                  <img src="./img/hotel-4.jpg" srcset="./img/hotel-4-x2.jpg 2x" loading="lazy" width="" height=""
                    alt="">
                </picture>
              </div>
              <h3 class="hotel__subtitle">
                Ślub i wydarzenia
              </h3>
              <p class="hotel__text">
                The ballroom is the perfect venue for weddings. Stunning 20th-century hand-carved Baccarat crystal
                chandeliers adorn the high ceiling, beautifully complementing the floral arrangements, elegant tables
                and wood flooring.
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="contacts" id="contacts">
        <div class="container">
          <h2 class="contacts__title">
            Skontaktuj się z nami
          </h2>
          <p class="contacts__text">
            Wyślij swoją aplikację, a my skontaktujemy się z Tobą i odpowiemy na wszystkie Twoje pytania
          </p>
          <form class="contacts__form form" action="#!" name="form" autocomplete="on">
            <div class="form__inputs">
              <input class="form__input" type="text" id="name" name="name" placeholder="Twoje imię..." required>
              <input class="form__input" type="email" id="email" name="email" placeholder="Twój email..." required>
            </div>
            <textarea class="form__textarea" name="textarea" id="textarea" placeholder="Wiadomość..."></textarea>
            <button class="form__button" type="submit">Wysłać</button>
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