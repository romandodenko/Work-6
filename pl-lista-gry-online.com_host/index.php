<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Najlepsze kasyna z darmowymi i tematycznymi automatami, jeśli lubisz pirackie motywy i poszukiwanie skarbów na wyspie, to nasza strona jest tym, czego potrzebujesz. Gry są dostępne bez rejestracji">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./js/main.js"></script>
  <title>Pirackie przygody w automatach online czekają na Ciebie w najlepszym kasynie online</title>
</head>

<body>
  <div class="page">
    <div class="page__content">
      <?php
      include 'header.php';
      ?>
      <div class="page__body">
        <main>
          <section class="popup popup-active" id="popup">
            <div class="popup__close"></div>
            <div class="popup__body">
              <p class="popup__text">Nasze gry są przeznaczone dla odbiorców DOROSŁYCH w wieku powyżej 18 lat. Klikając przycisk
                Przycisk, aby potwierdzić swój wiek.</p>
              <button class="popup__button">On się zgadza</button>
            </div>
          </section>
          <section class="top">
            <div class="top__container container">
              <span class="top__icon">
                <img src="./img/18+.svg" loading="lazy" width="30" height="30" alt="Icon">
              </span>
            </div>
          </section>
          <section class="hero">
            <div class="container">
              <div class="hero__content">
                <div class="hero__descr">
                  <h1 class="hero__title">
                    Najlepsze <span>kasyna online</span>
                  </h1>
                  <p class="hero__text">
                    <span>Gry oferowane na stronie nie dają użytkownikom szansy na wygranie prawdziwych
                      pieniędzy.</span>
                    Witryna nie zapewnia użytkownikom żadnych umiejętności, które można wykorzystać w prawdziwym
                    hazardzie. Gry są dostępne dla użytkowników powyżej 18 roku życia.
                  </p>
                  <a class="hero__link" href="#games">
                    Grać
                  </a>
                </div>
              </div>
            </div>
          </section>
          <section class="benefits" id="benefits">
            <div class="container">
              <ul class="benefits__list">
                <li class="benefits__item">
                  <h2 class="benefits__title">
                    Nienaganna jakość
                  </h2>
                  <p class="benefits__text">
                    Jakość parametrów graficznych spełnia najwyższe wymagania współczesnych użytkowników gier
                    hazardowych.
                  </p>
                </li>
                <li class="benefits__item">
                  <h3 class="benefits__title">
                    Akompaniament dźwiękowy
                  </h3>
                  <p class="benefits__text">
                    Przyjemnie pobudza gracza podczas kolejnego obrotu bębnów.
                  </p>
                </li>
                <li class="benefits__item">
                  <h3 class="benefits__title">
                    Nienaganna jakość
                  </h3>
                  <p class="benefits__text">
                    Niektóre są atutami maszyny i mogą z łatwością zastąpić brakujący obraz, czyniąc kombinację
                    szczęśliwą.
                  </p>
                </li>
              </ul>
            </div>
          </section>
          <section class="about" id="about">
            <div class="container">
              <h2 class="about__title">
                O kasynie online
              </h2>
              <div class="about__columns">
                <div class="about__column">
                  <p class="about__text">
                    Podniecenie jest obecne w życiu każdego współczesnego człowieka na ulicy. W końcu pojawia się w
                    obecności pewnej dozy ryzyka, które jest naszym codziennym i prawie godzinnym towarzyszem. Czasami w
                    prawdziwym życiu ryzykujemy znacznie więcej niż użytkownicy hazardu w wirtualnych klubach.
                  </p>
                  <p class="about__text">
                    Ale w każdym kasynie online poczujesz zupełnie niesamowitą atmosferę, poczujesz prawdziwy przypływ
                    emocji i imponujący przypływ adrenaliny. Można sobie tylko wyobrazić, co przeżywa odwiedzający
                    wirtualne kasyna, gdy otrzymuje gigantyczny jackpot. To nie tylko eksplozja, ale prawdziwy huragan
                    rozkoszy.
                  </p>
                </div>
                <div class="about__column">
                  <p class="about__text">
                    Aby uzyskać żywe wrażenia i przyjemne emocje, wymyślono wiele rozrywek. Jednym z najciekawszych były
                    i pozostają automaty online za darmo w najlepszym kasynie online. Tutaj dostaniesz porcję wybuchowej
                    adrenaliny i ugasisz pragnienie wrażeń. Możesz grać za darmo i bez rejestracji na dowolnej stronie,
                    oferujemy graczom telefonów komórkowych najłatwiejszą wersję strony, aby zaoszczędzić ruch.
                  </p>
                  <p class="about__text">
                    Nowe darmowe automaty do gry są regularnie dodawane w dobrej jakości dla przyjemności naszych
                    graczy.
                  </p>
                </div>
              </div>
            </div>
          </section>
          <section class="games" id="games">
            <div class="container">
              <h2 class="games__title">
                Gry w kasynie online
              </h2>
              <ul class="games__list">
                <li class="games__item">
                  <div class="games__image">
                    <a href="game-1.php">
                      <img src="./img/game-1.png" loading="lazy" width="30" height="30" alt="Image">
                    </a>
                  </div>
                </li>
                <li class="games__item">
                  <div class="games__image">
                    <a href="game-2.php">
                      <img src="./img/game-2.png" loading="lazy" width="30" height="30" alt="Image">
                    </a>
                  </div>
                </li>
                <li class="games__item">
                  <div class="games__image">
                    <a href="game-3.php">
                      <img src="./img/game-3.png" loading="lazy" width="30" height="30" alt="Image">
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </section>
        </main>
        <?php
        include 'footer.php';
        ?>
      </div>
    </div>
  </div>
</body>

</html>